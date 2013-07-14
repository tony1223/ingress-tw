<?php if(empty($selector)) { $selector = "";}?>
<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<div class="container">
	    	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
      <a class="brand" href="<?=site_url("/")?>">
      	<img class="logo" src="<?=base_url("img/Ingress-flat-circle-256.png")?>" alt="Ingree Logo" style="margin-right:20px;" />Ingress.tw
      </a>
    <div class="fb-like-container"><div class="fb-like" data-href="<?=site_url("/")?>" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false"></div></div>
    <div class="nav-collapse collapse">
      	<ul class="nav">
        	<li class="<?=$selector=="home" ? "active":""?>">
            	<a href="<?=site_url("/")?>">首頁</a>
          	</li>
          	<li class="<?=$selector=="invite" ? "active":""?>">
	            <a href="<?=site_url("/invite")?>">如何取得邀請碼</a>
          	</li>
          	<li class="dropdown <?=$selector=="guide" ? "active":""?>">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown">新手教學 <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li ><a href="<?=site_url("guide/")?>">基本名詞介紹</a></li>
					<li ><a href="<?=site_url("guide/game-control")?>">基礎介面與 portal 操作介紹</a></li>
					<li ><a href="<?=site_url("guide/level-1")?>"> L1 新手攻略（初心者指南）</a></li>
					<li ><a href="<?=site_url("guide/create_portal")?>"> 建立 portal 教學 </a></li>
				</ul>
          	</li>

	<?php if(0){?>
          	<li class="<?=$selector=="story" ? "active":""?>">
	        	<a href="<?=site_url("/story")?>">故事劇情</a>
          	</li>
     <?php } ?>
          	<li class="dropdown <?=$selector=="status" ? "active":""?>">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown">戰情概要 <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="<?=site_url("/status/neutral")?>">最新空點地圖<b style="color:red;">Hot!</b></a></li>
					<li><a href="<?=site_url("/status/latest")?>">最新戰情地圖</a></li>
					<li><a href="<?=site_url("/status")?>">戰情歷史</a></li>
				</ul>
          	</li>
        	<li class="<?=$selector=="history" ? "active":""?>">
          		<a href="<?=site_url("/history")?>">台灣大事紀</a>
        	</li>
        	<li class="<?=$selector=="links" ? "active":""?>">
          		<a href="<?=site_url("/links")?>">相關連結</a>
        	</li>
        	<li  class="<?=$selector=="about" ? "active":""?>">
          		<a href="<?=site_url("/about")?>"> 關於我們</a>
        	</li>
      	</ul>
	</div>
    </div>
  </div>
</div>