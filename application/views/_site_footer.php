	<div class="footer">
      <div class="container" style="padding-bottom:20px;">
    	 <hr />
         <p> Power by TonyQ &amp; Puppy Chen , sponsored by Ingress Taiwan Resistance Group. This is a unofficial fan site of Ingress. </p>
      </div>
    </div>
    <div id="fb-root"></div>

	<script type="text/javascript">
	var _jf = _jf || [];
	_jf.push(['_setAppId','5e0ed713WZCuXt6td_MGPLHxHKNdx0F8v-ticFTJM2uen-SwdKfSOizRK7xIZLZ4x_ebYpWXiB3pgjsdpJp1EjsJh5TPeCo-2Y9uLHWxc489JJe5M5S9P-keOHb0tBC5WJtL6YlLL3j8lVdhoCwdDGw2Voi_Z1cUKxmRIhCiffksybuMyRU=']);
	_jf.push(['p','20222']);
	_jf.push(['_setFont','xingothic-tc-w4','css','.xingothic-tc-w4']);
	_jf.push(['_setFont','xingothic-tc-w4','css','*']);
	_jf.push(['_setFont','xingothic-tc-w4','alias','xingothic-tc-w4']);
		try{
			(function(i,j,l,a,d,e){var f=i._jf;if(f.constructor===Object){return}var b,k=function(m){for(var n in f){if(f[n][0]==m){if(false===f[n][1].call(f)){break}}}},c=j.getElementsByTagName("html")[0],g=!!c[a],h=function(m){if(g){return c[a].contains(m)}else{return !!c[l].match(new RegExp("(\s|^)"+m+"(\s|$)","g"))}};f.addClass=function(m){if(h(m)){return}if(g){c[a].add(m)}else{c[l]+=" "+m}};f.removeClass=function(m){if(g){c[a].remove(m)}else{c[l]=c[l].replace(new RegExp("(\s|^)"+m+"(\s|$)","g")," ")}};f.protocal=("https:"==j.location.protocol?"https://":"http://");f.addScript=function(m,s,o,u,v,t){v=v||function(){};t=t||function(){};var p=j.createElement("script"),r=j.getElementsByTagName("script")[0],n,q=false;if(u){n=setTimeout(function(){p.src="";p.onload=p.onreadystatechange=null;p.parentNode.removeChild(p);p=null;t},u)}p.type=s||"text/javascript";p.async=o;p.onload=p.onreadystatechange=function(x,w){if(!q&&(!p.readyState||/loaded|complete/.test(p.readyState))){q=true;if(u){clearTimeout(n)}p.src="";p.onload=p.onreadystatechange=null;p.parentNode.removeChild(p);p=null;if(!w){setTimeout(function(){v()},200)}}};p.onerror=function(y,x,w){if(u){clearTimeout(n)}p.src="";p.onload=p.onreadystatechange=null;p.parentNode.removeChild(p);p=null;f.removeClass("jf-loading");f.addClass("jf-inactive");k("_eventInactived");return true};p.src=f.protocal+m;r.parentNode.insertBefore(p,r)};k("_eventPreload");f.addClass("jf-loading");f.addScript(d,"text/javascript",false,3000,null,function(){f.removeClass("jf-loading");f.addClass("jf-inactive");k("_eventInactived")})})(this,this.document,"className","classList","ds.justfont.com/js/stable/v/2.01/id/91078548422");
		}catch(e){
			document.getElementsByTagName("html").className ="jf-inactive";
		}
	}
	</script>

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
