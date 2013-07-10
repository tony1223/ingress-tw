<div class="container">

  <div class="row">
    <div class="span12 ">
		<div class="page-header">
		  <h1>新手教學 <small>來一起檢視看看常見的遊戲介面吧！</small></h1>
		</div>

		<div class="row tabbable tabs-left">
			<?php include(__DIR__."/_content_nav.php");?>
			<div class="tab-content">
				<h2>基礎遊戲畫面說明</h2>
				<p class="clearfix">
					<img  class="span6" src="<?=base_url("/img/guide/guide_1.png")?>" alt="新手教學 - portal xm 示例" />
				</p>
				<h2>基本介面教學</h2>
				<div>
					<ul>
						<li>
							<p>先選擇陣營，並瞭解自己陣營的顏色：</p>
							<p>當你選擇 enlightened 即為綠軍，選擇 resistance 則為藍軍，也可以由你的指標判斷。</p>
							<p>底下描述敵軍與友軍皆是相對於自己陣營。</p>
						</li>
						<li><p>先找到  portal：</p>
							<p>1.看手機遊戲的地圖可以看到 portal。</p>
							<p>2.看iitc (<a href="http://ingress.com/intel" target="_blank">http://ingress.com/intel</a> ) 也可以看到附近 portal 。</p>
						</li>
						<li>
							<p>點擊 portal 後可進如 portal 操作畫面：</p>
							<p>當 Portal 進入你的圓圈(可操作範圍) 後，可視 portal 狀況進行以下動作：</p>
							<p class="clearfix"><img class="span3" src="<?=base_url("/img/guide/guide_2.png")?>" alt="新手教學 - portal 操作畫面示例" /></p>
							<ul style="margin-top:20px;">
								<li>
									<p><b>Hack</b><small>(取得道具)</small></p>
									<p> 對象：所有 portal </p>
									<p>
										無論中立或敵友軍按 hack 皆可以取得道具，	Hack 敵軍塔可以取得 100 點 AP，對 L1~L2 玩家幫助不小，但消耗 XM 較多。
										<b>Hack 每次需間隔 300 秒，連續 hack 四次後會進入 burn out 狀態，需等待四小時後才能再度 hack</b>。
										(有些道具可以增加 hack 次數或縮短等待時間)</p>
									<div class="alert alert-warning">
										注意： Hack 敵軍 portal 取得道具、可能會使得敵軍部份不理性的玩家腦羞並獲得乞丐稱號，
										建議忽略部份不理性玩家言論，如<a href="http://i.imgur.com/dAyzWgp.jpg" target="_blank">此範例</a>。</div>
								</li>
								<li>
									<p><b> Deploy </b> <small>(建置 Res )</small></p>
									<p>對象：友軍 Portal 、中立 portal </p>
									<p>如果是中立塔或友軍塔、尚未布滿 8 個 Res 、您有 Res 此一道具且您的 XM 足夠的情況下，
									   Deploy 按鈕將會亮起，此時可點擊 deploy 進行置放 res，系統將自動置放您最低等級的 res 至此 portal 。</p>
									<p> Deploy 後將會獲得 AP，佔領中立 portal 與將 portal 完成（布滿八個）皆可獲得額外 AP ；
										同一個 portal 第一次 deploy (佔領) 共可獲得 625 AP ，第二到第七次 deploy  AP 可獲得 125 AP，第八次則能獲得 375 AP。
										故獨自完成 deploy 一個 portal 8個 res 共可獲得 1750 AP。
									</p>
									<p> Deploy 時會根據你與 portal 的距離置放 Res ，太近的 res 會讓敵軍很容易攻擊，
										一般建議當 portal 剛好位於自己圓圈（勢力範圍）邊緣時，置放後防禦效果最好。</p>
									<small>預設會置放最低等級，若您想自行選擇置放至 Portal 的 res 等級，請改用 <b>Upgrade</b> 功能。</small>
								</li>
								<li>
									<p><b>Recharge</b><small>(充電)</small></p>
									<p>對象：友軍 Portal </p>
									<p> portal 的 res 剛 deploy 時能量條為全滿，但 24 小時後會掉 15% 能量，
										一旦太長時期沒有 recharge ，當能量達到 0% 時 res 會自動消滅。
										當所有 res 都消滅時， portal 將回到中立塔。

										此時可透過 recharge 進行充電，因每次充電接會耗損一定比例 XM ，
										一般不建議 L1 ~L3 玩家充電，可等待塔回歸中立後重新佔領獲得更多 AP。

										每次充電可獲得 10 AP。
									</p>
									<small>註：若 portal res 太少且能量過低時，link / field 可能會消失。 res 消失後重新 deploy 仍可獲得 ap。</small>
								</li>
								<li>
									<p><b> Upgrade </b><small>(升級)</small></p>
									<p>對象：友軍 Portal </p>
									<p>
										可針對特定方位進行 deploy 或 升級低等 Res 至高等 Res。升級時若該 res 升級前能量有受損升級後將回到 100%。
									</p>
									<p class="clearfix"><img class="span3" src="<?=base_url("img/guide/guide_3.png")?>"  alt="新手教學 - upgrade portal" /></p>
								</li>
								<li>
									<p><b> Target </b><small>(定位)</small></p>
									<p>對象：所有 Portal </p>
									<p>
										可在主地圖上追蹤特定 portal ，並且顯示與該 portal 距離，並且當距離小於 40m 時，
										會自動進入 portal 畫面以方便 hack 或其他行為。
									</p>
									<p class="clearfix"><img class="span3" src="<?=base_url("img/guide/guide_4.png")?>"  alt="新手教學 - Target view" /></p>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>

		</div>

		<p style="font-size:12px;color:gray" class="pull-right">此頁文案與編排資料由 TonyQ 編撰，若有需要另行引用請採用 CC-BY 授權（註明作者與來源網站即可。）。<br />
			Ingress 所有圖案版權為 Google 所有 <a href="https://support.google.com/ingress/answer/2924461">參考資料</a>
		</p>
   </div>
  </div>

</div>

