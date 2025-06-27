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
                                        Un gruppo di <strong>giovani pugliesi</strong> uniti dalla passione per il mare e dal desiderio di
                                        valorizzare la nostra terra. Cresciuti tra i paesaggi mozzafiato e le acque cristalline della
                                        Puglia, abbiamo deciso di creare uno strumento che semplificasse l’esperienza del
                                        <strong>turista</strong>, <strong>migliorando la sua vacanza al mare</strong> alla scoperta dei
                                        tesori nascosti.
                                    </p>
                                    <p class="justify-text">
                                        Così è nata PuntoMare: un’app mobile che, grazie a un algoritmo proprietario, offre
                                        <strong>indicazioni precise sullo stato del mare</strong> e <strong>previsioni dedicate alla
                                            balneazione</strong>, permettendo di scegliere ogni giorno il luogo perfetto per godersi il mare
                                        in totale sicurezza.
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
                                        PuntoMare è molto più di una semplice guida:<strong> è un’esperienza completa per chi ama il
                                            mare</strong> e desidera viverlo al meglio. Oltre alle previsioni dettagliate per la
                                        balneazione, l’app permette di scoprire e prenotare <strong>esperienze uniche, ristoranti di qualità
                                            e lidi attrezzati in pochi click</strong>.
                                    </p>
                                    <p class="justify-text">
                                        Già attiva in <strong>tutta Italia</strong>, PuntoMare mantiene la stessa passione e attenzione ai
                                        dettagli che hanno reso l’esperienza in Puglia davvero indimenticabile. Con noi puoi esplorare le
                                        migliori spiagge e località del Bel Paese, <strong>per rendere la tua vacanza al mare un’esperienza
                                            unica</strong>.
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
            <h3 class="mb-4 fw-bold" style="color: #084e84;">Il nostro team</h3>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="images/team.jpg" class="card-img-top rounded-top" alt="Nome Cognome">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Marco Greco</h5>
                        <p class="card-text text-muted">CEO / data engineer</p>
                        <p class="small text-secondary">Breve descrizione o motto personale.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="images/team.jpg" class="card-img-top rounded-top" alt="Nome Cognome">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Emiliano Carluccio</h5>
                        <p class="card-text text-muted">CEO / Front-end engineer</p>
                        <p class="small text-secondary">Appassionato di tecnologia e mare, coordina lo sviluppo digitale.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="images/team.jpg" class="card-img-top rounded-top" alt="Nome Cognome">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Camilla Blasi</h5>
                        <p class="card-text text-muted">CMO / Marketing Specialist</p>
                        <p class="small text-secondary">Sempre in movimento tra innovazione e natura.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="images/team.jpg" class="card-img-top rounded-top" alt="Nome Cognome">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Camilla Blasi</h5>
                        <p class="card-text text-muted">CMO / Marketing Specialist</p>
                        <p class="small text-secondary">Sempre in movimento tra innovazione e natura.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="images/team.jpg" class="card-img-top rounded-top" alt="Nome Cognome">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Camilla Blasi</h5>
                        <p class="card-text text-muted">CMO / Marketing Specialist</p>
                        <p class="small text-secondary">Sempre in movimento tra innovazione e natura.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-logo-section">
                    <div class="footer-logo">
                        <img src="../images/logo.svg" alt="Logo PuntoMare" />
                    </div>
                    <p class="footer-description">
                        L’app che rivoluziona il modo di vivere le vacanze al mare
                    </p>
                </div>

                <div class="footer-links">
                    <h4>Link Utili</h4>
                    <ul>
                        <li>
                            <a href="https://www.punto-mare.it/">Home</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4>Contattaci</h4>
                    <ul>
                        <li class="footer-contact-item">
                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <a href="mailto:info@punto-mare.it">info@punto-mare.it</a>
                        </li>
                        <li class="footer-contact-item">
                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                </path>
                            </svg>
                            <a href="tel:+393203454269">+39 3203454269</a>
                        </li>
                    </ul>

                    <div class="footer-social">
                        <h5>Seguici</h5>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/puntomare.app/" aria-label="Instagram">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=100094087636213" aria-label="Facebook">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/company/puntomare/posts/?feedView=all"
                                aria-label="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 MNSIMU S.R.L.S. - P.IVA 05283090750</p>
            </div>
        </div>
    </footer>

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