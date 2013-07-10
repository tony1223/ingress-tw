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
		  <h1>戰情概要 - 空點地圖 <small>快速找到空點！</small></h1>
		</div>
		<div class="alert alert-warning">本功能尚屬實驗版，由於伺服器資料蒐集的極限，有些資料可能仍有些不完整，請大家閱讀時僅供參考。</div>

		<div class="alert alert-info">本頁資料來源每 20 分鐘更新一次，所以建議您可二十分鐘重新整理一次。</div>
		<a class="btn" href="<?=site_url("status/neutral/full")?>">全頁地圖模式瀏覽</a>
		<div class="clearfix">
			<div id="map-canvas" class="span12 gmap" style="height:500px" data-resource="<?=htmlspecialchars("http://ingress.tw/static/white/white_latest.kmz?t=".date("Ymd_Hi"))?>"></div>
		</div>

		<hr />

		<a href="<?=site_url("status/neutral/android")?>"> <h2>不想開電腦嗎？看看讓您能從 Android 一鍵快速瀏覽本地圖最新版的教學</h2></a>


		<hr />
		<p>
			此處所有資料來自於 ingress/intel 並由 TonyQ 後製而成，資料所有權屬官方所有，
			統計結果若有需要另行引用請採用 CC-BY 授權（註明作者與來源網站即可。）。<br />
			若您喜歡本站所提供的資訊，請將本站及 ingress 遊戲推廣給您的朋友，即是最大的支持。:)
		</p>
   </div>
  </div>

</div>

<?php function js_section(){ ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">

  var map;
  function initialize() {
    var mapOptions = {
      zoom: 15,
      center: new google.maps.LatLng(25.046733,121.542613),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
    var georssLayer = new google.maps.KmlLayer($("#map-canvas").data("resource"));
	georssLayer.setMap(map);
	google.maps.event.addListener(georssLayer, "metadata_changed", function() {
		setTimeout(function(){
			map.setCenter(new google.maps.LatLng(25.046733,121.542613));
			map.setZoom(15);
			google.maps.event.trigger(map, 'resize');
		},500);
		google.maps.event.trigger(map, 'resize');
	});
	setTimeout(function(){
		google.maps.event.trigger(map, 'resize');
	},1000);
  }

  $(initialize);

</script>

<?php } ?>