<footer id="footer" class="clearfix">
    <div class="container-fluid kontakti-wrapper no-padding">
        <div class="row">

            <div class="col-md-4 hidden-xs hidden-sm">
                <h4 class="text-center ">Pronađite Nas</h4>

                <div id="mapid" class="map-bg">
                    <div class="row">
                        <div class="col-xs-12 rovinj">
                            <a href="https://goo.gl/maps/jTtigtuEDJu" target="_blank"></a>
                        </div>
                        <div class="col-xs-12 villas">
                            <a href="https://goo.gl/maps/CipgQpZywKz" target="_blank"></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <h4 class="text-center ">Pošaljite nam upit!</h4>

                <form role="form" method="post" id="reused_form">
                    <div class="form-group">
                        <input placeholder="Ime" type="text" class="form-control" id="name" name="name" required
                            maxlength="50">
                    </div>
                    <div class="form-group">
                        <input placeholder="Email" type="email" class="form-control" id="email" name="email" required
                            maxlength="50">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" name="message" id="message"
                            placeholder="Poruka ovdje" maxlength="6000" rows="5"></textarea>
                    </div>
                    <div class="row" style="margin-bottom:30px;">
                        <div class="col-sm-5">
                            <img src="captcha.php" id="captcha_image" />
                            <br />
                            <a id="captcha_reload" href="#">reload</a>
                        </div>
                        <div class="col-sm-6">
                            <input placeholder="Unesite kod s slike ovdje" type="text" class="form-control" required
                                id="captcha" name="captcha">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn  btn-default" id="btnContactUs">POŠALJI</button>
                    </div>

                </form>
                <div id="success_message" style="width:100%; height:100%; display:none; ">
                    <h3 class="bg-success">Poruka uspješno poslana. <br> Javit će mo vams se u što kraćem roku! </h3>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; ">
                    <h3 class="bg-danger">Greška</h3>Pkušajte ponovno, ili refrešajte stranicu i formu.
                </div>
            </div>
            <div class="col-md-4 visible-xs visible-sm">
                <h4 class="text-center ">Pronađite Nas</h4>

                <div id="mapid" class="map-bg">
                    <div class="row">
                        <div class="col-xs-12 rovinj">
                            <a href="https://goo.gl/maps/jTtigtuEDJu" target="_blank"></a>
                        </div>
                        <div class="col-xs-12 villas">
                            <a href="https://goo.gl/maps/CipgQpZywKz" target="_blank"></a>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-md-4 contact-info">
                <h4 class="text-center">
                    KONTAKT
                </h4>

                <ul class="list-unstyled contact-list">
                    <li>
                        <h5> <span class="fa fa-map-marker"></span> ADRESA UKRCAJA </h5>
                    </li>
                    <li><a href="https://goo.gl/maps/jTtigtuEDJu" target="_blank">Rovinjska sjeverna luka „Valdibora“
                        </a> </li>
                    <li><a href="https://goo.gl/maps/CipgQpZywKz" target="_blank">Turističko naselje „Vilas Rubin“</a>
                    </li>
                    <li><b><small cdlass="text-muted">KLIKNITE ZA UPUTE</small></b></li>
                    <hr>
                    <li>
                        <h5><span class="fa fa-phone"></span> TEL / <span class="fa fa-whatsapp"></span> WHATSAPP</h5>
                    </li>
                    <li class="text-muted"> <a href="tel:+385 (0)98441140"> +385 (0)98 441 140</a></li>
                    <hr>
                    <li>
                        <h5><span class="fa fa-envelope-o"></span> EMAIL</h5>
                    </li>
                    <li>
                        <script TYPE="text/javascript">
                        emailE = ('boatexcursiontonka@' + 'gmail.com')
                        document.write('<a href="mailto:' + emailE + '">' + emailE + '</a>')
                        </script>

                        <noscript>
                            <em>Email address protected by JavaScript.<BR>
                                Please enable JavaScript to contact me.</em>
                        </noscript>
                    </li>
                    <hr>
                    <li>
                        <h5>PRATITE NAS</h5>
                    </li>
                    <li class="social-media-bottom">
                        <a class="instagram" href="https://www.instagram.com/boatexcursionstonka/?hl=en"
                            target="_blank"></a>
                        <a class="facebook" href="https://www.facebook.com/boatexcursionsTonka/" target="_blank"></a>

                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="footer-bottom">


        <div class="footer-bottom-left"><a href="index.php" target="_self">
                <img src="../img/logo-small-3.png" class="img-responsive" alt="Boat Excursions Tonka logo"></a>
        </div>
        <div class="footer-bottom-center">
            <p class="text-center"><?php echo "$the_sitetitle"; ?> &copy; <span class="hidden-sm">
                    <?php echo date("Y"); ?> </span> </p>
        </div>
        <div class="footer-bottom-right">
            <a href="https://www.cro-webdesign.com/" target="_blank">
                <p class="text-center hidden-xs izradio">POWERED BY:<br>
                    <span class="cw-logo"></span>
                </p>
            </a>
        </div>
    </div>
    </div> <!-- end of container -->
</footer>