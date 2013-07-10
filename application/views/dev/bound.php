<style>
#map-canvas {
        margin: 0;
        padding: 0;
        height: 100%;
      }

</style>
<div class="container">

  <div class="row">
    <div class="span12 ">
		<div class="page-header">
		  <h1>戰情概要詳情  <small>透過近期地圖戰況瞭解台灣戰局與 Ingress 火熱程度</small></h1>
		</div>
		<div class="alert alert-warning">本功能尚屬實驗版，由於伺服器資料蒐集的極限，有些資料可能仍有些不完整，請大家閱讀時僅供參考。</div>

		<div id="map-canvas" class="span12 gmap" style="height:500px" data-start="<?=htmlspecialchars($start)?>" data-end="<?=htmlspecialchars($end)?>" ></div>

		<p>此處所有資料來自於 ingress/intel 並由 TonyQ 後製而成，資料所有權屬官方所有，統計結果若有需要另行引用請採用 CC-BY 授權（註明作者與來源網站即可。）。</p>
   </div>
  </div>

</div>

<?php function js_section(){ ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">

  var map;
  function initialize() {

    var start = $("#map-canvas").data("start").split(",");
    var end = $("#map-canvas").data("end").split(",");

    var mapOptions = {
      zoom: 15,
      center: new google.maps.LatLng(start[0],start[1]),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    var bermudaTriangle ;


	var geo_points = [];
	geo_points.push(new google.maps.LatLng(start[0],start[1]));
	geo_points.push(new google.maps.LatLng(end[0],start[1]));
	geo_points.push(new google.maps.LatLng(end[0],end[1]));
	geo_points.push(new google.maps.LatLng(start[0],end[1]));

    bermudaTriangle= new google.maps.Polygon({
    	paths: geo_points,
    	strokeColor: "#00FFFF",
    	strokeOpacity: 0.8,
    	strokeWeight: 2,
    	fillColor: "#00FFFF",
    	fillOpacity: 0.35
  	});
    bermudaTriangle.setMap(map);

	setTimeout(function(){
		google.maps.event.trigger(map, 'resize');
	},1000);
  }

  $(initialize);

</script>

<?php } ?>