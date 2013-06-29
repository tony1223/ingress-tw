
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
		  <h1>新手教學 <small>在 Ingress 世界裡感到徬徨嗎？沒問題！</small></h1>
		</div>

		<div class="row">
			<div class="span2">
				<ul>
					<li><a href="<?=site_url("guide/")?>">一般概論</a></li>
<!-- 					<li><a href="<?=site_url("guide/level-1")?>">純新手概論</a></li>  -->
				</ul>
			</div>
			<div class="content span10">

				<table class="table table-bordered">
					<tr>
						<th colspan="3">
							基本名詞介紹  <small>更多請參考 <a href="http://ingressportal.com/research/definitions/" target="_blank">definitions</a></small>
						</th>
					</tr>
					<tr>
						<td class="span3">項目</td>
						<td class="span6">說明</td>
						<td class="span3">範例</td>
					</tr>
					<tr>
						<td> Agent </td>
						<td>
							<p>翻譯為幹員，玩家在遊戲裡面的角色。	</p>
						</td>
						<td>
						</td>
					</tr>
					<tr>
						<td>
							L1 ~ L8
						</td>
						<td>
							<p>
								L 是等級的意思(level ) L1 就是等級一 、L2 是等級二 以此類推。
							</p>
							<p>
								塔有等級、玩家有等級、道具有等級，玩家只能使用跟自己同級或比自己等級低的道具。玩家剛加入時為 L1 ，目前等級最高為 L8。
								等級跟道具的關係請參考新手攻略。
							</p>
						</td>
						<td>
						"耶 我今天升 L8 了！" <br />
						"我只有 L1 ，還不能用 L2 的道具。"<br />
						"誰還有 L6 xmp 啊～借我一點"<br />
						</td>
					</tr>
					<tr>
						<td>
							AP , Action Points
						</td>
						<td>
							<p>
							 	行動點數，類似經驗值，當 AP 累積到一定程度時會升級，升級後可以使用更高等級的道具並取得更高等級的資源，
							 	玩家只能使用跟自己同級或比自己等級低的道具，可透過多種遊戲裡面的操作提昇 AP 。
							</p>
						</td>
						<td>
							"我剛佔領了一座 portal 增加 625 AP 欸！"
						</td>
					</tr>
					<tr>
						<td> 藍軍(反抗軍、Resistance) </td>
						<td> 遊戲裡的兩大陣營之一，玩家在進入遊戲時必須選擇陣營，更多詳情請參考劇情介紹。 </td>
						<td> &nbsp;</td>
					</tr>
					<tr>
						<td> 綠軍(啟蒙軍、Resistance) </td>
						<td> 遊戲裡的兩大陣營之一，玩家在進入遊戲時必須選擇陣營，更多詳情請參考劇情介紹。 </td>
						<td> &nbsp;</td>
					</tr>
					<tr>
						<td> Portal </td>
						<td>
							<p> 地圖上的據點，遊戲中的主要地圖單位，可以被不同陣營佔領。</p>
						 </td>
						<td> &nbsp;</td>
					</tr>
					<tr>
						<td> XM (Exotic Matter) </td>
						<td> 遊戲裡的能量單位，使用者進行操作大多需要耗費 XM 。XM 在地圖上呈現白色斑點，</td>
						<td> &nbsp; </td>
					</tr>
					<tr>
						<td> Resonator (Res)</td>
						<td>
							<p>
							中譯是共振器，玩家常簡稱為 Res，也有些玩家用 portal 的"腳" 來稱呼之。
							可使用的道具之一，用來增強並維持 portal 能量，每個 portal 由最少一個、最多八個 Resonator 支撐，
							當沒有任何 res 時則會回到中立的靜止狀態。可透過 hack portal 取得。
							玩家對同一個 portal 使用不同等級的 res 是限量的，如 L8/L7 Res 每個 portal 只能置放一個。

							</p>
							<small>
								Res 每天會降低 10% 能量（註：2013年六月以前為 15% ，之後調整為 10%），也可能因為敵方透過 xmp 進行攻擊而降低能量。
							</small>
						</td>
						<td>
							"我的 portal 被拆了，快來幫我補高等腳！" <br />
						 &nbsp;</td>
					</tr>
					<tr>
						<td> Link </td>
						<td>
							<p>兩個 portal 之間可以透過 portal key 此一道具建立 Link ，每建立一條 Link 會獲得額外 313 AP。</p>
							<p>Portal 的等級會影響可連線的距離，另外如果兩個 portal 之間有其他連線穿越則無法連線。</p>
							<small>當 Portal res 能量過低時，link 會損毀，損毀時 portal key 有機率重新掉落或永久消失。</small>
						</td>
						<td> &nbsp;</td>
					</tr>
					<tr>
						<td> Control Field ( cf / field )</td>
						<td>
							<p>
								中譯是控制域，常簡稱為 cf / field 。
								當把三個 Portal 進行 link 並構成三角形時，區域會變成實心背景，
								每建立一個 field 獲得 1513 AP ，並視 Field 大小取得不同 MU。
								由於 AP 一次的取得量是遊戲中最多的，新手非常建議以 CF 為目標。
							</p>
							<small>當 Portal res 能量過低時，link 會損毀並會一致導致 CF 消失。</small>
						</td>
						<td> &nbsp;</td>
					</tr>
					<tr>
						<td> Mind Unit (MU)</td>
						<td>
							<p>
								意指被 controll field 控制的人類心靈數量，目前沒有任何正式用途，僅作為一種類似分數的存在，
								藍軍與綠軍總分將會在 Global tab 顯示。
							</p>
						</td>
						<td> &nbsp;</td>
					</tr>
					<tr>
						<td> Modification (Mod)</td>
						<td>
							<p>
								可用來強化或改造 portal 的工具，統稱為 mod ，稱呼時通常多直接稱呼名字。
								目前已知有以下 mod ：
							</p>
							<ul>
								<li>Portal Shield / 常稱為 Shield 或盾，用來強化 portal 防禦攻擊</li>
								<li>Force Amplifier / 力量增強，Portal 遭受攻擊時反擊威力增加。(攻擊者 xm 損耗增加)</li>
								<li>Link Amplifier / 連接增強，Portal 可連線距離增加</li>
								<li>Multi-hack / 多重hack，Portal  burn-out 前可 hack 次數增加。（原本為四次）</li>
								<li>Heat sink / 散熱器，Portal 兩次 hack 之間的間隔時間減少。（原本為五分鐘）</li>
								<li>Turret / 砲台，增加 Portal 反擊的機率並微幅增加攻擊力。</li>
							</ul>
						</td>
						<td> &nbsp;</td>
					</tr>
					<tr>
						<td> XMP </td>
						<td>
							<p> 遊戲裡面用來攻擊的道具，會消耗 XM 並對周遭 Res 產生攻擊效果。</p>
						</td>
						<td> &nbsp;</td>
					</tr>
				</table>

				<h2>基礎遊戲畫面說明</h2>
				<p>
					<img src="<?=base_url("/img/guide/guide_1.png")?>" alt="新手教學 - portal xm 示例" />
				</p>

				<h2>基本介面教學</h2><small>如何快速上手遊戲</small>
				<div>
					<ul>
						<li>
							<p>先選擇陣營，並瞭解自己陣營的顏色：</p>
							<p>當你選擇 enlightened 即為綠軍，選擇 resistance 則為藍軍，也可以由你的指標判斷。</p>
							<p>底下描述敵軍與友軍皆是相對於自己陣營。</p>
						</li>
						<li><p>先找到  portal：</p>
							<p>1.看手機遊戲的地圖可以看到 portal</p>
							<p>2.看iitc (http://ingress.com/intel ) 也可以看到附近 portal</p>
						</li>
						<li>
							點擊 portal 後可進如 portal 操作畫面：<br />
							<p><img src="<?=base_url("/img/guide/guide_2.png")?>" alt="新手教學 - portal 操作畫面示例" /></p>

							當 Portal 進入你的圓圈(可操作範圍) 後，可視 portal 狀況進行以下動作：
							<ul style="margin-top:20px;">
								<li>
									<p><b>Hack</b><small>(取得道具)</small></p>
									<p> 對象：所有 portal </p>
									<p>
										無論中立或敵友軍按 hack 皆可以取得道具，	Hack 敵軍塔可以取得 100 點 AP，對 L1~L2 玩家幫助不小，但消耗 XM 較多。
									</p>
									<p> Hack 每次需間隔 300 秒，連續 hack 四次後會進入 burn out 狀態，需等待四小時後才能再度 hack。
										(有些道具可以增加 hack 次數或縮短等待時間)</p>
									<div class="alert alert-warning">
										注意： Hack 敵軍 portal 取得道具、可能會使得敵軍部份不理性的玩家腦羞並獲得乞丐稱號。</div>
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
									<p> Deploy 時會根據你與 portal 的距離置放 Res ，太近的 res 敵軍將很容易攻擊，
										一般建議當 portal 剛好位於自己圓圈（勢力範圍）邊緣時，置放後防禦效果最好。</p>
									<small>若您想選擇置放至 portal res 的等級，請改用 <b>Upgrade</b> 功能。</small>
								</li>
								<li>
									<p><b>Recharge</b><small>(充電)</small></p>
									<p>對象：友軍 Portal </p>
									<p> portal 的 res 剛 deploy 時能量條為全滿，但 24 小時後會掉 10% 能量，
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

