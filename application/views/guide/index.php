
<style>

	.page-story-index .story-brand{
		position:relative;
	}

	.page-story-index .story-brand .background{
		z-index:1;
	}

	.page-story-index .story-brand .logo{
		top:10%;
		position:absolute;
		z-index:2;
		opacity:0.8;
	}

	.page-story-index .story-brand .logo-e{
		left:-10%;
	}
	.page-story-index .story-brand .logo-r{
		right:-10%;
	}
	.page-story-index .story-brand .logo-e:hover{
		opacity:1;
	}
	.page-story-index .story-brand .logo-r:hover{
		opacity:1;
	}

</style>
<div class="container page-story-index">

  <div class="row">
    <div class="span12 ">
		<div class="page-header">
		  <h1>劇情簡介 <small>瞭解 Ingress 世界</small></h1>
		</div>

		<div class="story-brand clearfix">
			<a href="<?=site_url("story/enlightened")?>" class="logo logo-e"><img class="logo logo-e span6" src="<?=base_url("/img/enlightened_logo.png")?>" /></a>
			<a href="<?=site_url("story/resistance")?>" class="logo logo-r"><img class="span6" src="<?=base_url("/img/resistance_logo.png")?>" /></a>
			<img class="background  span12" src="<?=base_url("/img/index_bland.jpg")?>" />
		</div>

		<p style="font-size:12px;color:gray" class="pull-right">此頁文案與編排資料由 TonyQ 編撰，若有需要另行引用請採用 CC-BY 授權（註明作者與來源網站即可。）。<br />
			Ingress 所有圖案版權為 Google 所有 <a href="https://support.google.com/ingress/answer/2924461">參考資料</a>
		</p>
   </div>
  </div>

</div>

