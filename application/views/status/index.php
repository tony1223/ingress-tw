
<div class="container">

  <div class="row">
    <div class="span12 ">
		<div class="page-header">
		  <h1>戰情概要  <small>透過近期地圖戰況瞭解台灣戰局與 Ingress 火熱程度</small></h1>
		</div>
		<div class="alert alert-warning">由於伺服器資料蒐集的極限，有些資料可能仍有些不完整，請大家閱讀時僅供參考，我們會再盡力調整擷取方式。</div>

		<h1>近期戰情報導(每日更新)</h1>
		<table class="table table-bordered">
			<tr>
				<td>紀錄日期、時間</td>
				<td>戰情地圖</td>
			</tr>

			<?php foreach($infos as $info){?>
			<tr>
				<td><?=$info->Time?> </td>
				<td> <a href="<?=site_url("status/view/".$info->KMLID)?>"><?=htmlspecialchars($info->Title)?></a> (註：屬實驗版，仍有許多 portal 缺漏)
					<hr />
					<?=nl2br(htmlspecialchars($info->Content))?>
				</td>
			</tr>
			<?php }?>
		</table>

		<p>此處所有資料來自於 ingress/intel 並由 TonyQ 後製而成，資料所有權屬官方所有，統計結果若有需要另行引用請採用 CC-BY 授權（註明作者與來源網站即可。）。</p>
   </div>
  </div>

</div>

