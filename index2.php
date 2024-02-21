<?php
include_once ("utils.class.php");
include_once ("produit.class.php");
$type_produits=Utils::select_all('type_produits');
$type_reservation=Utils::select_all('type_reservation');
$commentaire=Utils::select_all('message');

//code validation de reservation

// extract($_GET);
if (isset($_GET['resultas'])) {
  $resultas=$_GET['resultas'];
  $nom= $_GET['nom'];
  $prenom= $_GET['prenom'];
switch ($resultas) {
  case "erreur":
        echo "<script>alert('Votre Reservation Non Effectuer');</script>";
      break;
  case "reussie":
        echo "<script>alert('Votre Reservation Bien Effectuer Mr(Mme).$nom $prenom');</script>";
      break;
  case "message_reussie":
        echo "<script>alert('Votre Message Bien Effectuer Mr(Mme).$nom $prenom');</script>";
      break;
  case "message_erreur":
        echo "<script>alert('Votre Message Non Effectuer');</script>";
      break;
}
}
//fin code validation de reservation 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Noma</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/monStyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>0625683588</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Lun-Dim: 11AM - 00PM</span></i>
      </div>

      <!-- <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div> -->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Restaurantly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">à Propos</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#events">Événements</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galerie</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Reservation Table</a>
      <span id="panier"></span>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bienvenue à <span>Restaurantly</span></h1>
          <h2>Offrir de la bonne nourriture depuis plus de 18 ans!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Reservation Table</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
    
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Restaurantly: Redéfinir l'expérience culinaire</h3>
            <!-- <p class="fst-italic">
              Situé au cœur de Copenhague, Restaurantly est bien plus qu'un simple restaurant. C'est une expérience gastronomique inoubliable qui repousse les limites de la cuisine traditionnelle.
            </p> -->
            <ul>
              <li><i class="bi bi-check-circle"></i> Excellence culinaire: Restaurantly est reconnu pour son engagement envers l'excellence, en utilisant uniquement les ingrédients les plus frais et les plus authentiques.</li>
              <li><i class="bi bi-check-circle"></i> Innovation: Avec une approche culinaire innovante, Restaurantly redéfinit ce que signifie vraiment savourer un repas, en mélangeant les saveurs nordiques avec des techniques modernes et des présentations artistiques.</li>
              <li><i class="bi bi-check-circle"></i> Engagement envers la durabilité: Restaurantly est fermement engagé envers la durabilité environnementale et sociale, travaillant en étroite collaboration avec les producteurs locaux pour soutenir les pratiques agricoles durables.</li>
            </ul>
            <p>
              Reconnu comme l'un des meilleurs restaurants du monde, Restaurantly vous invite à découvrir une aventure culinaire unique, où chaque plat raconte une histoire et chaque bouchée est une révélation.
            </p>
          </div>
        </div>
    
      </div>
    </section>
    <!-- End About Section -->
      
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php foreach($type_produits as $v){ ?>
              <li data-filter=".filter-<?=$v['type']?>"><?=$v['type']?></li>
              <?php }?>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        <?php foreach($type_produits as $v){ ;
              $produit=Produit::selectElement($v['type'])?>
            <?php foreach($produit as $p){ ?>
          <div class="col-lg-6 menu-item filter-<?=$v['type']?>">
            <img src="assets/img/menu/<?= $p['image'] ?>" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?= $p['libelle'] ?></a><span><?= $p['prix'] ?> DHs</span>
            </div>
            <div class="menu-ingredients">
            <?= $p['description'] ?>
            <button class="btn mycolor" onclick="add(<?= $p['id'] ?>)">ajouter</button>
            </div>
            <?php }?>
          </div> 
            <?php }?>
      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Evenement</h2>
          <p>Organizer Votre Evenement Dans Notre Restaurant</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
          <?php foreach($type_reservation as $reservation){ ?>
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="<?= $reservation['image'] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3><?= $reservation['type'] ?></h3>
                  <div class="price">
                    <p><span><?= $reservation['prix'] ?>DHs</span></p>
                  </div>
                  <p class="fst-italic"><?= $reservation['description'] ?></p>
                </div>
              </div>
            </div>
            <?php }?>
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- =======reservation Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Reservation Table</p>
        </div>

        <form action="reservation.php" method="post"  >
          <div class="row ">
            <div class="col-lg-4 col-md-6 form-group  mt- mt-md-0">
              <input type="email" class="form-control " name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group dt">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date Reservation" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-">
              <input type="number" class="form-control" name="num_table" id="time" placeholder="Nombre Table" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="num_personne" id="people" placeholder="Nombre Personne" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <select name="type_reservation" id="" class="form-select">
                <option value="" disabled selected>Type Reservation</option>
                <?php 
                  foreach ($type_reservation as $value) { ?>
                     <option value="<?=$value["id"]?>"><?=$value['type']?></option>
               <?php } ?>
              </select>
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center "><button type="submit" class="book-a-table-btn mt-5 bt">Reservation Table</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= commentaire Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Commentaire</h2>
          <p>Ce qu'ils disent de nous</p>
        </div>
               
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

           <?php 
                  foreach ($commentaire as $value) { ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?=$value["commentaire"]?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">

                <h3><?= $nom." ".$prenom ?></h3>
                <!-- <h4>Ceo &amp; Founder</h4> -->
              </div>
            </div>
            <?php } ?>
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Galerie</h2>
          <p>Quelques photos De Notre Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contacter-Nous</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2249.354326862239!2d12.607905876170317!3d55.68282727305843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652533b679080a5%3A0x42eaecc5eb37e114!2sNoma!5e0!3m2!1sfr!2sma!4v1708045668708!5m2!1sfr!2sma"  frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Heure Ouverture:</h4>
                <p>
                  Lundi-Dimache:<br>
                  11:00 AM - 00:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Noma@Copenhagen.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Tele:</h4>
                <p>+212 625683588</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="message.php" method="post">
              <div class="row">
                <div class="col-lg-6 col-md-6 form-group mt-3 ">
                  <input type="email" class="form-control" name="email_commentaire" id="email" placeholder="Email" required>
                </div>
                <div class="col-lg-4 col-md-6 mt-3 form-group">
                <select name="type_message" id="" class="form-select">
                  <option value="Commentaire">Commentaire</option>
                  <option value="Reclamation">Reclamation</option>
                </select>
              </div>
              </div>
              <div class="form-group mt-3">
            <textarea class="form-control" name="message_commentaire" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
              <!-- <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" ></textarea>
              </div> -->
              <div class="text-center"><button type="submit" class="py-2 mt-5 bt">Envoyer Message</button></div>
              <!-- <div class="text-center "><button type="submit" class="book-a-table-btn mt-5 bt">Reservation Table</button></div> -->
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Restaurantly</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    function add(productId) {

alert("sakut cv");
$.ajax({
    type: 'POST',
    url: 'panier.php', // URL du script côté serveur pour ajouter au panier
    data: { productId: productId },
    success: function(response) {
        // Mettre à jour l'interface utilisateur ou afficher un message de confirmation
        $("#panier").html(response); 
    },
    error: function() {
        // Gérer les erreurs
        alert('Une erreur est survenue. Veuillez réessayer.');
    }
});
};
  </script>

</body>

</html>