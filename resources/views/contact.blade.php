<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PALUGADA | Contact Us</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/animate/animate.min.css" rel="stylesheet')}}">
  <link href="{{asset('plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/about.css')}}" rel="stylesheet">

<body>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sampaikan Kritik atau Saran anda</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <img src="https://img.icons8.com/windows/64/000000/address.png">
              <h3>Address</h3>
              <address>Jl. H. R. Rasuna Said No.Kav. C-22 Jakarta Selatan 12940,
                Indonesia</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <img src="https://img.icons8.com/windows/64/000000/phone.png">
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+62 2257 3535</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <img src="https://img.icons8.com/windows/64/000000/secured-letter.png">
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">palugada@info.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>PALUGADA</h3>
            <h5>"Apa Lu Mau Gua Ada"</h5>
            <p>Didukung dengan teknologi terkini, kami memberikan pelayanan jasa terbaik dengan harga terjangkau.</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/')}}">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/about-us')}}">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/contact-us')}}">Contact us</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Alamat Kami</h4>
            <p>
              Gama Tower <br>
              Jl. H. R. Rasuna Said No.Kav. C-22, RT.2/RW.5<br>
              Kuningan, Jakarta Selatan 12940<br>
              Indonesia<br>
              <strong>Phone:</strong> +62 2257 3535<br>
              <strong>Email:</strong> palugada@info.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>PALUGADA</strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->


  <!-- JavaScript Libraries -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('plugins/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('plugins/easing/easing.min.js')}}"></script>
  <script src="{{asset('plugins/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('plugins/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('plugins/wow/wow.min.js')}}"></script>
  <script src="{{asset('plugins/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('plugins/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('plugins/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('plugins/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('plugins/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('plugins/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
