<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml"> 

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=1024" user-scalable="no"/>   
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        
        <title>IRFE</title>
        <meta name="Keywords" content="IRFE, instituto regional federico errazuriz, santa cruz, chile, colegio, instituto, colegio católico" /> 
        <meta name="Description" content="Página de inicio del Instituto Regional Federico Errázuriz. Proporciona información útil." />
        <meta name="Author" content="Ignacio Trujillo" />
        
        <link rel="shortcut icon" href="http://static.irfe.cl/favicon.ico" /> 
        <link rel="stylesheet" type="text/css" href="css/estilo.css" /> 
        <!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" href="css/estilo_ie.css" />
        <![endif]-->
        <script src="http://static.irfe.cl/js/jquery-1.5.js"></script> 
        <script src="http://static.irfe.cl/js/modernizr-newest.min.js"></script>
        <script src="http://static.irfe.cl/js/twitter.min.js" type="text/javascript"></script> 
    </head>

    <body>

			<script type="text/javascript" charset="utf-8"> 
                getTwitters('tweet', { 
                id: 'irfe', 
                count: 1, 
                enableLinks: true, 
                ignoreReplies: true, 
                clearContents: false,
                template: '<img style="padding-top:0px;" src="images/tweet4.png" height="16px" /> <a href="http://twitter.com/%user_screen_name%/statuses/%id%/">"%text%"</a>'
                });
            </script>
            
            <div class="tweetbox" align="center">
                <div id="tweet" align="center">
                </div>
            </div>

        <div class="god">
            <div class="principal">

				<script> 
                    $(document).ready(function() {
                    $("#controls span").click(function() {
                    $("#cf img").removeClass("opaque");
                    var imageToShow = $(this).attr("id").replace("for-", "");
                    console.log(imageToShow);
                    $("#cf #"+imageToShow).addClass("opaque");
                    $("#controls span").removeClass("selected");
                    $(this).addClass("selected");			
                    }); });
                </script> 
                
                <!--[if lte IE 8]>
                <a href="http://www.apple.com/la/safari/download/"><img id="descargaralgomejor" style="border:0;" src="http://images.apple.com/la/safari/images/button_downloadsafari_20100607.png" height="100" /></a>
                <![endif]-->

                <div id="cf" class="shadow">
                    <img id="image-1" src="http://dl.dropbox.com/u/5990450/inicioirfe/1.png" class="opaque"/>
                    <img id="image-2" src="http://dl.dropbox.com/u/5990450/inicioirfe/2.png"/> 
                    <img id="image-3" src="http://dl.dropbox.com/u/5990450/inicioirfe/3.jpg" /> 
                    <img id="image-4" src="http://dl.dropbox.com/u/5990450/inicioirfe/4.jpg" /> 
                </div> 
                

                <p id="controls"> 
                    <span class="selected" id="for-image-1"><img src="images/controls/1.png" /></span> 
                    <span id="for-image-2"><img src="images/controls/2.png" /></span> 
                    <span id="for-image-3"><img src="images/controls/3.png" /></span> 
                    <span id="for-image-4"><img src="images/controls/4.png" /></span> 
                </p>

            </div>


            <div class="barradown">
            
                <div class="mark2">
                    <div id="facebookbox">
                        <a href="http://facebook.com/irfesantacruz"><img style="border:0; padding-top:5px; padding-right:2px;" src="images/facebo.png" /></a>
                    </div>
                </div>

                <div class="googlebox" align="left">
                    <form method="get" action="http://www.google.com/search">
                    <input type="hidden" name="ie" value="UTF-8" />
                    <input type="hidden" name="oe" value="UTF-8" />
                    <a href="http://google.cl"><img style="padding-top:3px; padding-left:1px;" src="images/google.png" alt="Buscar en Google" align="absmiddle" border="0" /></a>
                    <input align="absmiddle" type="text" name="q" size="15" maxlength="255" value="" autocomplete="off" autofocus spellcheck="off" />
                    <input type="image" src="images/logo_lupa.png" align="absmiddle" name="btnG" value="" />
                    </form>
                </div>

            </div>
        </div>
    </body>
</html>