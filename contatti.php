<?php require('translator.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $page_translations['title'] ?></title>
    <!-- CSS FILES -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="css/style.css?v=1.0.0" />
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#084e84",
              secondary: "#f6c932",
              cluster: "#2596be",
              bgList: "#e1f2f9",
            },
          },
        },
      };
    </script>
  </head>
  <body>
    <main>
    <?php require('navbar.php'); ?>
      <!-- contatti -->

      <section class="contact-section section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-12">
              <form
                action=""
                method="post"
                class="custom-form contact-form"
                role="form"
                id="contactForm"
              >
                <h2 class="mb-4 pb-2"><?= $page_translations['contact_us'] ?></h2>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-floating">
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        placeholder="Nome"
                        required=""
                      />
                      <label for="floatingInput"><?= $page_translations['name'] ?></label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-floating">
                      <input
                        type="email"
                        name="email"
                        id="email"
                        pattern="[^ @]*@[^ @]*"
                        class="form-control"
                        placeholder="Email"
                        required=""
                      />
                      <label for="floatingInput">Email</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        id="message"
                        name="message"
                        placeholder="Scrivi un messaggio qui"
                      ></textarea>
                      <label for="floatingTextarea"><?= $page_translations['message'] ?> </label>
                    </div>
                    <button type="submit" class="form-control">
                    <?= $page_translations['send_mail'] ?> 
                    </button>
                  </div>
                </div>
              </form>
              <div id="responseMessage"></div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="contact-info mt-5">
                <div class="contact-info-item">
                  <div class="contact-info-body">
                    <strong><?= $page_translations['place'] ?> </strong>
                    <p class="mb-0">
                      <a href="mailto:info@punto-mare.it" class="contact-link">
                      <?= $page_translations['mail'] ?> 
                      </a>
                    </p>
                    <!-- <p class="mt-2 mb-1">
                                    <a href="tel: 010-020-0340" class="contact-link">
                                        (+39) 320 345 4269
                                    </a>
                                </p> -->
                  </div>
                  <div class="contact-info-footer">
                    <a href="#" class="contact-link"> <?= $page_translations['phone_number'] ?> </a>
                  </div>
                </div>
                <img src="images/WorldMap.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php require('footer.php'); ?>

    <!-- JAVASCRIPT FILES -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/script.js?v=1.0.0"></script>
  </body>
</html>
