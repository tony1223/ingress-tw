
<div class="container ">

  <div class="row">
    <div class="span12 ">
		<div class="page-header">
		  <h1>新手教學 <small>在 Ingress 世界裡感到徬徨嗎？沒問題！</small></h1>
		</div>

		<div class="row tabbable tabs-left" >
			<?php include(__DIR__."/_content_nav.php");?>
			<div class="tab-content">

				<table class="table table-bordered">
					<tr>
						<th colspan="3">
							基本名詞介紹
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
						<td> 綠軍(啟蒙軍、Enlightened) </td>
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
								Res 每天會降低 15% 能量，也可能因為敵方的 xmp 攻擊而降低能量。
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
								每建立一個 field 獲得 1250 AP ，通常伴隨著建立連線的 link 一起獲得 1563 AP，
								並視 Field 大小取得不同 MU。

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
							<p> 遊戲裡面用來攻擊的道具，會消耗 XM 並對周遭敵方 Res 產生攻擊效果，
								等級越高威力越大、消耗越多 xm。攻擊時有可能會遭到 portal 反擊損失更多 XM。</p>
						</td>
						<td> &nbsp;</td>
					</tr>
					<tr>
						<td colspan="3"> <small class="pull-right">....... 更多請參考 <a href="http://ingressportal.com/research/definitions/" target="_blank">definitions</a></small> </td>
					</tr>
				</table>
			</div>

		</div>

		<p style="font-size:12px;color:gray" class="pull-right">此頁文案與編排資料由 TonyQ 編撰，若有需要另行引用請採用 CC-BY 授權（註明作者與來源網站即可。）。<br />
			Ingress 所有圖案版權為 Google 所有 <a href="https://support.google.com/ingress/answer/2924461">參考資料</a>
		</p>
   </div>
  </div>

</div>

