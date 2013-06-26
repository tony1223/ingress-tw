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
				"Time" => "2013/06/25 12:00",
				"Kml" => "20130625_120001_auto.kmz",
				"Title" => " 雙方已佔領 portal 一覽",
				"Content" => "取得 Portal 總數: 9465，綠軍 5624 個 (59.41%) ， 藍軍 3841 個 (40.58%)。
連線數：4168，綠軍 2363 條 (56.69%) ， 藍軍 1805 條 (43.3%)。
Control Field 數：1979，綠軍 1099 個 (55.53%) ， 藍軍 880 個 (44.46%)。
MU：綠軍 110806 ，藍軍 214634。
				"
			)),
			new FormObject(Array(
				"Time" => "2013/06/26 00:00",
				"Kml" => "20130626_000001_auto.kmz",
				"Title" => " 雙方已佔領 portal 一覽",
				"Content" => "取得 Portal 總數: 9564，綠軍 5692 個 (59.51%) ， 藍軍 3872 個 (40.48%)。
連線數：4271，綠軍 2454 條 (57.45%) ， 藍軍 1817 條 (42.54%)。
Control Field 數：1892，綠軍 1057 個 (55.86%) ， 藍軍 835 個 (44.13%)。
MU：綠軍 96151 ，藍軍 223168。
				。
				"
			)),
			new FormObject(Array(
				"Time" => "2013/06/26 06:00",
				"Kml" => "20130625_060003_auto.kmz",
				"Title" => " 雙方已佔領 portal 一覽",
				"Content" => "取得 Portal 總數: 9577，綠軍 5704 個 (59.55%) ， 藍軍 3873 個 (40.44%)。
連線數：4268，綠軍 2451 條 (57.42%) ， 藍軍 1817 條 (42.57%)。
Control Field 數：1888，綠軍 1053 個 (55.77%) ， 藍軍 835 個 (44.22%)。
MU：綠軍 96180 ，藍軍 223168。"
			))
		);
	}
}