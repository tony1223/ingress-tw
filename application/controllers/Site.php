<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller {

	public function Invite()
	{
		$this->_layout("layout",'invite',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "invite"
				)
				);
	}
	public function GettingStart()
	{
		$this->_layout("layout",'under_construction',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "gettingstart"
				)
				);
	}

	public function Links()
	{
		$this->_layout("layout",'under_construction',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "links"
				)
				);
	}

	public function About(){
		$this->_layout("layout",'about',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "about"
				)
		);
	}

	public function Story(){
		$this->_layout("layout",'under_construction',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "story"
				)
				);
	}

	public function History(){
		$this->_layout("layout",'history',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "history"
				)
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */