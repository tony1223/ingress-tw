<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status extends MY_Controller {

	public function index()
	{
		$infos = $this->HistoryModel->find_all(); //just in case for array_reverse
		$this->_layout("layout",'status/index',
			Array(
				"pageTitle" => "戰情概要",
				"selector" => "status",
				"infos" => $infos
			)
		);
	}

	public function renew(){
		$this->HistoryModel->insert_db();
	}

	public function latest(){
		$info = $this->HistoryModel->find_last();
		if(empty($info)){
			return show_404();
		}

		$this->_layout("layout",'status/view',
			Array(
				"pageTitle" => "最新戰情概要 "._date_format($info->CreateDate) ."",
				"selector" => "status",
				"info" => $info
			)
		);
	}

	public function neutral($type = null){
		if($type == "full"){
			$this->load->view('status/neutral_full',
				Array(
					"pageTitle" => "最新空點地圖 - 全頁模式",
					"selector" => "status"
				)
			);

			return true;
		}
		if($type =="latest"){
			redirect("https://maps.google.com.tw/?q=http://ingress.tw/static/white/white_latest.kmz%3ft=".date("Ymd_Hi"));
			return true;
		}
		if($type == "android"){
			$this->_layout("layout",'status/neutral_android',
				Array(
					"pageTitle" => "最新空點地圖 - 全頁模式",
					"selector" => "status"
				)
			);

			return true;
		}
		$this->_layout("layout",'status/neutral',
			Array(
				"pageTitle" => "最新空點地圖",
				"selector" => "status"
			)
		);
	}

	public function view($index){
		$info = $this->HistoryModel->find_by_id($index);
		if(empty($info)){
			return show_404();
		}

		$this->_layout("layout",'status/view',
			Array(
				"pageTitle" => "戰情概要 "._date_format($info->CreateDate) ."",
				"selector" => "status",
				"info" => $info
			)
		);
	}

	public function fullview($index){
		$info = $this->HistoryModel->find_by_id($index);
		if(empty($info)){
			return show_404();
		}
		$this->load->view('status/fullview',
			Array(
				"pageTitle" => "戰情概要 ". _date_format($info->CreateDate)."",
				"selector" => "status",
				"info" => $info
			)
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */