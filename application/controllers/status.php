<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status extends MY_Controller {

	public function index()
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
					"Title" => "2013/06/20 01:49  雙方 已佔領 portal 一覽",
					"Content" => "取得 Portal 總數: 9615，綠軍 5983 個 (62.23%) ，藍軍 3632 個 (37.77%)。 (註：這一版屬實驗版，仍有許多 portal 缺漏，估計約有 5 ~ 10%  誤差。)"
				),
			2 => Array(
				"kml" => "kml_20130621_0038.kmz",
				"Title" => "2013/06/21 00:38   雙方已佔領 portal 一覽",
				"Content" => "取得 Portal 總數: 8406，綠軍 4934 個 (58.7%) ，藍軍 3472 個 (41.3%)。 (註：這一版屬實驗版，仍有許多 portal 缺漏，估計約有  5 ~ 10%  誤差。)"
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