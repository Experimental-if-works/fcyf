    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/logos/moviles.png" alt="IFUNAM" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item active">
                        <a href="index.php<?php echo $locale;?>"><i class="fa fa-home" aria-hidden="true"></i> <?php echo $opc1;?></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.fisica.unam.mx/investigacion/departamentos/fisica_cuantica_y_fotonica/?lang=<?php echo $locale;?>"><i class="fa-solid fa-atom"></i> <?php echo $opc2;?></a>
                    </li>    
                    <li class="nav-item">
                        <a href="como_llegar.php<?php echo $locale;?>"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $opc3;?></a>
                    </li>    
                    <li class="nav-item">
                        <a href="<?php echo $host?>eventos.php<?php echo $locale;?>"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $opc4;?></a>
                    </li>    
                    <li class="nav-item">
                    <a href="<?php echo $complete_url?><?php echo $translate_param;?>" class="icon-sign-out mr-3"><i class="fas fa-comment-alt"></i> 
                        <?php
                            if ($translate == 'en'){
                            echo "English";
                            }else{
                            echo "Espa&ntilde;ol";
                            }
                        ?>
                        </a>
                    </li>    
                    <!--<a class="nav-link" href="#services">Services</a></li>-->
                </ul>
            </div>
        </div>
    </nav>
