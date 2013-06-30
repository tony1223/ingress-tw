
<div class="container">

  <div class="row">
    <div class="span12 ">
		<div class="page-header">
		  <h1>L1 新手教學 <small>歡迎來到 Ingress 世界！</small></h1>
		</div>

		<div class="row tabbable tabs-left">
			<?php include(__DIR__."/_content_nav.php");?>
			<div class="tab-content">
				<h2>Ingress 歡迎您的加入！<small>對剛進入這個世界的您，我們將指引您進行基本攻略。</small></h2>

				<ul>
					<li>
						<p><b>在攻略開始之前，您是否已經選擇好陣營了呢？</b></p>
						<p> 若您對於選擇陣營還有困擾，我們建議您可以參考 <a href="<?=site_url("/story")?>" target="_blank">劇情簡介</a> 選擇您認同的陣營，
							並參考 <a href="<?=site_url("/status/latest")?>" target="_blank">最新戰況</a>根據您當地所在的陣營狀況進行選擇。
						</p>
						<p> 如果您所在的地區藍軍與綠軍 portal 都很稀少，恭喜您將成為開拓者，您將需要協助建立新的 portal 並耕耘他，
							請別擔心，我們會在遊戲的攻略中陸續指引您進行遊戲。</p>
						<p>
							選擇當地所在的強勢方（portal 多者）可能會擁有較多友軍資源，但加入當地 portal 較少者則有 hack 敵方塔有額外經驗值的優勢，
							並且在遊戲中後期會有比較多打擊敵方 portal 的機會，根據遊戲設定無論選擇哪一方一般都能有足夠遊戲空間。
						</p>
					</li>
					<li>
						<p><b>正式開始囉</b></p>

						<p> 在一開始的狀況，玩家身上沒有任何道具，您可能不知道該如何進行這個遊戲，若您不幸周遭生活範圍沒有任何 portal ，
							遊戲中有提供基本的新手任務，可以先試著進行並體驗。但<b>新手任務僅供熟悉並體驗遊戲，不會提供任何獎勵或經驗值協助。</b></p>
					</li>
					<li>
						<p><b>找尋您的第一個 portal !</b></p>
						<p>
							所有的過程跟經過主要都繞著 portal 進行，所以先挑選您生活圈中最接近的 portal 是必要的。
							您可以先在電腦或手機 web 上先透過 Intel Map 進行查詢或直接在遊戲地圖上尋找，
							如果您畫面上沒有 portal ，遊戲會自動出現最近的幾個 portal 為您作提示。
						</p>
						<p> 底下為您簡介電腦上如何使用 Intel Map：</p>
						<ol>
							<li>
								<p>首先連線至 Intel Map 網站，網址為 <a href="http://www.ingress.com/intel" target="_blank">http://www.ingress.com/intel</a>，您將見到如下畫面</p>
								<p class="clearfix">
									<img class="span6" src="<?=base_url("img/guide/guide_lv1_1.png")?>" alt="新手教學 - Intel Map 登入畫面" />
								</p>
							</li>
							<li>
								<p>點擊 Log-in 進入 Intel Map 網站，您將見到如下要求授權畫面（email 將代換成您的登入 email）</p>
								<p class="clearfix">
									<img class="span6" src="<?=base_url("img/guide/guide_lv1_2.png")?>" alt="新手教學 - Intel Map 請求授權畫面" />
								</p>
							</li>
							<li>
								<p>點擊 Allow 授權繼續後，您將進入如下世界地圖模式：</p>
								<p class="clearfix">
									<img class="span6" src="<?=base_url("img/guide/guide_lv1_3.png")?>" alt="新手教學 - Intel Map 預設地圖畫面" />
								</p>
							</li>
							<li>
								<p>點擊右上方定位鈕（上圖箭頭處），可以快速定位置目前瀏覽器所偵測到您 GPS 的所在處，如下圖是筆者所見的畫面，可以很清楚看見附近的 portal 與其陣營。</p>
								<p class="clearfix">
									<img class="span6" src="<?=base_url("img/guide/guide_lv1_4.png")?>" alt="新手教學 - Intel Map 移至所在位置示例" />
								</p>
							</li>
							<li>
								<p>您可自由的透過滑鼠中鍵或右方控制條控制地圖縮放，以尋找住家附近的 portal ，但 portal 會隨著縮放等級顯示，
								   當縮放到縣市大小時，可能只會出現 L3 ~L4 以上的 portal，縮放至全台灣大小時，可能只會出現 L7 ~ L8 的 portal，
								   所以一般是建議局部拖曳並尋找附近的 portal。目前 Intel Map 由於使用玩家非常多，偶爾會出現不穩定與取得資料失敗的狀況。
								</p>
							</li>
						</ol>
					</li>
					<li>
						<b>找到 Portal 之後呢？</b>
						<p> Hack! 對於 L1~ L4 之間，最重要的事情就是 hack ，在 <a href="<?=site_url("/guide")?>" target="_blank">基本名詞介紹</a>中，
							我們曾介紹過幾種獲得 ap （經驗值）的方式，其中對新手最需要的幾個管道 deploy/link/field，
							都需要透過 hack 先取得 res/portal key 的方式進行，另外如果 hack 敵軍塔也有經驗值。</p>

						<p>
							對 L1 玩家而言，想辦法尋找地圖上的中立（白色） portal 並進行佔領，或是未滿 8 個 res 的塔進行 deploy 都是很好的 AP 管道，
							若不幸找不到中立塔則想辦法 hack 敵軍塔也可有 AP 進帳。
							L1 玩家並不建議協助 portal recharge ，因為 hack 、 deploy 跟 link 都需要 xm ，請將 xm 留給 deploy 並練習保持 xm 充裕狀態。</p>
						<p>
							也可跟著高等玩家一起行動，常見團體行動的作法為高等玩家協助清除敵方 portal、給予基本 res/key 等物資 ，
							然後讓新手玩家進行 deploy 與 link 。
						</p>
					</li>
					<li>
						<b>升級到 L2 很困難嗎？</b>
						<p>
							升級到 L2 需要 10000 AP ，完全佔領六座塔並置放 res 可以升級（一座塔 deploy 8 個 res 可拿到 1750 AP），
							有建立 field 的狀況下只要建立約 6  個 field 就可以升級（ link + field 的 AP）或是 hack 敵軍塔一百次也可以升級。
						</p>

						<p> 一般升級到 L2 這段時間主要是體驗遊戲介面，瞭解遊戲玩法、熟悉生活 portal 、開始慢慢蒐集遊戲物品為主，
							升上 L2 並不難，一般玩家可以在 1~5 天內達成，視所在地 portal 數量。
						</p>
					</li>
					<li>
						<b>我住的地方剛好都沒有 portal 怎麼辦？</b>
						<p> portal 是由玩家建立並遞交的，這意味著即使您現在附近沒有 portal ，
							也可能因為其他玩家或您的申請而在之後突然出現新的 portal 。</p>
						<p>
							如果您的附近 portal 不多，我們非常建議遞交新的 portal 申請，建立新 portal 既可增加自己的遊戲性，也讓其他玩家有更多遊戲空間，一舉多得。</p>
						<p> 申請期間從一週到兩個月不等，視 google 官方處理時間而定，
							關於如何提交新 portal 的細節，請參考 <a href="<?=site_url("/guide/create_portal")?>" target="_blank">建立 portal 教學</a>。</p>
					</li>
				</ul>



			</div>
		</div>
		<p style="font-size:12px;color:gray; margin-top:50px;" class="pull-right">
			此頁文案與編排資料由 TonyQ 編撰，若有需要另行引用請採用 CC-BY 授權（註明作者與來源網站即可。）。<br />
			Ingress 所有圖案版權為 Google 所有 <a href="https://support.google.com/ingress/answer/2924461">參考資料</a>
		</p>
   </div>
  </div>

</div>

