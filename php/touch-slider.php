     <!-- bootstrap 3 touch slider with animations -->
     <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line hidden-xs"
         data-ride="carousel" data-pause="hover" data-interval="false">

         <!-- Indicators -->
         <ol class="carousel-indicators">
             <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
             <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
         </ol>

         <!-- Wrapper For Slides -->
         <div class="carousel-inner " role="listbox">

             <!-- Second Slide -->
             <div class="item active">

                 <!-- Slide Background -->
                 <img src="img/hero-bg.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
                 <div class="bs-slider-overlay "></div>
                 <!-- Slide Text Layer -->
                 <div class="slide-text slide_style_center">
                     <h1 data-animation="animated flipInX"> <?php echo "$the_sitetitle"; ?> </h1>
                     <p data-animation="animated lightSpeedIn">Memorable experience</p>
                     <a href="#services" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                         class="btn btn-primary scroll" data-animation="animated fadeInUp">MORE <i
                             class="fa fa-angle-right" aria-hidden="true"></i></a>
                     <a href="#footer" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                         class="btn btn-default scroll" data-animation="animated fadeInDown">CONTACT <i
                             class="fa fa-angle-right" aria-hidden="true"></i></a>
                 </div>
             </div>
             <!-- End of Slide -->

             <!-- Third Slide -->
             <div class="item">
                 <!-- Slide Background -->
                 <img src="img/hero-bg.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
                 <div class="bs-slider-overlay "></div>
                 <!-- Slide Text Layer -->
                 <div class="slide-text slide_style_center">
                     <h1 data-animation="animated zoomInLeft"><?php echo "$the_sitetitle"; ?></h1>
                     <p data-animation="animated fadeInRight">Discover Istria</p>
                     <a href="#services" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                         class="btn btn-primary scroll" data-animation="animated fadeInLeft">MORE <i
                             class="fa fa-angle-right" aria-hidden="true"></i></a>
                     <a href="#footer" data-scroll data-options='{ "easing": "easeInOutQuad" }'
                         class="btn btn-default scroll" data-animation="animated fadeInRight">CONTACT <i
                             class="fa fa-angle-right" aria-hidden="true"></i></a>
                 </div>
             </div>
             <!-- End of Slide -->


         </div><!-- End of Wrapper For Slides -->

         <!-- Left Control -->
         <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
             <span class="fa fa-angle-left" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>

         <!-- Right Control -->
         <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
             <span class="fa fa-angle-right" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>

     </div> <!-- End  bootstrap-touch-slider Slider -->