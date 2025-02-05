<?php
session_start()

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kulture</title>
  <!-- Favicons -->
  <link href="assets/img/kultureicon.svg" rel="icon">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main css file -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Kulture<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#category">Cultural Items</a></li>
          <li><a href="#museum">Museums</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contacts</a></li>
          <?php

          if (isset($_SESSION['id'])) {
          ?>

            <li><a href="./forms/logout.php">Logout</a></li>
          <?php
          } else {
          ?>
            <li><a href="./forms/login.php">Login</a></li>
          <?php
          }
          ?>

        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
  <!-- ======= Home Section ======= -->
  <section id="home" class="home d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start ml-5">
          <h2 data-aos="fade-up">Kulture Rwanda.<br>BANYARWANDA.</h2>
          <p data-aos="fade-up" data-aos-delay="100">Rwandans share cultural values such as togetherness,
            patriotism, social cohesiveness, resilience, and hard work, among others, with Kinyarwanda
            being the common language used throughout the country.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="https://www.youtube.com/watch?v=uOJV9OLnwT8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Brief
                history</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/agaseke.png" class="img-fluid agaseke" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Home Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Brief Cultural Description</h2>
          <p>Uniqueness of the traditional dance</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/intore.jpg) ; background-repeat: none; background-size:cover;" data-aos="fade-up" data-aos-delay="150" title="Intore">
            <div class="call-us position-absolute">
              <h4>INTORE</h4>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic"> <b>Intore</b>
                was a highly choreographed routine consisting of three components:</p>
              <ul>
                <li><i class="bi bi-check2-all"></i>the ballet,
                  performed by women</li>
                <li><i class="bi bi-check2-all"></i> the dance of heroes, performed by men</li>
                <li><i class="bi bi-check2-all"></i> and the drums. Traditionally, music is
                  transmitted orally with styles varying between the social groups.</li>
              </ul>
              <p>
                It should be noted that traditional music and dance is a vital component of the Rwanda people. Natives
                have a variety of music and dance associated with acts and performance that demonstrates epics
                commemorating bravery, harmony and humorous lyrics to hunting root.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/kingpalace.jpg" class="img-fluid" alt="King's palace">
                <a href="https://www.youtube.com/watch?v=zmy-zm1Z0b8" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cultural Benefits ======= -->
    <section id="cultural-benefit" class="cultural-benefit section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Rwandan Culture and Traditions</h3>
              <p>
                Discover Rwanda's people and culture, as well as its customs, rituals, and way of life, through Visit & Tour Rwanda.
                Attend cultural nights that are enjoyable and educational for both locals and visitors.</p>
              <div class="text-center">
                <a href="learnmore.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                <?php
                //  echo '<a href="pass.php?link=' . $a . '>Link 1</a>';
                ?>

              </div>
            </div>
          </div>

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <img src="assets/img/highlights/Amasunzu hairstyle_ Rwanda.png" alt="" class="img-fluid">
                  <h4>Amasunzu</h4>
                  <p>The Amasunzu traditional hairdo is without a doubt one of the most inventive.
                    It was and still is a sign of pride in Rwanda, and it is still worn today.
                    The distinctive look is achieved by cutting portion of the hair horizontally and braiding the top.
                    A person with this haircut was seen to be powerful, aristocratic, dignified, and fearless.
                  </p>
                </div>
              </div>

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <img src="assets/img/imigongo.jfif" alt="" class="img-fluid">
                  <h4>Imigongo</h4>
                  <p>Imigongo, or cow dung paintings, are a uniquely Rwandan craft made by a local co-operative
                    in the community of Nyakarambi near the Tanzanian border. These one-of-a-kind and earthy pieces,
                    dominated by black, brown, and white whirls and other geometric patterns, can be found in artisan markets around the country.</p>
                </div>
              </div>

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <img src="assets/img/highlights/Support Female Empowerment _ Indego Africa.jpg" alt="" class="img-fluid">
                  <h4>Artisanal Crafts</h4>
                  <p>Weaving and basket building are historic crafts that are being practiced today to provide dry containers for storing food and medications.
                    Pottery is one of Rwanda's earliest kinds of art, and it is being practiced in many places today utilizing ancient Batwa techniques.
                    These potteries, known for their high quality clay, are still commonly used for cooking and storing liquids.</p>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Cultural benefits Section -->

    <!-- ======= culture showcase Section ======= -->
    <section id="" class="culture-showcase">
      <div class="container" data-aos="zoom-out" title="Traditional Rwandan Youth">
        <div class="row gy-4">
        </div>
      </div>
    </section><!-- culture showcase Section -->

    <!-- ======= category Section ======= -->
    <section id="category" class="category">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Cultural Categories</p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#imitako">
              <h4>Decorations</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#abami">
              <h4>Kings</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#imyidagaduro">
              <h4>Entertainment</h4>
            </a>
          </li><!-- End tab nav item -->

          <!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="imitako">

            <div class="tab-header text-center">

              <h3>Imitako(Decorations)</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 category-item">
              <a href="assets/img/imitako/imitako4.jpg" class="glightbox"><img src="assets/img/imitako/imitako4.jpg" class="category-img img-fluid" alt="" title="inkoko"></a>

              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
              <a href="assets/img/imitako/insika.png" class="glightbox"><img src="assets/img/imitako/insika.png" class="category-img img-fluid" alt="" title="insika"></a>


              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
              <a href="assets/img/imitako/imitako1.jpg" class="glightbox"><img src="assets/img/imitako/imitako1.jpg" class="category-img img-fluid" alt="" title="wall basket"></a>


              </div><!-- category Item -->


            </div>
          </div><!-- End imitako category Content -->

          <div class="tab-pane fade" id="abami">

            <div class="tab-header text-center">

              <h3>Kings(Abami)</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 category-item">
                <a href="assets/img/kings/king1.jpg" class="glightbox"><img src="assets/img/kings/king1.jpg" class="category-img img-fluid" alt=""></a>
              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/kings/king2.jpg" class="glightbox"><img src="assets/img/kings/king2.jpg" class="category-img img-fluid" alt=""></a>
              </div><!-- category Item -->

              <div class="col-lg-4 category-item">
                <a href="assets/img/kings/king3.jpg" class="glightbox"><img src="assets/img/kings/king3.jpg" class="category-img img-fluid" alt=""></a>
              </div><!-- category Item -->



            </div>
          </div><!-- End abami category Content -->

          <div class="tab-pane fade" id="imyidagaduro">

            <div class="tab-header text-center">
              <h3>Imyidagaduro</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/game1.jpg" class="glightbox"><img src="assets/img/game1.jpg" style="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

              </div><!-- Category Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/game2.jpg" class="glightbox"><img src="assets/img/game2.jpg" style="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

              </div><!-- Category Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/game5.jpg" class="glightbox"><img src="assets/img/game5.jpg" style="width:500px; height:200px;" class="menu-img img-fluid" alt=""></a>

              </div><!-- Category Item -->



            </div>
          </div><!-- End imyidagaduro category Content -->

        </div>
        <div class="text-center load_cat mt-5" data-aos="fade-up" data-aos-delay="200">
          <a href="categories.php">Load More</a>
        </div>
      </div>
    </section><!-- End Category Section -->

    <!-- ======= Cultural places Section ======= -->
    <section id="museum" class="museums">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>Events</h2> -->
          <p>MUSEUMS</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide museum-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/museums/museum4.jpg); background-size:cover;">
              <a href="https://museum.gov.rw/index.php?id=68&L=956">
                <h3><u>Ethnographic Museum</u></h3>
              </a>
              <p class="description">

                A gift from Belgium’s King Badouin in the late 1980s, the Ethnographic Museum now houses one of Africa’s
                finest ethnographic collections.<br>


              </p>
            </div>

            <div class="swiper-slide museum-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/museums/museum3.jpg); background-size:cover;">
              <a href="https://museum.gov.rw/index.php?id=69&L=956">
                <h3><u>King's Palace</u></h3>
              </a>

              <p class="description">
                A reconstruction of the traditional royal residence, the King’s Palace is a beautifully-crafted thatched
                dwelling shaped like a beehive.
              </p>
            </div>

            <div class="swiper-slide museum-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/museums/museum2.jpeg);background-size:contain;">
              <a href="http://www.museum.gov.rw/index.php?id=2">
                <h3><u> Rwanda Art Museum</u></h3>
              </a>

              <p class="description">
                Formerly the Presidential Palace Museum, this new museum displays contemporary artworks from Rwanda as
                well as abroad.
              </p>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/igisabo2.jpg"><img src="assets/img/gallery/igisabo2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/igisabo3.jpg"><img src="assets/img/gallery/igisabo3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/imbehe1.jpg"><img src="assets/img/gallery/imbehe1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/ingobyi2.jfif"><img src="assets/img/gallery/ingobyi2.jfif" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/ingoma1.jpg"><img src="assets/img/gallery/ingoma1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/inkongoro.jpg"><img src="assets/img/gallery/inkongoro.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/inkongoro4.jpg"><img src="assets/img/gallery/inkongoro4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/inkongoro6.jpg"><img src="assets/img/gallery/inkongoro6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k1.jpg"><img src="assets/img/gallery/k1.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k11.jpg"><img src="assets/img/gallery/k11.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k12.jpg"><img src="assets/img/gallery/k12.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k3.jpg"><img src="assets/img/gallery/k3.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k4.jpg"><img src="assets/img/gallery/k4.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k17.jpg"><img src="assets/img/gallery/k17.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k2.jpg"><img src="assets/img/gallery/k2.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k15.jpg"><img src="assets/img/gallery/k15.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k5.jpg"><img src="assets/img/gallery/k5.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k19.jpg"><img src="assets/img/gallery/k19.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k22.jpg"><img src="assets/img/gallery/k22.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k23.jpg"><img src="assets/img/gallery/k23.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/k20.jpg"><img src="assets/img/gallery/k20.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="row gy-4">



          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>Kulture@rwanda.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+250788997530</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/submit.php" method="POST" role="form" class="php-email-form px-3 py-3">
          <div class="row rounded-2">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="text-center"><button type="submit" on>Send Message</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">

        <div class="footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex justify-content-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kulture & Heritage</span></strong>. All Rights Reserved
      </div>

    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  
  </script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>