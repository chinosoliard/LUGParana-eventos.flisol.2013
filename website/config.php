<?php 

$page = str_replace('/', '', $_SERVER['REQUEST_URI']);

if(empty($page)){
	$page = 'default';
}

$pages = array();

$pages['default']['huayra'] = false;
$pages['default']['koha'] = false;
$pages['default']['t1'] = 'Más de lo que crees';
$pages['default']['d1'] = 'Te enseñamos y explicamos que es el Software Libre y su filosofía.
Aprenderás que existen alternativas para casi todo el software que utilizas.';
$pages['default']['i1'] = 'default1.png';

$pages['default']['t2'] = 'Perdé el miedo';
$pages['default']['d2'] = 'Te mostramos que no hay que tenerle miedo al cambio y que el Software Libre presta ayuda colectiva en todo el mundo.';
$pages['default']['i2'] = 'default2.jpg';

$pages['default']['color'] = '#f27d00';


$pages['dev']['huayra'] = false;
$pages['dev']['koha'] = false;
$pages['dev']['t1'] = 'Empieza a escribir Codigo';
$pages['dev']['d1'] = 'GNU/Linux te brinda todas las herramientas que necesitas para empezar a escribir codigo sin dolores de cabezas.';
$pages['dev']['i1'] = 'dev1.jpg';
$pages['dev']['t2'] = 'Apt-get install *-dev';
$pages['dev']['d2'] = 'Por que el Software libre te permite leer todo el codigo del Sistema Operativo que estas usando y modificarlo a tu gusto. Como asi tambien descargarte todo tipo de librerias para implementarlas en tus Proyectos';
$pages['dev']['i2'] = 'dev2.jpg';
$pages['dev']['color'] = '#111';

$pages['pymes']['huayra'] = false;
$pages['pymes']['koha'] = false;
$pages['pymes']['t1'] = 'Ahorra dinero en Licencias';
$pages['pymes']['d1'] = 'Gnu/Linux esta basado en las licencias GPL el cual te permite el libre uso de las herramientas sin costo de licenciamiento.';
$pages['pymes']['i1'] = 'pymes1.jpg';
$pages['pymes']['t2'] = 'Seguridad para tu Infraestructura Tecnologica';
$pages['pymes']['d2'] = 'Mas del 80% de las grandes empresas usan Gnu/Linux para sus servidores.';
$pages['pymes']['i2'] = 'pymes2.jpg';
$pages['pymes']['color'] = '#095d26';

$pages['huayra']['huayra'] = true;
$pages['huayra']['koha'] = false;
$pages['huayra']['t1'] = 'Huayra GNU/Linux, el sistema operativo libre de  Conectar Igualdad';
$pages['huayra']['d1'] = '';
$pages['huayra']['i1'] = 'huayra1.jpg';
$pages['huayra']['t2'] = '25 mil programas gratuitos y libres';
$pages['huayra']['d2'] = 'Y miles de contenidos de Educ.ar, Canal Encuentro, Conectar Igualdad, Paka-Paka y Conectate.';
$pages['huayra']['i2'] = 'huayra2.jpg';
$pages['huayra']['color'] = '#83abcd';

$pages['gamer']['huayra'] = false;
$pages['gamer']['koha'] = false;
$pages['gamer']['t1'] = 'Mas Rendimiento y Muchos mas FPS';
$pages['gamer']['d1'] = 'Obtén mas rendimiento en tu PC con GNU/Linux. Customiza tu Sistema Operativo para sacarle el maximo';
$pages['gamer']['i1'] = 'gamer1.jpg';
$pages['gamer']['t2'] = 'Steam for Linux';
$pages['gamer']['d2'] = 'Con mas de 40 Millones de Usuarios, Steam es la tienda de Juegos mas grande del mundo. Ahora disponible para Linux.';
$pages['gamer']['i2'] = 'gamer2.jpg';
$pages['gamer']['color'] = '#111';

$pages['libre']['huayra'] = false;
$pages['libre']['hkoha'] = false;
$pages['libre']['t1'] = 'Software Libre';
$pages['libre']['d1'] = 'Poner patentes a licencias sobre el software es como poner patentes sobre las recetas culinarias. Nadie podría comer a menos que pagara por la licencia de la receta';
$pages['libre']['i1'] = 'libre1.jpg';
$pages['libre']['t2'] = 'Cultura libre';
$pages['libre']['d2'] = 'Una Cultura libre no es una cultura sin propiedad, no es una cultura en la que no se paga a los artistas. Una cultura sin propiedad, o en la que no se paga a los artistas, es la anarquía, no la libertad.';
$pages['libre']['i2'] = 'libre2.png';
$pages['libre']['color'] = '#703b1a';


$pages['koha']['huayra'] = false;
$pages['koha']['koha'] = true;
$pages['koha']['t1'] = 'Koha';
$pages['koha']['d1'] = 'Koha es un sistema integrado de gestión de bibliotecas, único por ser el primero de código fuente abierto.';
$pages['koha']['i1'] = 'koha1.jpg';
$pages['koha']['t2'] = 'Koha + Ubuntu';
$pages['koha']['d2'] = 'Ven al KohaFest y te enseñaremos a administrar tu biblioteca con Software Libre';
$pages['koha']['i2'] = 'koha2.jpg';
$pages['koha']['color'] = '#459de6';



if(!isset($pages[$page])){
	$page = 'default';
}

$evento = 'FLISOL';
$año = '2013';
$sede = 'Paraná';
$descripción_corta = '';

$descripción_larga = '<p>El Festival Latinoamericano de Instalación de Software Libre (FLISOL) es el mayor evento de difusión del Software libre que se realiza desde el año 2005 en diferentes países de manera simultánea. En el año 2008 participaron más de 200 ciudades en 18 países de Latinoamérica, y se adoptó su realización el 4to Sábado de abril de cada año.</p>
                      <p>Este año, el Grupo de Usuarios de Linux Parana (LUG Paraná) con la colaboración de Grupo Universitario de GNU/Linux de Entre Ríos (GUGLER) organizan el evento en Paraná, con el objetivo de difundir el Software Libre y su filosofía, instalarlo o brindar medios de instalación a los que quieran probar o migrar al uso de software libre. Es una oportunidad para todas aquellas personas interesadas en conocer más acerca del software libre puedan aprender, compartir y conocer más.</p>
                      <p>Participando es posible entrar en contacto con el mundo del software libre, conocer a otros usuarios, resolver dudas e interrogantes, intercambiar opiniones y experiencias; asistir a charlas y otras actividades programadas.</p>';

$descripción_huayra = '<p><a target="_blank" href="http://huayra.conectarigualdad.gob.ar/huayra">Huayra</a> es el sistema operativo del Plan Conectar Igualdad. Es Software Libre y está pensado y desarrollado en Argentina para el uso de la comunidad educativa. Huayra toma su nombre del vocablo quechua que significa viento: viento de cambios, vientos de libertad, vientos de soberanía tecnológica.</p>
<p>En el Flisol 2013, te vamos a enseñar cómo instalar Huayra en tu netbook.</p>';

$descripción_koha = '<p>Este es un festival que organizamos desde hace 5 años en concordancia con el FLISoL latinoamericano.</p>
<p>En esta ocasión serás acompañado para que instales en tu computadora un Sistema Operativo Libre (Ubuntu) y un sistema integrado de gestión bibliotecaria también libre: Koha. Una vez instalado te ayudaremos a configurarlo para que puedas utilizarlo ya.</p>
<p>Será una magnífica oportunidad para que te acerques y conozcas las posibilidades que te puede brindar el Software Libre a vos, a tu biblioteca y a tus lectores.</p>';

$fecha = '27 de Abril de 10:00 horas a 20:00 horas';
$lugar = 'Escuela Normal Superior José María Torres - Corrientes esq. Urquiza - Paraná';

if($pages[$page]['huayra']){

	$consideraciones = '- Respaldar toda la información importante, no nos haremos responsables por perdidas de información.<br>
- Llegar en el horario de acreditación.';

} else {

	$consideraciones = '<p><b>· Respaldar la información importante</b><br>
Para evitar posibles perdidas de información durante las instalaciones de sistemas operativos, recomendamos respaldar la información importante.<br>
<i>No nos haremos responsables por perdidas de información.</i><br></p>
<p><b>· Desfragmentar disco duro</b><br>
Si querés tener DUAL-BOOT (Windows y Linux), podes ahorrar un montón de tiempo desfragmentando el disco duro, así se evita ese proceso, que dura muchísimo tiempo, durante alguna instalación<br>
<i>Desde Windows: Programas -> Accesorios -> Herramientas -> Desfragmentador de Disco.</i><br>
<p><b>· Requisitos mínimos para instalar</b><br>
- Microprocesador de 1 Ghz <br>
- 512 Mb de memoria RAM <br>
- Disco rígido de 10 Gb
</p>
';
}



$requisitos = 'Los medios de instalación PUEDEN SER GRATUITOS O NO, por lo cual, si tenés la posibilidad de llevar algún tipo de almacenamiento (CD, DVD, Pendrive, Memoria SD o MicroSD, etc) sería beneficioso.';


//$contacto_tel = '+54-3435-016-626';
//$contacto_email = 'a.soliard [at] gmail [dot] com';

//$facebook_appid = '523065027737443';


//$contacto_gplus = '#https://plus.google.com/u/0/events/c9h4uajjdcq6j2rf5fq6eom8u0g?authkey=CIym4sGb-8DXjAE';
//$contacto_facebook = '#';
//$contacto_twitter = '#';

//$registro_costo_cd = '$10';
$registro_fin = 'Tu registro ha sido completado con exito. Te esperamos en FLISOL 2013';
//$registro_fin2 = 'Ayudanos a difundir el Evento, Compartelo en tus redes sociales.';

// https://code.google.com/apis/console
$google_maps_api_key = 'AIzaSyD7DYcvnHJDv-nq845f6L31DjNOitm5qw4';

$google_maps_zoom = '18';

//ROADMAP displays the normal, default 2D tiles of Google Maps.
//SATELLITE displays photographic tiles.
//HYBRID displays a mix of photographic tiles and a tile layer for prominent features (roads, city names).
//TERRAIN displays physical relief tiles for displaying elevation and water features (mountains, rivers, etc.).
$google_maps_type = 'ROADMAP';

//http://itouchmap.com/latlong.html
$lat = '-31.732569';
$lng = '-60.529115';

//Sponsors
$sposors = array();
$sposors[] = array(
	'nombre' => 'LUG Paraná',
	'img' => 'http://www.lugparana.org.ar/img/tiki/lugparana-logo.png',
	'link' => 'http://www.lugparana.org.ar', 
);
$sposors[] = array(
	'nombre' => 'GUGLER',
	'img' => 'http://www.gugler.com.ar/templates/dd_carrepair_18/images/logo.png',
	'link' => 'http://www.gugler.com.ar', 
);

//Cronograma

$cronograma = array();

if($pages[$page]['huayra']){

	$cronograma['aula1'] = array(
		'titulo' => 'Aula Huayra',
		'horarios' => array(
			'1000' => 'Acreditación',
			'1045' => '“Introducción al Software Libre” – Hipolito Alvarez',
			'1115' => '"Instalación de Debian GNU/Linux” – Laboratorio Gugler',
			'1200' => 'BREAK',
			'1330' => 'Acreditación',
	));

}
else {

	$cronograma['aula2'] = array(
	'titulo' => 'Aula Flisol',
	'horarios' => array(
		'1030' => 'Acreditación',
			'1100' => '"Introducción al Software Libre" – Hipolito Alvarez',
			'1200' => '"10 años con Software Libre – Experiancias de un usuario" – Cristian Ramirez',
			'1300' => 'BREAK',
			'1430' => 'Acreditación',
			'1500' => '"Instalación de Debian GNU/Linux" – Laboratorio Gugler',
			'1600' => '"Proyecto Fedora” – Adrian Soliard (Fedora Project)',
			'1700' => '"Migracion de Datos y OpenOffice" – L. Militello y A. Lederhos (Ubuntu LoCo Team)',
			'1800' => '"Introducción al Sistema Operativo Huayra GNU/Linux" – H. Albornoz y J. Ferrari',
			'1900' => 'OPEN FLOOR y CIERRE DEL EVENTO'
	));
}

function curPageURL() {
 $pageURL = 'http';
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}



?> 
