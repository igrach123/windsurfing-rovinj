<header class="" id="home">
    <div class="container-fluid hidden-xs" id="call">
        <div class="container">
            <a href="https://goo.gl/maps/ZRzkjmbGhNVTY5YY8" target="_blank"><img src="img/social/map-marker.png"
                    alt="map"> RED ISLAND </a>
            <a href="tel:+385 (0)98441140">
                <img src="img/social/whatsapp.png" alt="whatsapp"> / <img src="img/social/viber.png" alt="viber">
                +385 (0)98 441 140</a>
        </div>
    </div>
    <nav class="navbar navbar-default" data-nav-status="toggle" role="navigation" data-spy="affix" id="myNavbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="index.php" id="logo1"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class=" nav navbar-nav navbar-left">
                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#home"
                            class="scroll ">HOME</a></li>
                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#services"
                            class="scroll">SERVICES</a></li>
                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#rent"
                            class="scroll">ABOUT</a></li>

                </ul>
                <ul class=" nav navbar-nav navbar-right">

                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#rent"
                            class="scroll">LOCATION</a></li>

                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#footer"
                            class="scroll">CONTACT</a></li>
                    <li id="lang-id">
                        <div class="dropdown language">
                            <button class="btn btn-warning btn-xs dropdown-toggle language" type="button"
                                data-toggle="dropdown">EN
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">HR</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
    </nav>
    <!-- h1 xs -->
    <h1 class="visible-xs"><?php echo "$the_sitetitle"; ?> <br>
        <a href="#services" data-scroll data-options='{ "easing": "easeInOutQuad" }' class="btn scroll"
            data-animation="animated fadeInUp"> <i class="fa fa-angle-double-down fa-3x" aria-hidden="true"></i></a>
    </h1>
    <!-- touch slide -->
    <?php include "php/touch-slider.php" ?>
</header>