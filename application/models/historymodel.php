<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @property CI_DB_active_record $db
 * @author TonyQ
 *
 */
class HistoryModel extends MY_Model {
	public $_table = 'history';
	public $primary_key = 'HistoryID';

	function __construct()
	{
		parent::__construct();
	}

	function find_by_id($id){
		return $this->get($id);
	}

	function find_all(){
		$this->db->select("*");
		$this->db->order_by("CreateDate","desc");
		$query = $this->db->get($this->_table);

		return $query->result();
	}

	function insert_db(){

//		$olds = $this->find_all_old();
//
//		foreach($olds as $kml){
//			$this->db->insert(
//				$this->_table,
//				Array(
//					"Type" => $kml->Title,
//					"Title" => $kml->Title,
//					"CreateDAte" => $kml->Time,
//					"KML" => "http://ingress.tw/resources/status/".$kml->Kml,
//					"Description" => $kml->Content
//				)
//			);
//		}


	}

	function find_all_old(){
		return  Array(
/*
			1=>
				new FormObject(Array(
					"KMLID" => 1,
					"Time" => "2013/06/20 01:49",
					"Kml" => "kml_20130620_0149.kmz",
					"Title" => "雙方 已佔領 portal 一覽",
					"Content" => "取得 Portal 總數: 9615，綠軍 5983 個 (62.23%) ，藍軍 3632 個 (37.77%)。\n無 連線數 資料。\n無 Control Field 資料。\n無 MU 資料。"
				)),
*/
			new FormObject(Array(
				"Time" => "2013/06/26 12:00",
				"Kml" => "20130626_120001_auto.kmz",
				"Title" => " 雙方已佔領 portal 一覽",
				"Content" => "取得 Portal 總數: 9526，綠軍 5705 個 (59.88%) ， 藍軍 3821 個 (40.11%)。
連線數：4286，綠軍 2444 條 (57.02%) ， 藍軍 1842 條 (42.97%)。
Control Field 數：1956，綠軍 1098 個 (56.13%) ， 藍軍 858 個 (43.86%)。
MU：綠軍 96321 ，藍軍 248220。。
				"
			)),
			new FormObject(Array(
				"Time" => "2013/06/26 18:00",
				"Kml" => "20130626_180001_auto.kmz",
				"Title" => "取得 Portal 總數: 9533，綠軍 5700 個 (59.79%) ， 藍軍 3832 個 (40.2%)。
連線數：4284，綠軍 2485 條 (58%) ， 藍軍 1799 條 (41.99%)。
Control Field 數：1972，綠軍 1127 個 (57.15%) ， 藍軍 845 個 (42.84%)。
MU：綠軍 137074 ，藍軍 414459。
				"
			)),
			new FormObject(Array(
				"Time" => "2013/06/27 00:00",
				"Kml" => "20130627_000001_auto.kmz",
				"Title" => " 雙方已佔領 portal 一覽",
				"Content" => "取得 Portal 總數: 9616，綠軍 5881 個 (61.16%) ， 藍軍 3734 個 (38.83%)。
連線數：4379，綠軍 2603 條 (59.44%) ， 藍軍 1776 條 (40.55%)。
Control Field 數：2017，綠軍 1194 個 (59.19%) ， 藍軍 823 個 (40.8%)。
MU：綠軍 157595 ，藍軍 384460。
				"
			)),
			new FormObject(Array(
				"Time" => "2013/06/27 06:00",
				"Kml" => "20130627_060001_auto.kmz",
				"Title" => " 雙方已佔領 portal 一覽",
				"Content" => "取得 Portal 總數: 9599，綠軍 5902 個 (61.48%) ， 藍軍 3697 個 (38.51%)。
連線數：4277，綠軍 2589 條 (60.53%) ， 藍軍 1688 條 (39.46%)。
Control Field 數：1960，綠軍 1191 個 (60.76%) ， 藍軍 769 個 (39.23%)。
MU：綠軍 157449 ，藍軍 381437。"
			))
		);
	}
}