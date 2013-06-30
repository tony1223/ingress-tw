<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller {

	public function invite()
	{
		$this->_layout("layout",'invite',
		Array(
				"pageTitle" => "如何取得邀請碼",
				"selector" => "invite"
				)
				);
	}

	public function links()
	{
		$this->_layout("layout",'link',
		Array(
				"pageTitle" => "相關連結",
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
				"pageTitle" => "台灣大事記 ",
				"selector" => "history"
				)
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */