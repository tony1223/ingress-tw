	<div class="footer">
      <div class="container" style="padding-bottom:20px;">
    	 <hr />
    	 <p> 本站為人工維護站台，資訊謹供參考，若有疏失或您不認同之處，敬請見諒、包含。亦歡迎來信討論 tonylovejava@gmail.com </>
         <p> Power by TonyQ &amp; Puppy Chen , sponsored by Ingress Taiwan Resistance Group. This is a unofficial fan site of Ingress. </p>
      </div>
    </div>
    <div id="fb-root"></div>

	<script type="text/javascript">var _jf = _jf || [];_jf.push(['_setAppId','5e0ed713WZCuXt6td_MGPLHxHKNdx0F8v-ticFTJM2uen-SwdKfSOizRK7xIZLZ4x_ebYpWXiB3pgjsdpJp1EjsJh5TPeCo-2Y9uLHWxc489JJe5M5S9P-keOHb0tBC5WJtL6YlLL3j8lVdhoCwdDGw2Voi_Z1cUKxmRIhCiffksybuMyRU=']);_jf.push(['p','20222']);_jf.push(['_setFont','xingothic-tc-w4','css','.xingothic-tc-w4']);_jf.push(['_setFont','xingothic-tc-w4','alias','xingothic-tc-w4']);(function(f,q,c,h,e,i,r,d){var k=f._jf;if(k.constructor===Object){return}var l,t=q.getElementsByTagName("html")[0],a=function(u){for(var v in k){if(k[v][0]==u){if(false===k[v][1].call(k)){break}}}},j=/\S+/g,o=/[\t\r\n\f]/g,b=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,g="".trim,s=g&&!g.call("\uFEFF\xA0")?function(u){return u==null?"":g.call(u)}:function(u){return u==null?"":(u+"").replace(b,"")},m=function(y){var w,z,v,u,x=typeof y==="string"&&y;if(x){w=(y||"").match(j)||[];z=t[c]?(" "+t[c]+" ").replace(o," "):" ";if(z){u=0;while((v=w[u++])){if(z.indexOf(" "+v+" ")<0){z+=v+" "}}t[c]=s(z)}}},p=function(y){var w,z,v,u,x=arguments.length===0||typeof y==="string"&&y;if(x){w=(y||"").match(j)||[];z=t[c]?(" "+t[c]+" ").replace(o," "):"";if(z){u=0;while((v=w[u++])){while(z.indexOf(" "+v+" ")>=0){z=z.replace(" "+v+" "," ")}}t[c]=y?s(z):""}}},n;k.push(["_eventActived",function(){p(h);m(e)}]);k.push(["_eventInactived",function(){p(h);m(i)}]);k.addScript=n=function(u,A,w,C,E,B){E=E||function(){};B=B||function(){};var x=q.createElement("script"),z=q.getElementsByTagName("script")[0],v,y=false,D=function(){x.src="";x.onerror=x.onload=x.onreadystatechange=null;x.parentNode.removeChild(x);x=null;a("_eventInactived");B()};if(C){v=setTimeout(function(){D()},C)}x.type=A||"text/javascript";x.async=w;x.onload=x.onreadystatechange=function(G,F){if(!y&&(!x.readyState||/loaded|complete/.test(x.readyState))){y=true;if(C){clearTimeout(v)}x.src="";x.onerror=x.onload=x.onreadystatechange=null;x.parentNode.removeChild(x);x=null;if(!F){setTimeout(function(){E()},200)}}};x.onerror=function(H,G,F){if(C){clearTimeout(v)}D();return true};x.src=u;z.parentNode.insertBefore(x,z)};a("_eventPreload");m(h);n(r,"text/javascript",false,3000)})(this,this.document,"className","jf-loading","jf-active","jf-inactive","//ds.justfont.com/js/stable/v/2.2/id/91078548422");</script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?=base_url("js/bootstrap.min.js")?>"></script>

	<?php
	if(function_exists("js_section")){
		if(empty($params)){
			$params = null;
		}
		js_section($params);
	}
	?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42196530-1', 'ingress.tw');
	  ga('send', 'pageview');

	</script>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1&appId=537183223010563";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	</body>
</html>
