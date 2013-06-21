<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status extends MY_Controller {

	public function index()
	{
		$infos = array_reverse($this->KMLModel->find_all()); //just in case for array_reverse
		$this->_layout("layout",'status/index',
			Array(
				"pageTitle" => "戰情概要 - Ingress.tw",
				"selector" => "status",
				"infos" => $infos
			)
		);
	}

	public function view($index){
		$info = $this->KMLModel->find_by_id($index);
		if(empty($info)){
			return show_404();
		}

		$this->_layout("layout",'status/view',
			Array(
				"pageTitle" => "戰情概要 ".$info->Time ." - Ingress.tw",
				"selector" => "status",
				"info" => $info
			)
		);
	}

	public function fullview($index){
		$info = $this->KMLModel->find_by_id($index);
		if(empty($info)){
			return show_404();
		}
		$this->load->view('status/fullview',
			Array(
				"pageTitle" => "戰情概要 ".$info->Time." - Ingress.tw",
				"selector" => "status",
				"info" => $info
			)
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */