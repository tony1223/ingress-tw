<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller {

	public function invite()
	{
		$this->_layout("layout",'invite',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "invite"
				)
				);
	}
	public function gettingstart()
	{
		$this->_layout("layout",'under_construction',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "gettingstart"
				)
				);
	}

	public function links()
	{
		$this->_layout("layout",'under_construction',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "links"
				)
				);
	}

	public function about(){
		$this->_layout("layout",'about',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "about"
				)
		);
	}

	public function story(){
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