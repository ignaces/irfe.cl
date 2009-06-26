<?php include 'static/include/variables.php' ?>
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo "$maintitle" ?> | <?php echo "$beta5" ?></title>
    <?php include 'static/frames/head_main.php'; ?>
    <style media="all" type="text/css">@import "static/css/contenido_main.css";</style>
</head>
<body>
<div id="header">
<!--marquee_experimental -->
	<div id="marqueebox">
    <div id="marquee"></div></div>
<!--/end>
<!--barradenavegacion_global -->
<?php include 'static/frames/nav.php'; ?>
<!--/end-->
</div>
<!-- CONTENIDO -->
<div id="contenido" style="position:relative;top:10px;margin:0 auto;width:980px;height:inherit;background:url('static/img/bg_presentador.png') repeat;"><!--contenidoneto--><h1><?php echo "$beta5, sostenedor del $irfe" ?></h1><div id="texto"><?php include'static/data/articulos.php';echo"$contenido_2";?></div></div><!--/end--></div>
<!-- /contenido -->
<!--ultimotweetglobal-->
<script>getTwitters('tweet', { id: 'irfe', count: 1, enableLinks: true, ignoreReplies: true, clearContents: false,template: '"%text%"'});</script>
<div id="tweetbox">
	<div id="tweet">
    </div>
</div>
<!--/end-->

<!-- footer -->
<?php include 'static/frames/footer.php'; ?>
<!-- /footer -->
</body> 
</html> 