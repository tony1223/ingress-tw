<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Story extends MY_Controller {

	public function index()
	{
		$this->_layout("layout",'story/index',
			Array(
				"pageTitle" => "劇情簡介 - 概要 - Ingress.tw",
				"selector" => "story"
			)
		);
	}

	public function enlightened(){
		$this->_layout("layout",'story/enlightened',
			Array(
				"pageTitle" => "劇情簡介 - 啟蒙軍(Enlightened)- Ingress.tw",
				"selector" => "story"
			)
		);
	}

	public function resistance(){
		$this->_layout("layout",'story/resistance',
			Array(
				"pageTitle" => "劇情簡介 - 反抗軍(Resistance)- Ingress.tw",
				"selector" => "story"
			)
		);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */