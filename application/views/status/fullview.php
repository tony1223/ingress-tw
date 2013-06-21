<?php include(__DIR__."/../_site_header.php") ?>
<?php include(__DIR__."/../_content_nav.php");?>
<style>
#map-canvas {
	margin: 0;
	padding: 0;
	height: 90%;
	width:100%;
}
html { height: 100% }
body { height: 100%; margin: 0px; padding: 0px }
</style>
<div style="margin-top:-10px;height:95%;width:100%;">
	<a class="btn" href="<?=site_url("status/view/".$info->KMLID)?>">回一般瀏覽模式</a> <?=htmlspecialchars($info->Time)?> <?=htmlspecialchars($info->Title)?>
	<div id="map-canvas"  data-resource="<?=base_url("resources/status/".$info->Kml)?>"></div>
	<p>此處所有資料來自於 ingress/intel 並由 TonyQ 後製而成，資料所有權屬官方所有，統計結果若有需要另行引用請採用 CC-BY 授權（註明作者與來源網站即可。）。</p>
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
<?php include(__DIR__."/../_site_footer.php"); ?>