<?php include 'config.php'; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $evento . ' ' . $sede . ' ' . $año ?></title>
        <meta name="description" content="<?php echo $descripción_corta ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/960_16_col.css">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_maps_api_key ?>&sensor=true">
        </script>
        <script src="js/vendor/jquery-1.9.0.min.js"></script>
        <script src="js/vendor/jquery.nicescroll.js"></script>
        <script src="js/main.js"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-40130665-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

        <meta property="og:title" content="<?php echo $evento . ' ' . $sede . ' ' . $año ?>" />
        <meta property="og:description" content="<?php echo $pages[$page]['t1'] ?> - <?php echo $pages[$page]['d1'] ?>" />
        <meta property="og:image" content="<?php echo 'http://' . $_SERVER["SERVER_NAME"] . '/img/banners/' . $pages[$page]['i1'] ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo curPageURL(); ?>" />
        

        <style type="text/css">
            
            #menu ul li:hover {
                background: <?php echo $pages[$page]['color'] ?>;
            }

            #banner-1 .banner-text {
                border-bottom: 298px solid <?php echo $pages[$page]['color'] ?>;
            }

            #banner-2 .banner-text {
                border-bottom: 298px solid <?php echo $pages[$page]['color'] ?>;
            }

            #content .title {
                border-top: 34px solid <?php echo $pages[$page]['color'] ?>;
            }

            .reg-page #submit {
                background: <?php echo $pages[$page]['color'] ?>;
            }

            a {
                color: <?php echo $pages[$page]['color'] ?>;
            }

            a:visited {
                color: <?php echo $pages[$page]['color'] ?>;
            }

        </style>
        <script>


          function map() {
            var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $lng ?>);
            var mapOptions = {
              zoom: <?php echo $google_maps_zoom ?>,
              center: myLatlng,
              mapTypeId: google.maps.MapTypeId.<?php echo $google_maps_type ?>}
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map
            });
          }

          $(document).ready(function() {
              map();



              $('#submit').click(function(e){

                var error = false;

                if($('#name').val() == ''){
                    $('#name').css('border-color', 'red');
                    error = true;
                } else {
                    $('#name').css('border-color', '#dddddd');
                }

                if($('#email').val() == ''){
                    $('#email').css('border-color', 'red');
                    error = true;
                } else {
                    $('#email').css('border-color', '#dddddd');
                }

                <?php if($pages[$page]['huayra']){ ?>

                    if($('#inst').val() == ''){
                        $('#inst').css('border-color', 'red');
                        error = true;
                    } else {
                        $('#inst').css('border-color', '#dddddd');
                    }

                    if($('#loc').val() == ''){
                        $('#loc').css('border-color', 'red');
                        error = true;
                    } else {
                        $('#loc').css('border-color', '#dddddd');
                    }

                    if($('#notebook').val() == ''){
                        $('#notebook').css('border-color', 'red');
                        error = true;
                    } else {
                        $('#notebook').css('border-color', '#dddddd');
                    }

                <?php } ?>

                if(error){
                    return false;
                }
                
                $.post("save.php", $("#form-reg").serialize(), function(data){

                    var recive = $.trim(data);

                    if(recive == 'true'){

                        $('#reg1').fadeOut('fast', function(){
                            $('#reg2').fadeIn('fast');
                        });

                    }

                });
                

                e.preventDefault();
                e.stopPropagation();
              });



          });
        </script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-40130665-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
    </head>
    <body>
        <div id="social-networks">
            <a href="https://www.facebook.com/events/588543627823374" target="_blank"><img src="img/facebook.png"></a>
            <a href="https://plus.google.com/u/0/events/c9h4uajjdcq6j2rf5fq6eom8u0g?authkey=CIym4sGb-8DXjAE" target="_blank"><img src="img/google+.png"></a>
        </div>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="top" class="container_16">
            <div id="logo" class="grid_5">
                <img id="logo-img" src="img/flisol.png"/>
            </div>

            <div id="menu" class="grid_11">
                <ul>
                    <li><a class="scroll" href="#que_es_flisol">Que es Flisol?</a></li>
                    <li><a class="scroll" href="#lugar_y_fecha">Lugar y Fecha</a></li>
                    <li><a class="scroll" href="#cronograma">Cronograma</a></li>                    
                    <li><a class="scroll" href="#registro">Registro</a></li>
                </ul>
            </div>
        </div>

        <div id="banner-1" class="banner container_16">
            <div class="banner-text">
                <div class="banner-text-c">
                    <h2><?php echo $pages[$page]['t1'] ?></h2>
                    <p><?php echo $pages[$page]['d1'] ?></p>                    
                </div>
            </div>
            <div class="banner-img">
                <img src="img/banners/<?php echo $pages[$page]['i1'] ?>">                
            </div>
        </div>

        <div id="banner-2" class="banner container_16">
            <div class="banner-img">
                <img src="img/banners/<?php echo $pages[$page]['i2'] ?>">                
            </div>
            <div class="banner-text">
                <div class="banner-text-c">
                    <h2><?php echo $pages[$page]['t2'] ?></h2>
                    <p><?php echo $pages[$page]['d2'] ?></p>                    
                </div>
            </div>
        </div>

        <div id="content-w" class="container_16">
            
            <div id="content" class="grid_13">
                <div class="title">
                    <a href="#" name="que_es_flisol"><h3>Que es Flisol?</h3></a>
                </div>
                <div class="content">
                    <?php echo $descripción_larga ?>
                </div>

                <?php if($pages[$page]['huayra']){ ?>

                <div class="title">
                    <a href="#" name="que_es_huayra"><h3>Que es Huayra?</h3></a>
                </div>
                <div class="content">
                    <?php echo $descripción_huayra ?>
                </div>


                <?php } ?>

                <?php if($pages[$page]['koha']){ ?>

                <div class="title">
                    <a href="#" name="que_es_koha"><h3>Que es KohaFest?</h3></a>
                </div>
                <div class="content">
                    <?php echo $descripción_koha ?>
                </div>


                <?php } ?>

                <div class="title">
                    <a href="#" name="lugar_y_fecha"><h3>Lugar y Fecha</h3></a>
                </div>
                <div class="content">
                    <p class="big"><?php echo $fecha ?></p>
                    <p class="big"><?php echo $lugar ?></p>
                    <div id="map"></div> 
                </div>

                <div class="title">
                    <a href="#" name="cronograma"><h3>Cronograma</h3></a>
                </div>
                <div class="content">                   
                    <?php foreach ($cronograma as $i => $c) { ?>
                        <h4><?php echo $c['titulo']?></h4>
                        <ul class="cronograma">
                            <?php foreach ($c['horarios'] as $h => $titulo) { ?>
                                <li><span class="hora"><?php echo substr($h, 0,2) . ':' . substr($h, 2) ?></span>: <?php echo $titulo ?></li>
                            <?php } ?>                            
                        </ul>
                    <?php } ?>
                </div>

                <div class="title">
                    <a href="#" name="consideraciones"><h3>Consideraciones generales para Instalaciones</h3></a>
                </div>
                <div class="content">
                    <p><?php echo $consideraciones ?></p>                    
                </div>

                <?php if(!$pages[$page]['huayra']){ ?>

                    <div class="title">
                        <a href="#" name="requisitos"><h3>Sobre los medios de instalación</h3></a>
                    </div>
                    <div class="content">
                        <p><?php echo $requisitos ?></p>                    
                    </div>

                <?php } ?>

                <div class="title">
                    <a href="#" name="registro"><h3>Pre-acreditaci&oacute;n</h3></a>
                </div>
                <div class="content">
                    <div id="reg1" class="reg-page">
                        <p>Ya podés pre-acreditarte al evento para ayudarnos en la organización.<br>
			   Completá el formulario a continuación con tu nombre completo y un correo electrónico.</p>
                        <form id="form-reg">

                            <input type="hidden" name="page" value="<?php echo $page; ?>">
                            <input type="hidden" name="huayra" value="<?php echo $pages[$page]['huayra']; ?>">
                            
                            <div class="field">
                                <label for="name">Nombre Completo:</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div class="field">
                                <label for="email">Email:</label>
                                <input type="text" id="email" name="email">
                            </div>

                            <div class="field-option">
                                <label for="instala">¿Ten&eacute;s intenci&oacute;n de instalar Software Libre en tu equipo?</label>
                                <input type="radio" name="instala" value="1" checked> Si
                                <input type="radio" name="instala" value="0"> No
                            </div>

                            <div class="field-action">
                                <input type="submit" id="submit" name="submit" value="Enviar">
                            </div>

                        </form>

                    </div>
                    <div id="reg2" class="reg-page">
                        <p><?php echo $registro_fin ?></p>
                        <!--<p><?php echo $registro_fin2 ?></p>-->
                    </div>
                </div>



            </div>

            <div id="sponsors" class="grid_3">
                <h3>Sponsors</h3>
                <div id="sponsors-c">
                    <?php foreach ($sposors as $sponsor) { ?>
                        <a href="<?php echo $sponsor['link'] ?>" target="_blank">
                            <img src="<?php echo $sponsor['img'] ?>" alt="<?php echo $sponsor['nombre'] ?>">
                        </a>
                    <?php } ?>
                </div>                
            </div>

        </div>

        <!--
        <div id="footer" class="container_16">
            <div class="grid_5">
                <p><span class="bold">Contacto:</span></p>
            </div>
            <div class="grid_4">
                <p>Tel: <?php echo $contacto_tel ?></p>
            </div>
            <div class="grid_4">
                <p>E-Mail: <?php echo $contacto_email ?></p>
            </div>
            <div class="grid_3">
                <!--
                <p>Síguenos: <a class="slink" href="<?php echo $contacto_gplus ?>" target="_blank">
                    <img src="img/flisol_12.png">
                </a>
                <a class="slink" href="<?php echo $contacto_facebook ?>" target="_blank">
                    <img src="img/flisol_14.png">
                </a>
                <a class="slink"href="<?php echo $contacto_twitter ?>" target="_blank">
                    <img src="img/flisol_16.png">
                </a></p>
            </div>

            <div id="pixelincloud" class="grid_16">
                <a href="http://pixelincloud.com" href="_blank">
                    <img src="/img/pic-footer.png"/>
                </a>
            </div>

        </div>
        -->

        <div id="footer" class="container_16">
            <div class="left grid_4">
                <p><b>Contacto</b></p>
                <p>Tel: +54-343-155-016-626</p>
                <p>E-Mail: <script type="text/javascript">var a1='a.soliard'; var a2="@gmail"; var a3=".com"; document.write(a1+a2+a3);</script></p>
            </div>
            <div class="center grid_8">
		<a href="http://flisol.net/">
		<p><img src="/img/footer-logo.png"/></p>
                <p>Festival Latinoamericano de Instalación de Software Libre</p>
		</a>
            </div>
            <div class="right grid_4">
                <div id="pixelincloud">
                    <a href="http://pixelincloud.com" href="_blank">
			<p>Web dise&nacute;ada por</p>
                        <img src="/img/pic-footer.png"/>
                    </a>
                </div>
		<div id="adriansoliard">
                    <a href="http://www.adriansoliard.com/services/hosting" href="_blank">
			<p>Hosting por Adrian Soliard</p>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
