 <!-- footer -->
 <section class="w3l-footer">
  <div class="w3l-footer-16-main py-5">
    <div class="container pt-lg-4">
      <div class="row">
        <div class="col-lg-7 column">
          <div class="row">
            <!-- <div class="col-sm-4 col-6 column">
              <h3>Company</h3>
              <ul class="footer-gd-16">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Our Services</a></li>
                <li><a href="#blog">Blog Listings</a></li>
                <li><a href="contact.php">Contact Us</a></li>
              </ul>
            </div> -->
            <div class="col-sm-6 col-6 column">
                <img src="assets/images/logo.png" alt=""> <br><br>
               <p>Verity Geosolutions (VerityGeo) is a privately held 100% Nigerian energy services company established to provide first-class integrated Geophysical and Geomatics services to the West African Oil and Gas sector.</p>
            </div>
            <div style="margin-left:100px ;" class="col-sm-4 col-6 column mt-sm-0 mt-4">
              <h3> Quick Links</h3>
              <ul class="footer-gd-16">
                <li><a href="#url">Home</a></li>
                <li><a href="#url">About Us</a></li>
                <li><a href="#url">Our Services</a></li>
                <li><a href="#url">Our Clientele</a></li>
                <li><a href="#url">Contact Us</a></li>
                <li><a href="#url">Staff Login</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
          <h3>Newsletter </h3>
          <div class="end-column">
            <h4>Subscribe to our newsletters to receive latest news and updates</h4>
            <form action="#" class="subscribe" method="post">
              <input type="email" name="email" placeholder="Email Address" required="">
              <button type="submit"><span class="fa fa-paper-plane"></span></button>
            </form>
            <!-- <p>Sign up for our latest news & articles. We won’t give you spam mails.</p> -->
          </div>
        </div>
      </div>
      <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
        <div class="columns text-lg-left text-center">
          <p>&copy; Copyright <?php echo date("Y"); ?> Verity Geo. All rights reserved. </p>
            <!-- <a href="https://w3layouts.com/" target="_blank">   W3Layouts</a> -->
        </div>
        <div class="columns-2 mt-lg-0 mt-3">
          <ul class="social">
            <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
            </li>
            <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
            </li>
            <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            </li>
            <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
            </li>
            <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- //move top -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
</section>
<!-- //footer -->