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
		  <h1>戰情概要 -  Android 空點地圖使用教學 <small>讓您可以從 android 一鍵瀏覽本地圖且最新版的方法</small></h1>
		</div>
		<div class="alert alert-warning">本功能尚屬實驗版，由於伺服器資料蒐集的極限，有些資料可能仍有些不完整，請大家使用時僅供參考。</div>
		<ul>
			<li> 原理：將 <?=site_url("status/neutral/latest")?> 加到書籤，並新增到主螢幕。</li>
			<li>
				<p> 以 Chrome For Android 為例（建議大家使用這個瀏覽器，比內建的快很多。）</p>

				<p class="clearfix">
					<img src="<?=base_url("/img/status/android/guide_neutral_android_00.png")?>" alt="Chrome app icon" />
				</p>
			</li>
			<li>
				<p>首先先將您的手機開至本頁，長按此連結 <a href="<?=site_url("status/neutral/latest")?>">最新地圖連結</a> 並選擇複製網址。</p>
				<p class="clearfix">
					<img class="span4" src="<?=base_url("/img/status/android/guide_neutral_android_01.png")?>" alt="空點地圖 教學 設定 01" />
				</p>
				<p class="clearfix">
					<img class="span4" src="<?=base_url("/img/status/android/guide_neutral_android_02.png")?>" alt="空點地圖 教學 設定 02" />
				</p>
			</li>
			<li>
				<p>接著點擊 "設定" 出現設定選單，點擊 icon 建立書籤，並移至 "地址" 項目</p>
				<p class="clearfix">
					<img class="span4" src="<?=base_url("/img/status/android/guide_neutral_android_03.png")?>" alt="空點地圖 教學 設定 03" />
				</p>
			</li>
			<li>
				<p>貼上剛剛的網址，並修改標題為自己容易識別的標題(ex.空點地圖)，並儲存。 </p>
				<p class="clearfix">
					<img class="span4" src="<?=base_url("/img/status/android/guide_neutral_android_04.png")?>" alt="空點地圖 教學 設定 04" />
				</p>
			</li>
			<li>
				<p>接著點擊 "書籤" ，此時應該會出現剛建好的書籤，<b>長按</b>該書籤並選擇 "新增至主螢幕"</p>
				<p class="clearfix">
					<img class="span4" src="<?=base_url("/img/status/android/guide_neutral_android_05.png")?>" alt="空點地圖 教學 設定 05" />
				</p>
				<p class="clearfix">
					<img class="span4" src="<?=base_url("/img/status/android/guide_neutral_android_06.png")?>" alt="空點地圖 教學 設定 06" />
				</p>
				<p class="clearfix">
					<img class="span4" src="<?=base_url("/img/status/android/guide_neutral_android_07.png")?>" alt="空點地圖 教學 設定 07" />
				</p>
			</li>
			<li>
				<p>接下來只要點擊該 icon 即可瀏覽最新地圖囉，若您有安裝 google map app ，
				可以選擇在 google map 上瀏覽，效果更好。：）</p>
				<p class="clearfix">
					<img class="span4" src="<?=base_url("/img/status/android/guide_neutral_android_08.png")?>" alt="空點地圖 教學 設定 08" />
				</p>
				<p class="clearfix">
					<img class="span4" src="<?=base_url("/img/status/android/guide_neutral_android_09.png")?>" alt="空點地圖 教學 設定 09" />
				</p>
				<p class="clearfix">
					<img class="span4" src="<?=base_url("/img/status/android/guide_neutral_android_10.png")?>" alt="空點地圖 教學 設定 10" />
				</p>
				<p class="clearfix">
					<img class="span4" src="<?=base_url("/img/status/android/guide_neutral_android_11.png")?>" alt="空點地圖 教學 設定 11" />
				</p>
			</li>
			<li>
				<p>Enjoy it! :) </p>
			</li>
		</ul>
		<hr />
		<p>
			此頁資料由 TonyQ 編撰而成，Ingress 相關資料圖像所有權屬 Ingress 官方所有，
			本頁資料若有需要另行引用請採用 CC-BY 授權（註明作者與來源網站即可。）。<br />
			若您喜歡本站所提供的資訊，請將本站及 ingress 遊戲推廣給您的朋友，即是對我們最大的支持。:)
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