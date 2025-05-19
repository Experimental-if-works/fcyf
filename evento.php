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
                <div class="masthead-heading text-uppercase">
                </div>
            </div>
        </header>
        <!-- Current Events-->
        <section class="page-section" id="next_events">
            <div class="container">
                <div class="row justify-content-center current-event" id="event">
                </div>
                <div class="row justify-content-center" id="event_resume">
                </div>
            </div>
        </section>
        <hr></hr>
        <!-- Past Events-->
        <section class="page-section" id="demos">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><img class="img-fluid img-icons" src="assets/icons/calendario.png" alt="<?php echo $past_event_title;?>" /> <?php echo $past_event_title;?></h2>
                </div>
                <!-- Nav pills -->
                <div class="row justify-content-center">
                        <ul class="nav nav-pills flex-column flex-sm-row justify-content-center col-4 pills-underline" role="tablist">
                            <?php
                            $j = date("Y");
                            for ($i = date("Y"); $i >= 2024; $i--) {
                                echo '<li class="nav-item">';
                                if ($i < $j){
                                    echo "<a class=\"flex-sm-fill text-sm-center nav-link nav-years\" data-bs-toggle=\"pill\" href=\"#nav-$i\">$i</a>";
                                }else{
                                    echo "<a class=\"flex-sm-fill text-sm-center nav-link nav-years active\" data-bs-toggle=\"pill\" href=\"#nav-$i\">$i</a>";
                                }
                                echo '</li>';
                            }
                            ?>
                        </ul>
                </div>
                <!-- Tab panes -->
                <div class="row justify-content-center">
                    <div class="tab-content">
                        <?php
                        for ($i = date("Y"); $i >= 2024; $i--) {
                            if ($i< $j){
                                echo "<div id=\"nav-$i\" class=\"container tab-pane\">";
                            }else{
                                echo "<div id=\"nav-$i\" class=\"container tab-pane active\">";
                            }
                            echo '<div class="large-12 columns">';
                                echo "<div class=\"owl-carousel owl-theme owl-carousel-$i\" id=\"past_seminars\">";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <?php include 'assets/structure/footer.php' ?>
        <!-- JS -->
        <?php include 'assets/structure/js.php' ?>
        <script src="assets/js/data/all_seminars.js"></script>      
        <script src="assets/js/data/event.js"></script>       
        <script>
            var j = new Date().getFullYear()
            /*for (let i = j; i >= 2024; i--) {
                var owl_year = ".owl-carousel" + i*/
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    nav:true,
                    margin:10,
                    loop:false,
                    responsive:{
                        0:{
                            items:2
                        },
                        1000:{
                            items:3
                        }
                    }
                });
            //}
        </script>
    </body>
</html>
