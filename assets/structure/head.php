<?php
//General Parameters
$root= "https://www.fisica.unam.mx";
//$root= "http://192.168.107.247";
error_reporting(0);
$host= $_SERVER["PHP_SELF"];
//echo $host;
$lang = $_GET['lang'];
$complete_url= $root.$host;

//Main Nav Menu
if($lang == "en"){
	$lang="en";
	$translate="es";
	$locale="?lang=en";
	$translate_param="?lang=es";
    $main_title="QUANTUM AND PHOTON";
    $main_subtitle="PHYSICS SEMINAR";
    $page_title= "$main_subtitle $main_title - IFUNAM";
    $page_description="";
    $next_event_title="UPCOMING EVENTS";
    $past_event_title="PREVIOUS EVENTS";
    $event_btn="DETALLES DEL EVENTO";
    $opc1="Home";
	$opc2="Departament";
	$opc3="How to get there?";
	$opc4="Previous events";
    //Location
    $location_title="HOW TO";
    $location_subtitle="GET THERE?";
}else{ 
	$lang="es";
	$translate="en";
	$locale="?lang=es";
	$translate_param="?lang=en";
    $main_title="SEMINARIO DE F&Iacute;SICA";
    $main_subtitle="CU&Aacute;NTICA Y FOT&Oacute;NICA";
    $page_title= "$main_title $main_subtitle - IFUNAM";
    $next_event_title="PR&Oacute;XIMOS EVENTOS";
    $past_event_title="EVENTOS ANTERIORES";
    $event_btn="DETALLES DEL EVENTO";
    $opc1="Inicio";
	$opc2="Departamento";
	$opc3="&iquest; C&oacute;mo llegar?";
	$opc4="Eventos anteriores";
    //Location
    $location_title="&iquest;C&Oacute;MO";
    $location_subtitle="LLEGAR?";
}
?>
    <!-- Google tag (gtag.js) -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-W6QF8J01GZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-W6QF8J01GZ');
    </script>-->
    <!-- Favicon-->
    <!--<link rel="icon" type="image/x-icon" href="assets/icons/50024.png" />-->
    <link rel="icon" href="assets/icons/50024.png" type="image/png">
    <!-- Font Awesome icons (free version)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owlcarousel/owl.theme.default.min.css">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/extra.css" rel="stylesheet" />