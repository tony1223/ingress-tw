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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */