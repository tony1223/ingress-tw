<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guide extends MY_Controller {

	public function index()
	{
		$this->_layout("layout",'guide/index',
			Array(
				"pageTitle" => "新手教學 - Ingress.tw",
				"selector" => "guide",
				"infos" => $infos
			)
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */