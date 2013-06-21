
	<div class="footer">
      <div class="container" style="padding-bottom:20px;">
    	 <hr />
         <p> Power by TonyQ &amp; Puppy Chen , sponsored by Ingress Taiwan Resistance Group.  </p>
      </div>
    </div>
    <div id="fb-root"></div>

	<script type="text/javascript">justfontConfig={'appId':'5e0ed713WZCuXt6td_MGPLHxHKNdx0F8v-ticFTJM2uen-SwdKfSOizRK7xIZLZ4x_ebYpWXiB3pgjsdpJp1EjsJh5TPeCo-2Y9uLHWxc489JJe5M5S9P-keOHb0tBC5WJtL6YlLL3j8lVdhoCwdDGw2Voi_Z1cUKxmRIhCiffksybuMyRU=','p':'20222','font':{'wt011':{'css':{'0':'*','1':'h1'}},'xingothic-tc-w4':{'css':{'0':'.xingothic-tc-w4'},'alias':'xingothic-tc-w4'}}};window.jfAsyncInit=function(){jf.main(justfontConfig)};(function(){var c={'scriptTimeout':3000};var h=document.getElementsByTagName("html")[0];h.className+=" jf-loading";var e=setTimeout(function(){h.className=h.className.replace(/(\s|^)jf-loading(\s|$)/g," ");h.className+=" jf-inactive"},c.scriptTimeout);var jfscript=document.createElement("script");var d=false;jfscript.type="text/javascript";jfscript.async=true;jfscript.src='http://ds.justfont.com/js/stable/v/1.13/';jfscript.onload=jfscript.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded"){return}d=true;clearTimeout(e)};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(jfscript,s)})();</script>

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

	  ga('create', 'UA-41902036-1', 'ingress.tw');
	  ga('send', 'pageview');

	</script>
	</body>
</html>