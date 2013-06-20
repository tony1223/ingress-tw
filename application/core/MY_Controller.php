<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FormObject{
	var $data;
	public function __construct($data = Array()){
		$this->data = $data;
	}

	public function __get($prop){
		if(isset($this->data[$prop])){
			return $this->data[$prop];
		}else{
			return "";
		}
	}
}

class  MY_Controller  extends  CI_Controller  {
	public function __construct(){
		parent::__construct();
		$this->_init();
	}

	protected function _init(){
		session_start();
	}

	protected function _layout($layout,$view,$params = Array(),$returnStr = false){
		$params["params"]= new FormObject($params);
		$content = $this->load->view($view,$params, true);
		$params["template_body"] = $content;
		$this->load->view($layout,$params, $returnStr);
	}
}


