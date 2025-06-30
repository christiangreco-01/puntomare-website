
<?php require('translator.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title><?= $page_translations['title'] ?></title>
      <!-- CSS FILES -->
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
    </head>
  </head>
  <body>
    <main>
    <?php require('navbar.php'); ?>

      <!-- faqs -->

      <section class="events-section section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h2 class="mb-lg-3"><?= $page_translations['title'] ?></h2>
                </div>
                <div id="accordion">
                    <div class="card mb-3">
                        <div class="card-header justify-text" id="headingOne">
                            <button class="btn w-100 justify-text border-0 no-border-hover" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h6 class="mb-0"><?= $page_translations['gratuita'] ?>
                                </h6>
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                            <?= $page_translations['gratuita_risp'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header justify-text" id="headingTwo">
                            <button class="btn w-100 justify-text border-0 no-border-hover" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <h6 class="mb-0"><?= $page_translations['lingue'] ?>
                                </h6>
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordion">
                            <div class="card-body">
                            <?= $page_translations['lingue_risp'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header justify-text" id="headingThree">
                            <button class="btn w-100 justify-text border-0 no-border-hover"" "
                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                                aria-controls="collapseThree">
                                <h6 class="mb-0"><?= $page_translations['registrazione'] ?>
                                </h6>
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                            <?= $page_translations['registrazione_risp'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header justify-text" id="headingFour">
                            <button class="btn w-100 justify-text border-0 no-border-hover" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <h6 class="mb-0"><?= $page_translations['previsioni'] ?></h6>
                            </button>
                        </div>
                        
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                            <?= $page_translations['previsioni_risp'] ?>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card mb-3">
                        <div class="card-header justify-text" id="headingFive">
                            <button class="btn w-100 justify-text border-0 no-border-hover" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                <h6 class="mb-0"><?= $page_translations['chatbot'] ?>
                                </h6>
                            </button>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-parent="#accordion">
                            <div class="card-body">
                            <?= $page_translations['chatbot_risp'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header justify-text" id="headingSix">
                            <button class="btn w-100 justify-text border-0 no-border-hover" data-toggle="collapse"
                                data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                <h6 class="mb-0"><?= $page_translations['pubblicita'] ?>
                                </h6>
                            </button>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                            data-parent="#accordion">
                            <div class="card-body">
                            <?= $page_translations['pubblicita_risp'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header justify-text" id="headingSeven">
                            <button class="btn w-100 justify-text border-0 no-border-hover" data-toggle="collapse"
                                data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                <h6 class="mb-0"><?= $page_translations['attivita'] ?>
                                </h6>
                            </button>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                            data-parent="#accordion">
                            <div class="card-body">
                            <?= $page_translations['attivita_risp'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header justify-text" id="headingEight">
                            <button class="btn w-100 justify-text border-0 no-border-hover" data-toggle="collapse"
                                data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                <h6 class="mb-0"><?= $page_translations['segnalazione'] ?>
                                </h6>
                            </button>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                            data-parent="#accordion">
                            <div class="card-body">
                            <?= $page_translations['segnalazione_risp'] ?>
                            </div>
                        </div>
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
