<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Story extends MY_Controller {

	public function index()
	{
		$this->_layout("layout",'story/index',
			Array(
				"pageTitle" => "劇情簡介 - 概要",
				"selector" => "story"
			)
		);
	}

	public function enlightened(){
		$this->_layout("layout",'story/enlightened',
			Array(
				"pageTitle" => "劇情簡介 - 啟蒙軍(Enlightened)",
				"selector" => "story"
			)
		);
	}

	public function resistance(){
		$this->_layout("layout",'story/resistance',
			Array(
				"pageTitle" => "劇情簡介 - 反抗軍(Resistance)",
				"selector" => "story"
			)
		);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */