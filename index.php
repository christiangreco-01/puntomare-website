<?php require('translator.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $page_translations['title'] ?></title>
    <!-- CSS FILES -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="css/style.css?v=1.0.0">
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
        <section class="hero-section d-flex justify-content-center align-items-center">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <h1 class="text-white mb-4"><?= $page_translations['welcome'] ?></h2>
                            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                                <span class="cd-words-wrapper">
                                    <b class="is-visible"><?= $page_translations['previsioni'] ?></b>
                                    <b><?= $page_translations['spiagge'] ?></b>
                                    <b><?= $page_translations['lidi'] ?></b>
                                    <b><?= $page_translations['ristoranti'] ?></b>
                                    <b><?= $page_translations['esperienze'] ?></b>
                                    <b><?= $page_translations['noleggi'] ?></b>
                                    <b><?= $page_translations['guida'] ?></b>
                                </span>
                                <br>
                                <span><?= $page_translations['slogan'] ?></span>
                            </h1>
                            <div class="custom-btn-group">
                                <a href="#download_section" class="btn custom-btn smoothscroll me-3">Scarica l'app</a>
                            </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/o3tiv5gJ3sU?si=LqeHLd2E5_Huq2dT"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </section>
        
        
        <section class="membership-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                        <h2><?= $page_translations['intro'] ?></h2>
                    </div>
                    <div class="col-lg-4 col-12 mb-3 mb-lg-0 text-center">
                        <h4 class="mb-4 pb-lg-2"><?= $page_translations['prev2'] ?></h4>
                        <div class="table-responsive">
                            <img src="images/f1.svg" class="custom-block-image img-fluid">
                        </div>
                        <p class="mb-0"><?= $page_translations['istruzioni'] ?>
                        </p>
                    </div>
                    <div class="col-lg-4 col-12 mb-3 mb-lg-0 text-center">
                        <h4 class="mb-4 pb-lg-2"><?= $page_translations['servizi'] ?>
                        </h4>
                        <div class="table-responsive">
                            <img src="images/f2.svg" class="custom-block-image img-fluid">
                        </div>
                        <p class="mb-0"><?= $page_translations['scopri'] ?> 
                        </p>
                    </div>
                    <div class="col-lg-4 col-12 mb-3 mb-lg-0 text-center">
                        <h4 class="mb-4 pb-lg-2"><?= $page_translations['guida'] ?></h4>
                        <div class="table-responsive">
                            <img src="images/f3.svg" class="custom-block-image img-fluid">
                        </div>
                        <p class="mb-0"><?= $page_translations['chiedi'] ?></p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="section-bg-image">
            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)"
                    d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                    stroke-width="0"></path>
            </svg>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="d-flex section-bg-image-block flex-column">
                            <h2 class="mb-lg-3"><?= $page_translations['download'] ?></h2>
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="images/qr.png" class="custom-block-image img-fluid qr align-self-center">
                                </div>
                                <div class="d-flex flex-column justify-content-center align-items-center ">
                                    <a href="https://www.punto-mare.it/download.php?source=sito-web">
                                        <img src="images/appple-store.jpg"
                                            class="custom-block-image img-fluid align-self-center mb-3">
                                    </a>
                                    <a href="https://www.punto-mare.it/download.php?source=sito-web">
                                        <img src="images/google-play.jpg"
                                            class="custom-block-image img-fluid align-self-center">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)"
                    d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                    stroke-width="0"></path>
            </svg> -->
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
    <script>
        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Previene il ricaricamento della pagina
            // Crea un oggetto FormData con i dati del form
            const formData = new FormData(this);
            // Esegui la richiesta AJAX
            fetch('invia_email.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    // Visualizza il messaggio di risposta
                    document.getElementById('responseMessage').innerText = data.message;
                })
                .catch(error => {
                    console.error('Errore:', error);
                    document.getElementById('responseMessage').innerText = "C'è stato un errore nell'invio del messaggio.";
                });
        });
    </script>
</body>
</html>