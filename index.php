﻿<!doctype html> 

<head>
	<meta charset="utf-8" />

	<meta name="viewport" width="1024" user-scalable=no/>    
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	
	<title>IRFE</title>
	<meta name="description" content="Página de inicio de la Intranet del Instituto Regional Federico Errázuriz, proporciona información útil y necesaria del colegio apenas se ingrese a la Internet desde algún computador." />
	<meta name="author" content="Unknown" />

	<link rel="stylesheet" href="estilo.css" /> 
    <script src="jquery.js"></script> 
	<script src="modernizr-newest.min.js"></script>
    <script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js" type="text/javascript"></script> 

    </head>

<body onload="fbFetch()">
<script type="text/javascript" charset="utf-8">
getTwitters('tweet', { 
  id: 'irfe', 
  count: 1, 
  enableLinks: true, 
  ignoreReplies: false, 
  clearContents: true,
  template: '<a href="http://irfe.cl/twitter"><img src="tweet.png" /></a>    <a href="http://twitter.com/%user_screen_name%/statuses/%id_str%/">"%text%"</a>'

});
</script>
<div id="tweet" class="ultimotweet"></div>

<div class="god"><!-- importante god -->
<div class="principal" id="ac">
<script> 
$(document).ready(function() {
	$("#controls span").click(function() {
		$("#cf img").removeClass("opaque");
		
		var imageToShow = $(this).attr("id").replace("for-", "");
 
		console.log(imageToShow);
		
		$("#cf #"+imageToShow).addClass("opaque");
		
		$("#controls span").removeClass("selected");
		$(this).addClass("selected");			
	});
});
</script> 

<!-- Presentador -->
<div id="cf" class="shadow"> 
	<div><img id="image-1" src="twitter_img/bienve.png" class="opaque"/></a></div>
	<img id="image-2" src="twitter_img/bird.png"/> 
	<img id="image-3" src="twitter_img/facebookls.jpg" /> 
	<img id="image-4" src="" /> 
</div> 

<p id="controls"> 
	<span class="selected" id="for-image-1"><img src="http://dl.dropbox.com/u/5990450/inicio.irfe/01%20bienvenidos.png" /></span> 
	<span id="for-image-2"><img src="http://dl.dropbox.com/u/5990450/inicio.irfe/02%20twitter.png" /></span> 
	<span id="for-image-3"><img src="http://dl.dropbox.com/u/5990450/inicio.irfe/03%20facebook.png" /></span> 
	<span id="for-image-4">(-)</span> 
</p> 


</div>
<!-- Fin Presentador -->


<!-- Search Google -->
<div class="googlebox">
<FORM method=GET action="http://www.google.com/search">
<input type=hidden name=ie value=UTF-8>
<input type=hidden name=oe value=UTF-8>
<TABLE><tr><td>
<A HREF="http://www.google.com/">
<IMG SRC="images/google.png"
border="0" ALT="Google" align="absmiddle"></A>
<INPUT id="inputs" TYPE=text name=q size=15 maxlength=255 value="" autocomplete="off">
<!-- <INPUT type=submit name=btnG VALUE="Buscar"> -->
<INPUT type=image src="images/logo_lupa2.png" align="absmiddle" name=btnG VALUE="">
</td></tr></TABLE>
</FORM>
</div>
<!-- Search Google -->
</div><!-- importante god -->
</body>