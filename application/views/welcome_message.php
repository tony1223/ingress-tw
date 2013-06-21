<div class="page-index">
	<div class="brand">
		<div class="player">
			<h1 class="ribbon">
		   		<strong class="ribbon-content">
		   			The world around you is not what it seems. 世界非如你所見。
		   		</strong>
			</h1>
			<iframe class="intro-video" src="http://www.youtube.com/embed/zV6cpAs_uj8?wmode=opaque＆rel=0;showinfo=0;controls=0" frameborder="0" allowfullscreen></iframe>
		</div>

	</div>

	<div class="container ">
		<div class="page-header">
		  <h1> Ingress Taiwan Info <small>台灣 Ingress 熱愛者 為您準備的網站！</small></h1>
		  <p> 我們將分享遊戲的教學，各種遊戲中收集到的新聞，各種有趣的資訊。</p>
		</div>


	  <div class="row">
	    <div class="span12 ">
	    	<h1> 什麼是 Ingress </h1>
	    	<p> 由  Google 的 NianticLabs 開發的一款結合現實與生活的 Android App 免費遊戲，你可以<a href="https://play.google.com/store/apps/details?id=com.nianticproject.ingress" target="_blank">在 Google Play 上 找到本遊戲。</a></p>
			<h1> 如何取得邀請碼加入遊戲 </h1>
			<p>若您需要邀請碼，請至 <a target="_blank" href="http://www.ingress.com/">官方網站</a> 透過 Request An Invit 並輸入您的 email 帳號取得邀請碼，<a href="<?=site_url("/invite")?>">更多有關如何取得邀請碼的說明</a>。</p>
			<p> <a href="<?=site_url("/invite")?>"><img src="<?=base_url("img/step1.png")?>" /></a></p>
	    </div>
	  </div>
	</div>
</div>
<?php function js_section(){ ?>
<script>
	if($.browser.msie){
		$(".ribbon").remove();
	}
</script>
<?php }?>