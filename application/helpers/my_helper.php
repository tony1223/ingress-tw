<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function db_current_date(){
	return date("Y-m-d H:i:s");
}

function get_app_key(){
	$keys = Array("339479699496192","339103652860490","135395566627129");
	return $keys[rand(0, 2)];
}

function _date_format($inp_val,$format = "Y-m-d H:i:s"){
	if($inp_val == null || $inp_val=="0000-00-00 00:00:00"){
		return "";
	}
	if(is_string($inp_val)){
		$val = strtotime($inp_val);
		if($val == -1){
			return "invalid date";
		}
	}else{
		$val = $inp_val;
	}

	return date($format,$val);
}