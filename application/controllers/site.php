<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller {

	public function invite()
	{
		$this->_layout("layout",'invite',
		Array(
				"pageTitle" => "如何取得邀請碼 - Ingress.tw",
				"selector" => "invite"
				)
				);
	}
	public function gettingstart()
	{
		$this->_layout("layout",'under_construction',
		Array(
				"pageTitle" => "新手教學  - Ingress.tw",
				"selector" => "gettingstart"
				)
				);
	}

	public function links()
	{
		$this->_layout("layout",'under_construction',
		Array(
				"pageTitle" => "相關連結 - Ingress.tw",
				"selector" => "links"
				)
				);
	}

	public function about(){
		$this->_layout("layout",'about',
		Array(
				"pageTitle" => "關於 Ingress.tw",
				"selector" => "about"
				)
		);
	}

	public function history(){
		$this->_layout("layout",'history',
		Array(
				"pageTitle" => "台灣大事記  - Ingress.tw",
				"selector" => "history"
				)
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */