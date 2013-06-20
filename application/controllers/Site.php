<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller {

	public function Invite()
	{
		$this->load->view('invite',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "home"
				)
				);
	}
	public function GettingStart()
	{
		$this->load->view('under_construction',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "home"
				)
				);
	}
	public function Status()
	{
		$this->load->view('under_construction',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "home"
				)
				);
	}
	public function Links()
	{
		$this->load->view('under_construction',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "home"
				)
				);
	}

	public function About(){
		$this->load->view('about',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "home"
				)
				);
	}

	public function Story(){
		$this->load->view('under_construction',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "home"
				)
				);
	}

	public function History(){
		$this->load->view('under_construction',
		Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "home"
				)
				);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */