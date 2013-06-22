<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Dev for developer testing */
class Dev extends MY_Controller {
	public function map()
	{	
		
		$this->_layout("layout",'dev/map',
			Array(
				"pageTitle" => "Ingress.tw - 台灣非官方 Ingress 教學與資料收集中心",
				"selector" => "home"
			)
		);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */