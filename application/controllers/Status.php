<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status extends MY_Controller {

	public function ㄛndex()
	{
		$this->_layout("layout",'status/index',
			Array(
				"pageTitle" => "Ingress TW Info",
				"selector" => "status"
			)
		);
	}

	public function view($index){
		$kmls = Array(
			1=>
				Array("kml" => "kml_20130620_0149.kmz",
					"Title" => "2013/06/20 01:49  雙方 已佔領 portal 一覽"),
			2 => Array(
				"kml" => "kml_20130621_0038.kmz",
					"Title" => "2013/06/21 00:38   雙方已佔領 portal 一覽"
			));

		if(empty($kmls[$index])){
			return show_404();
		}

		$this->_layout("layout",'status/view',
			Array(
				"pageTitle" => "戰情概要",
				"selector" => "status",
				"info" => $kmls[$index]
			)
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */