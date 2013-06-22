<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class KMLModel extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}

	function find_by_id($id){
		$all = $this->find_all();
		if(isset($all[$id])){
			return $all[$id];
		}
		return null;
	}

	function find_all(){
		return  Array(
			1=>
				new FormObject(Array(
					"KMLID" => 1,
					"Time" => "2013/06/20 01:49",
					"Kml" => "kml_20130620_0149.kmz",
					"Title" => "雙方 已佔領 portal 一覽",
					"Content" => "取得 Portal 總數: 9615，綠軍 5983 個 (62.23%) ，藍軍 3632 個 (37.77%)。\n無 連線數 資料。\n無 Control Field 資料。\n無 MU 資料。"
				)),
			2 => new FormObject(Array(
				"KMLID" => 2,
				"Time" => "2013/06/21 00:38",
				"Kml" => "kml_20130621_0038.kmz",
				"Title" => " 雙方已佔領 portal 一覽",
				"Content" => "取得 Portal 總數: 8406，綠軍 4934 個 (58.7%) ，藍軍 3472 個 (41.3%)。
					連線數：4328 ，綠軍 2548 條 （58.87%) ，藍軍 1780 條 (41.13% )
					Control Field 數：2137 ，綠軍 1246 個(58.31%)，藍軍 891 個 (41.69%)
					MU：綠軍 271013 ，藍軍 253412。"
			)),
			3 => new FormObject(Array(
				"KMLID" => 3,
				"Time" => "2013/06/21 22:14 ",
				"Kml" => "20130621_221425.kmz",
				"Title" => "雙方已佔領 portal 一覽",
				"Content" =>"取得 Portal 總數: 9297，綠軍 5586 個 (60.08%) ， 藍軍 3711 個 (39.91%)。
連線數：4397，綠軍 2706 條 (61.54%) ， 藍軍 1691 條 (38.45%)。
Control Field 數：2109，綠軍 1293 個 (61.3%) ， 藍軍 816 個 (38.69%)。
MU：綠軍 153453 ，藍軍 1040139。"
			)),
			4 => new FormObject(Array(
				"KMLID" => 4,
				"Time" => "2013/06/22 01:44",
				"Kml" => "20130622_014436.kmz",
				"Title" => "雙方已佔領 portal 一覽",
				"Content" =>"取得 Portal 總數: 9261，綠軍 5605 個 (60.52%) ， 藍軍 3656 個 (39.47%)。
連線數：4283，綠軍 2675 條 (62.45%) ， 藍軍 1608 條 (37.54%)。
Control Field 數：2009，綠軍 1252 個 (62.31%) ， 藍軍 757 個 (37.68%)。
MU：綠軍 139189 ，藍軍 864192。"
			)),
			5 => new FormObject(Array(
				"KMLID" => 5,
				"Time" => "2013/06/22 13:23",
				"Title" => "雙方已佔領 portal 一覽",
				"Kml" => "20130622_132301.kmz",
				"Content" =>"取得 Portal 總數: 9215，綠軍 5497 個 (59.73%) ， 藍軍 3705 個 (40.26%)。
連線數：4317，綠軍 2657 條 (61.54%) ， 藍軍 1660 條 (38.45%)。
Control Field 數：2026，綠軍 1243 個 (61.35%) ， 藍軍 783 個 (38.64%)。
MU：綠軍 219005 ，藍軍 871601。"
			))
			);
	}
}