
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Verity Geosolutions - Providing Expert Geophysical Services For Oil and Gas Companies</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="icon" type="icon" href="assets/images/logo.png">
  </head>
  <body>
<!--header-->

<?php
       include('inc/header.php');
  ?>
<!--/header-->
<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3">
            <h2 class="title">Clientele</h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="index.php">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Clientele </li>
            </ul>
        </div>
    </div>
</section>
<!-- //contact breadcrumb -->
<div class="w3l-contact-info py-5" id="contact">
    <div class="container py-lg-5 py-md-4">

            <div class="col-lg-12 align-self mt-lg-0 mt-sm-5 mt-4"> 
                <img src="assets/images/logos.png" class="img-fluid" alt="">
            </div>
        <!-- <div class="row">
            <div class="col-lg-8 form-inner-cont mt-lg-0 mt-sm-5 mt-4"> </div>
            

            <div class="col-lg-2 align-self mt-lg-0 mt-md-5 mt-4"> 
                <img src="assets/images/logos/addax.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 align-self mt-lg-0 mt-md-5 mt-4">
                <img src="assets/images/logos/chevron.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3 align-self mt-lg-0 mt-md-5 mt-4">
                <img src="assets/images/logos/energia.png" class="img-fluid" alt="">
            </div>


            <div class="col-lg-3 align-self mt-lg-0 mt-md-5 mt-4"> 
                <img src="assets/images/logos/fes.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3 align-self mt-lg-0 mt-sm-5 mt-4"> 
                <img src="assets/images/logos/newcross.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3 align-self mt-lg-0 mt-md-5 mt-4">
                <img src="assets/images/logos/nnpc.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3 align-self mt-lg-0 mt-md-5 mt-4">
                <img src="assets/images/logos/panocean.jpeg" class="img-fluid" alt="">
            </div>


            <div class="col-lg-3 align-self mt-lg-0 mt-md-5 mt-4"> 
                <img src="assets/images/logos/platformpet.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3 align-self mt-lg-0 mt-sm-5 mt-4"> 
                <img src="assets/images/logos/sahara.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3 align-self mt-lg-0 mt-md-5 mt-4">
                <img src="assets/images/logos/seplat.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3 align-self mt-lg-0 mt-md-5 mt-4">
                <img src="assets/images/logos/snepco.png" class="img-fluid" alt="">
            </div>


            <div class="col-lg-3 align-self mt-lg-0 mt-md-5 mt-4">
                <img src="assets/images/logos/tenoil.svg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3 align-self mt-lg-0 mt-md-5 mt-4">
                <img src="assets/images/logos/transcorp.svg" class="img-fluid" alt="">
            </div>

        </div> -->
    </div>
</div>
 <!-- footer -->

 <?php
    include('inc/footer.php');
?>
<!-- //footer -->
<!-- Template JavaScript -->
<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->

<script src="assets/js/jquery-1.9.1.min.js"></script>

<script src="assets/js/theme-change.js"></script>
<!-- responsive tabs -->
<script src="assets/js/easyResponsiveTabs.js"></script>

<!--Plug-in Initialisation-->
<script type="text/javascript">
 $(document).ready(function () {
   //Horizontal Tab
   $('#parentHorizontalTab').easyResponsiveTabs({
     type: 'default', //Types: default, vertical, accordion
     width: 'auto', //auto or any width like 600px
     fit: true, // 100% fit in a container
     tabidentify: 'hor_1', // The tab groups identifier
     activate: function (event) { // Callback function if tab is switched
       var $tab = $(this);
       var $info = $('#nested-tabInfo');
       var $name = $('span', $info);
       $name.text($tab.text());
       $info.show();
     }
   });
 });
</script>

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->
<script>
  $(document).ready(function () {
    $('.owl-three').owlCarousel({
      margin: 20,
      nav: false,
      dots: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 2
        },
        480: {
          items: 2
        },
        767: {
          items: 3
        },
        992: {
          items: 4
        },
        1280: {
          items: 5
        }
      }
    })
  })
</script>

<!-- script for testimonials -->
<script>
 $(document).ready(function () {
   $('.owl-testimonial').owlCarousel({
     loop: true,
     margin: 0,
     nav: true,
     responsiveClass: true,
     autoplay: false,
     autoplayTimeout: 5000,
     autoplaySpeed: 1000,
     autoplayHoverPause: false,
     responsive: {
       0: {
         items: 1,
         nav: false
       },
       480: {
         items: 1,
         nav: false
       },
       667: {
         items: 1,
         nav: true
       },
       1000: {
         items: 1,
         nav: true
       }
     }
   })
 })
</script>
<!-- //script for testimonials -->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>