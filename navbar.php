<?php require('translator.php'); ?>

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <img src="images/logo.svg" class="navbar-brand-image img-fluid" alt="PuntoMare" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/"><?= $page_translations['home'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll active" href="#"><?= $page_translations['chi_siamo'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/faqs.html"><?= $page_translations['FAQs'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./marinas/login.html"><?= $page_translations['enti_affiliati'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/contatti.html"><?= $page_translations['contatti'] ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><?= $page_translations['language'] ?></a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li>
                                <a class="dropdown-item active" href="javascript:setLang('it')">
                                    <img src="https://flagcdn.com/w40/it.png" alt="Italiano"
                                        style="width: 20px; height: auto; margin-right: 8px" />
                                        <?= $page_translations['Italian'] ?>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:setLang('en')">
                                    <img src="https://flagcdn.com/w40/gb.png" alt="Inglese"
                                        style="width: 20px; height: auto; margin-right: 8px" />
                                        <?= $page_translations['English'] ?>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        function setLang(language) {
            // Imposta il cookie con il nome 'lang' e il valore della lingua
            document.cookie = "lang=" + language + "; path=/; max-age=" + 60 * 60 * 24 * 30; // Imposta il cookie per 30 giorni

            // Ricarica la pagina per applicare la lingua selezionata
            location.reload();
        }
    </script>
</header>