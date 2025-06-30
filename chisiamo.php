<?php require('translator.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PuntoMare - Il mare a portata di click!</title>
    <!-- CSS FILES -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet" />
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
    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            font-size: 1rem;
            line-height: 1.75;
            color: #333;
            background-color: #fdfdfd;
        }

        .justify-text {
            text-align: justify;
        }
    </style>
</head>

<body>
    <main>
        <?php require('navbar.php'); ?>

        <!-- chi siamo -->

        <section class="about-section pt-[40px]" id="section_2">
            <div class="justify-content-center text-center" style="background-color: #084e84; padding-block: 80px; display: flex;">
                <div class="col-lg-8">
                    <h2 class="display-4 fw-bold text-white"><?= $page_translations['title'] ?></h2>
                    <p class="lead" style="color: #cacaca;"><?= $page_translations['description'] ?></p>
                    <!-- <div class="mx-auto mt-3"
                                style="width: 100px; height: 4px; background: linear-gradient(90deg, #084e84, #2596be); border-radius: 4px;">
                            </div> -->
                </div>
            </div>
            <div class="container">
                <div class="row">



                    <section class="about-section section-padding" id="section_2">
                        <div class="container">
                            <div class="row align-items-center">


                                <!-- Colonna immagine -->
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <img src="images/team.JPG" alt="team" class="img-fluid rounded-4 shadow-lg" />
                                </div>

                                <!-- Colonna testo -->
                                <div class="col-lg-6">
                                    <p class="justify-text">
                                    <?= $page_translations['presentation_text1'] ?>
                                        
                                    </p>
                                    <p class="justify-text">
                                    <?= $page_translations['presentation_text2'] ?>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <!-- </section> -->
                        <div class="container">
                            <div class="row align-items-center">

                                <!-- Colonna testo (sinistra su desktop) -->
                                <div class="col-lg-6 order-lg-1 order-2">
                                    <p class="justify-text">
                                    <?= $page_translations['presentation_text3'] ?>
                                    </p>
                                    <p class="justify-text">
                                    <?= $page_translations['presentation_text4'] ?>
                                    </p>
                                </div>

                                <!-- Colonna immagine (destra su desktop) -->
                                <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                                    <img src="images/spiagge-bianche.JPG" alt="team" class="img-fluid rounded-4 shadow-lg" />
                                </div>

                            </div>
                        </div>
                    </section>


                </div>
            </div>

        </section>
        <div class="row justify-content-center">

    </main>
    <div class="container my-5">
        <div class="row justify-content-center text-center">
            <h3 class="mb-4 fw-bold" style="color: #084e84;"><?= $page_translations['title_team_part'] ?></h3>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="images/team.jpg" class="card-img-top rounded-top" alt="Nome Cognome">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $page_translations['team_member1_name'] ?></h5>
                        <p class="card-text text-muted"><?= $page_translations['team_member1_role'] ?></p>
                        <p class="small text-secondary"><?= $page_translations['team_member1_description'] ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="images/team.jpg" class="card-img-top rounded-top" alt="Nome Cognome">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $page_translations['team_member2_name'] ?></h5>
                        <p class="card-text text-muted"><?= $page_translations['team_member2_role'] ?></p>
                        <p class="small text-secondary"><?= $page_translations['team_member2_description'] ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="images/team.jpg" class="card-img-top rounded-top" alt="Nome Cognome">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $page_translations['team_member3_name'] ?></h5>
                        <p class="card-text text-muted"><?= $page_translations['team_member3_role'] ?></p>
                        <p class="small text-secondary"><?= $page_translations['team_member3_description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="images/team.jpg" class="card-img-top rounded-top" alt="Nome Cognome">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $page_translations['team_member4_name'] ?></h5>
                        <p class="card-text text-muted"><?= $page_translations['team_member4_role'] ?></p>
                        <p class="small text-secondary"><?= $page_translations['team_member4_description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="images/team.jpg" class="card-img-top rounded-top" alt="Nome Cognome">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $page_translations['team_member5_name'] ?></h5>
                        <p class="card-text text-muted"><?= $page_translations['team_member5_role'] ?></p>
                        <p class="small text-secondary"><?= $page_translations['team_member5_description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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