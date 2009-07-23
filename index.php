<!doctype html> 
<html>
<!-- Diseñado para WebKit Safari -->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=1024" user-scalable="no"/>   
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	
	<title>IRFE</title>
	<meta name="description" content="Página de inicio de la Intranet del Instituto Regional Federico Errázuriz, proporciona información útil y necesaria del colegio apenas se ingrese a la Internet desde algún computador." />
	<meta name="author" content="ignaciotrujillo" />

	<link rel="stylesheet" href="estilov2.css" /> 
    	<script src="jquery.js"></script> 
	    <script src="modernizr-newest.min.js"></script>
    	<script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js" type="text/javascript"></script> 

    </head>

<body>
<script type="text/javascript" charset="utf-8">
getTwitters('tweet', { 
id: 'irfe', 
count: 1, 
enableLinks: true, 
ignoreReplies: true, 
clearContents: false,
 template: '<a href="http://twitter.com/%user_screen_name%/statuses/%id_str%/">"%text%"</a></div>'

});
</script>
<div id="tweet" align="center"></div>
<!-- <div id="loadingtweet">cargando último tweet</div> -->
</div>

<div class="god"><!-- importante god -->
<div class="principal">

<!-- Presentador -->
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
<div id="cf" class="shadow">
<img id="image-1" src="box/1.png" class="opaque"/>
	<img id="image-2" src="box/2.png"/> 
	<img id="image-3" src="box/3.jpg" /> 
	<img id="image-4" src="images/wall.jpg" /> 
</div> 

<p id="controls"> 
	<span class="selected" id="for-image-1"><img src="images/controls/1.png" /></span> 
	<span id="for-image-2"><img src="images/controls/2.png" /></span> 
	<span id="for-image-3"><img src="images/controls/3.png" /></span> 
	<span id="for-image-4"><img src="images/controls/4.png" /></span> 
    </p>
    
</div>
<!-- Fin Presentador -->


<div class="barradown">
<!-- Cuadro de búsqueda de Google -->
<div class="googlebox" align="left">
<form method="get" action="http://www.google.com/search">
<input type="hidden" name="ie" value="UTF-8">
<input type="hidden" name="oe" value="UTF-8">
<a href="http://google.cl"><img style="padding-top:2px;" src="images/google.png" alt="Buscar en Google" align="absmiddle" border="0"></a>
<input align="absmiddle" type="text" name="q" size="15" maxlength="255" value="" autocomplete="off" autofocus>
<input type="image" src="images/logo_lupa.png" align="absmiddle" name="btnG" value="">
</form>
</div>
<!-- Cuadro de búsqueda de Google -->

</div><!-- class="barradown" -->

<!-- quizás, en el futuro 
<div class="slogan" align="center"></div>
<div class="footer" align="center">
</div>
-->


</div><!-- importante god -->
</body>
<html>