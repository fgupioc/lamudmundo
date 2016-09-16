<?php /* Template Name: contacto_blog */
get_header();
?>
<section class="promo section" style="background-color: #2f4a60">
    <div class="container text-center">
        <h2 class="title">Contacto</h2>
        <p class="intro">Utilice este canal de comunicación para registrar sus sugerencias o inquietudes.
            Envíe su mensaje ingresando sus datos</p>
    </div><!--//container-->
</section><!--//promo-->
<!-- ******Contact Section****** -->
<section class="contact-section section">
    <div class="container">
        <h2 class="title text-center">Llene los datos</h2>
        <form id="contact-form" class="contact-form form" method="post" action="#">
            <div class="row text-center">
                <div
                    class="contact-form-inner col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <label class="sr-only" for="cname">Nombre</label>
                            <input type="text" class="form-control" id="cname" name="name"
                                   placeholder="ingrese su Nombre completo" minlength="2" required>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <label class="sr-only" for="cemail">Correo</label>
                            <input type="email" class="form-control" id="cemail" name="email"
                                   placeholder="Ingrese su correo" required>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <label class="sr-only" for="cmessage">Mensaje</label>
                            <textarea class="form-control" id="cmessage" name="message" placeholder="Escriba su mensaje"
                                      rows="12" required></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <button type="submit" class="btn btn-block btn-cta btn-cta-primary">Enviar</button>
                        </div>
                    </div><!--//row-->
                </div>
            </div><!--//row-->
            <div id="form-messages"></div>
        </form><!--//contact-form-->
    </div><!--//container-->
</section><!--//contact-section-->

<!-- ******Map Section****** -->
<section class="map-section section">
    <div class="gmap-wrapper">
        <!--//You need to embed your own google map below-->
        <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79444.64391671501!2d-0.21428374128957384!3d51.51972634746694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876045108e9cad3%3A0x6514817fa6d57c9!2sThe+Web+Kitchen!5e0!3m2!1sen!2suk!4v1469624353093"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div><!--//gmap-wrapper-->
</section><!--//map-section-->


<!-- ******CTA Section****** -->
<section id="cta-section" class="cta-section section text-center home-cta-section">
    <div class="container">
        <h2 class="title">Want to have a quick chat?</h2>
        <p class="phone contact-info">
            <span class="intro">We are only a phone call away</span>
            <span class="info"><a href="tel:+08001234567">0800 123 4567</a></span>
        </p><!--//phone-->
        <p class="email contact-info">
            <span class="intro">You can also email us</span>
            <span class="info"><a href="mailto:hello@yourdevstudio.com">hello@yourdevstudio.com</a></span>
        </p><!--//phone-->
    </div><!--//container-->
</section>
<!--//cta-section-->

<?php get_footer();
 

