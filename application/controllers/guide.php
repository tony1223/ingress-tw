<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guide extends MY_Controller {

	public function index()
	{
		$this->_layout("layout",'guide/index',
			Array(
				"pageTitle" => "新手教學",
				"selector" => "guide",
				"selector_2" => "index",
			)
		);
	}
	public function game_control()
	{
		$this->_layout("layout",'guide/game_control',
			Array(
				"pageTitle" => "新手教學",
				"selector_2" => "game-control",
			)
		);
	}

	public function level_1()
	{
		$this->_layout("layout",'guide/level_1',
			Array(
				"pageTitle" => "新手教學 - L1 (等級一)",
				"selector_2" => "level-1",
			)
		);
	}

	public function create_portal()
	{
		$this->_layout("layout",'guide/create_portal',
			Array(
				"pageTitle" => "新手教學 - 如何建立 portal ",
				"selector_2" => "create_portal",
			)
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */