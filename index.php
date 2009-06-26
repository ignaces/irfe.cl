<?php include 'static/include/variables.php' ?>
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo "$maintitle" ?> | <?php echo "$beta" ?></title>
    <?php include 'static/frames/head_main.php'; ?>
    <style media="all" type="text/css">@import "static/css/presentador.css";</style>
    <script src="static/js/presentador.js"></script>
</head>
<body>
<div id="header">
<!-- experimental -->
	<div id="marqueebox">
    <div id="marquee"></div></div>
<!-- /experimental>

<!-- barradenavegacion -->
<?php include 'static/frames/nav.php'; ?>
<!-- /barradenavegacion -->
</div>

<div id="contenido" style="position:relative;top:10px;">
<!-- contenido -->
<?php include 'static/frames/presentador.php'; ?>
<!-- /contenido -->
</div>

<!-- ultimotweet -->
<script>getTwitters('tweet', { id: 'irfe', count: 1, enableLinks: true, ignoreReplies: true, clearContents: false,template: '"%text%"'});</script>
<div id="tweetbox">
	<div id="tweet">
    </div>
</div>
<!-- /ultimotweet -->

<!-- footer -->
<?php include 'static/frames/footer.php'; ?>
<!-- /footer -->
</body> 
</html> 