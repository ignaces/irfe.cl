<?php include 'static/include/variables.php' ?>
<!DOCTYPE html>
<!--[if IE 7 ]> <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]> <!--> <html class=no-js lang=en> <!-- <![endif]-->
<head>
<title><?php echo "$maintitle" ?> | <?php echo "$alfa" ?></title>
<?php include 'static/frames/head_main.php'; ?>
</head>

<body class=page-frontpage>
<!-- Aviso Javascript -->
<p id=jsnotice>Javascript se encuentra deshabilitado. Este sitio requiere Javascript para el funcionamiento correcto. Porfavor <a href="http://enable-javascript.com/es/">habilite Javascript en su navegador.</a>!</p>
<!-- Fin - Aviso Javascript -->

<!-- Encabezado de página -->
<header class=container-block id=page-header>
<div class=container-inner>
<div class=container-aligner>
<!-- Logo de la página -->
<h1 id=header-logo><a href=<?php echo "$website" ?> ><img height=65 style="margin-top:-15px;" src='./assets/logo.png'/></a></h1>
<!-- Fin - Logo de la página -->
<!-- Page navigation -->
<?php include 'static/frames/nav.php'; ?>
<!-- End - Page navigation -->
</div>
</div>
</header>
<!-- Fin - Encabezado de página -->

<!-- Presentador -->
<section class=slider-nivo id=page-slider>
<div class=slider-container>
<!--1--><img src=<?php echo "$slide1" ?> width=940 height=350 />
<!--2--><a href=''><img src=<?php echo "$slide2" ?> width=940 height=350 title='#htmlcaption' /></a>
<!--3--><a href='http://facebook.com/irfesantacruz'><img src=<?php echo "$slide3" ?> width=940 height=350 />
</div>

<div class=nivo-html-caption id=htmlcaption>
Ganadores de las Olimpiadas de Actualidad
</div>
</section>
<!-- Fin - Presentador -->

<!-- Cuerpo -->
<section class=container-block id=page-body>
<div class=container-inner>
<!-- Título de la Página -->
<header class=container-aligner id=page-title>
<section class='widget-container widget-last-tweet'>
<div class=widget-content>
</div><br /><img style="margin:0 auto; margin-top:-26px;" height=20 src='assets/logo_twitter_withbird_1000_allblack.png' />
</section>
</header>
<!-- Fin - Título de la Página -->
</div>
</section>
<!-- Fin - Cuerpo -->

<!-- Widgets -->
<section class='container-block dark-skin' id=bottom-widgets>
<div class=container-inner>
<div class=container-aligner>

<!-- Intereses -->
<div class=layout-1-4>
<section class='widget-container widget-tags-floated'>
<h2 class=widget-heading>Intereses</h2>
<div class=widget-content>
<ul class=tags-floated-list>
<li><a href="<?php echo "$link_alfa1" ?>"><?php echo "$alfa1" ?></a></li>
<li><a href="<?php echo "$link_beta1one" ?>"><?php echo "$beta1one" ?></a></li>
<li><a href="<?php echo "$link_beta2two" ?>"><?php echo "$beta2two" ?></a></li>
<li><a href="<?php echo "$link_beta4" ?>"><?php echo "$beta4" ?></a></li>
<li><a href="<?php echo "$link_gamma3one" ?>"><?php echo "$gamma3one" ?></a></li>
<li><a href="<?php echo "$link_beta1three" ?>"><?php echo "$beta1three" ?></a></li>
<li><a href="<?php echo "$link_alfa2" ?>"><?php echo "$alfa2" ?></a></li>
<li><a href="<?php echo "$link_gamma2four" ?>"><?php echo "$gamma2" ?> <?php echo "$anio_actual" ?></a></li>
</ul>
</div>
</section>
</div>
<!-- Fin - Intereses -->

<!-- Links -->
<div class=layout-1-4>
<section class='widget-container widget-categories'>
<h2 class=widget-heading>Links</h2>
<div class=widget-content>
<ul class='widget-list categories-list'>
<!--1--><li><a href='http://twitter.com/irfe'><img src=./assets/logo_twitter.png /></a><span class=widget-hint>@irfe</span></li>
<!--2--><li><a href='http://facebook.com/irfesantacruz'><img src=./assets/logo_facebook.png /></a><span class=widget-hint>irfesantacruz</span></li>
</ul>
</div>
</section>
</div>
<!-- Fin - Links -->

<!-- Galería de Fotos -->
<div class=layout-1-4>
<section class='widget-container widget-gallery'>
<h2 class=widget-heading><?php echo "$gamma2" ?></h2>
<div class=widget-content>
</div>
</section>
</div>
<!-- Fin - Galería de Fotos -->


<!-- Acerca de... -->
<div class='layout-1-4 layout-last'>
<!-- Widget text -->
<section class='widget-container widget-text'>
<h2 class=widget-heading>Nuestra Misi&oacuten</h2>
<div class=widget-content>
<p>Nuestro colegio pretende promover a un hombre integral, a un hombre que es imagen de Dios.</p><p><img src="./assets/logo.png" style="margin-top:-33px; float:right;" /><i>"Que nuestro hombre institutano descubra su misi&oacuten y utilice sus potenciales en servicio de la vida, por amor a la humanidad."</i></p>
</div>
</section>
</div>
<!-- Fin - Acerca de... -->
</div>
</div>
</section>
<!-- Fin - Widgets -->

<!-- Footer -->
<footer id=page-footer>
<div class=container-aligner>
<!-- Izquierda -->
<section id=footer-left>
&copy; Copyright <?php echo "$anio_actual" ?> <?php echo "$irfe" ?> - Derechos Reservados.
</section>
<!-- Derecha -->
<section id=footer-right>
Por <a href="http://twitter.com/ignaces"><?php echo "$author" ?>.</a> <?php echo "$version" ?>
</section>
</div>
</footer>
<!-- Fin - Footer -->
<!-- Fondos de la página -->
<div id=theme-backgrounds>
<img alt='Asset 6' data-color='#3490C3' src='./assets/backgrounds/6.jpg.pagespeed.ce.K7547yEF-s.jpg' width=1600 height=1200 />
<img alt='Asset 7' data-color='#A3A60D' src='./assets/backgrounds/7.jpg.pagespeed.ce.CETi5UScmo.jpg' width=1600 height=1200 />
<img alt='Asset 8' data-color='#CD141A' src='./assets/backgrounds/8.jpg.pagespeed.ce.GuyKwL-vmH.jpg' width=1600 height=1200 />
</div>
<div id=dark-overlay></div>
<!-- Fin - Fondos de la página -->
<!-- El script mágico -->
<script id=js-dispatcher src='./scripts/scripts.js'></script>
</body>
</html>
