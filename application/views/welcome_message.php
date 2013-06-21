<div class="page-index">
	<div class="brand">
		<div class="player">
			<h1 class="ribbon">
		   		<strong class="ribbon-content">
		   			<span id="effect_line1" style="display:none;" data-words="世界並非如你所見">世界並非如你所見</span><br />
		   			<span id="effect_line2" style="display:none;" data-words="The world around you is not what it seems.">The world around you is not what it seems.</span>
		   		</strong>
			</h1>
			<iframe class="intro-video" src="http://www.youtube.com/embed/zV6cpAs_uj8?wmode=opaque＆rel=0;showinfo=0;controls=0" frameborder="0" allowfullscreen></iframe>
		</div>

	</div>

	<div class="container ">
		<div class="page-header">
		  <h1> Ingress.tw <small>為台灣 Ingress 愛好者準備的網站！</small></h1>
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
	<?php if(0){?>
	<audio src="<?=base_url("resources/audio/keyboard.mp3")?>" autobuffer="autobuffer" id="keyboard" style="display:none;" />
	<?php }?>
</div>
<?php function js_section(){ ?>
<script>
	if($.browser.msie){
		$(".ribbon").remove();
	}
$(function(){
	$("#effect_line1,#effect_line2").on("type",function(){
//		var keyboard = $("#keyboard")[0];
//		if(keyboard){
//			keyboard.play();
//		}
		var node = this;
		$(node).text("").show();

		var index = 0, timer, word = $(this).data("words");

		var light = this.id == "effect_line2";
		var k = function(){
			index++;
			$(node).text(word.substring(0,index));
//			if(index %3 ==0 && keyboard){
//				keyboard.play();
//			}
			if(light) {
				if((index  > 0 && index < 7) || (index  > 10 && index < 20) || (index  > 23 && index < 26)|| (index  > 30 && index < 38)){
					$(".ribbon").css("background","green");
				}else{
					$(".ribbon").css("background","");
				}
			}
			if(index == word.length){
				window.clearTimeout(timer);
			}else{
				timer = setTimeout(k, 2000 / word.length );
			}
		};
		timer = setTimeout(k, 2000 / word.length );
	});
	$("#effect_line1,#effect_line2").trigger("type");
});
</script>
<?php }?>