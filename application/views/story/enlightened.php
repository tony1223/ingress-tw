<div class="container">

  <div class="row">
    <div class="span12 ">
		<div class="page-header">
		  <h1>劇情介紹 - 啟蒙軍 <small> 深信運用與學習新科技將為世界帶來嶄新的面貌</small> </h1>
		</div>


		<div class="base">
			<p>一切目前仍是謎團，究竟這一切的起源為何、會變成什麼樣子，一切都是未知，唯一目前能揭露的事情，就是這世界並非如你所見。</p>

			<strong style="margin:0 auto;display:block;">The world around you is not what it seems.</strong>

			<hr />
			<p>無論事情的真相如何，一切都已經發生，是時候該採取行動了！接下來這段影片將會告訴你所有我們已知的訊息</p>
			<iframe style="margin-left:0px;" class="span12" height="400px" src="http://www.youtube.com/embed/zV6cpAs_uj8?wmode=opaque＆rel=0;showinfo=0;controls=0" frameborder="0" allowfullscreen></iframe>
			<hr />

			<p>
				記得，一切的開始都是未知，這裡沒有真實、一切只有未知與猜測。
			</p>
			<p>
				有一天網路上出現一個神秘網站 <a href="http://www.nianticproject.com/" target="_blank">Niantic Project</a> 。

			</p>

			<p>我知道這很難讓人相信，但無論你信或不信，這一切已經發生。<strong>It's time to move.</strong></p>
			<hr />
		</div>

		<div class="descritpion">
			<p> 啟蒙軍 </p>

			<p></p>
		</div>

		<div>
			<p>其他參考資料：</p>
			<ul>
				<li>
					<a href="http://ingressguide.com/what-is-ingress/the-enlightened/" target="_blank">ingressguide.com</a>
				</li>
			</ul>
		</div>
		<p class="notice">此處所有文字由 TonyQ 編撰而成並僅供參考，所有 Ingress 相關 icon 圖片屬官方所有，採用 CC-BY 授權（註明作者與來源網站即可。）。</p>
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