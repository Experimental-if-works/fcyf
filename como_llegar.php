<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Header -->
        <?php include 'assets/structure/head.php' ?>
        <meta name="description" content="<?php echo $page_description;?>" />
        <meta name="author" content="Daniel de Jes&uacute;s Rosales Mendoza" />
        <title><?php echo $page_title;?></title>
    </head>
    <body id="page-top">
        <!-- Navbar -->
        <?php include 'assets/structure/nav.php' ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase"><?php echo $location_title;?>
                <span class="masthead-location-subheading text-uppercase"> <?php echo $location_subtitle;?></span>
                </div>
            </div>
        </header>
        <!-- Next Events-->
        <section class="page-section location">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-md-4 text-end">
                        <h4 class="blue-box">INSTITUTO DE F&Iacute;SICA</br>CIUDAD UNIVERSITARIA</h4>
                        <p class="location-description">Sendero Bicipuma, C.U., Coyoac&aacute;n, 04510 Ciudad de M&eacute;xico, CDMX </p>
                    </div>
                    <div class="col-xs-12 col-md-5 embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item box-img-location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.0125436454446!2d-99.17921822364617!3d19.325261981931423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce00107c7e2191%3A0xe12f9777e0bbc3fb!2sInstituto%20de%20F%C3%ADsica!5e0!3m2!1ses-419!2smx!4v1747240552688!5m2!1ses-419!2smx" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section location">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-md-5">
                        <img class="img-fluid box-img-location" src="assets/img/location/mapa_frontal.jpg" alt="Sala de Em&eacute;ritos" />
                    </div>
                    <div class="col-xs-12 col-md-4 text-start">
                        <h4 class="blue-box">SALA DE EM&Eacute;RITOS</h4>
                        <p class="location-description">Edificio Marcos Moshinsky</br>Segundo Piso</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <?php include 'assets/structure/footer.php' ?>
        <!-- JS -->
        <?php include 'assets/structure/js.php' ?>
    </body>
</html>
