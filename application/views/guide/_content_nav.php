<?php if(empty($selector_2)) { $selector_2 = "";}?>

<ul class="nav nav-tabs span3" style="min-height: 400px;">
	<li class="<?= ($selector_2 =="active_account") ? "active":""?>" ><a href="<?=site_url("guide/active_account")?>">啟動帳號教學</a></li>
	<li class="<?= ($selector_2 =="index") ? "active":""?>" ><a href="<?=site_url("guide/")?>">基本名詞介紹</a></li>
	<li class="<?= ($selector_2 =="game-control") ? "active":""?>" ><a href="<?=site_url("guide/game-control")?>">基礎介面與 portal 操作介紹</a></li>
	<li class="<?= ($selector_2 =="level-1") ? "active":""?>" ><a href="<?=site_url("guide/level-1")?>"> L1 新手攻略（初心者指南）</a></li>

	<li class="<?= ($selector_2 =="create_portal") ? "active":""?>" ><a href="<?=site_url("guide/create_portal")?>"> 建立 portal 教學 </a></li>
</ul>