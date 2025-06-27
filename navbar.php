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
                        <a class="nav-link click-scroll" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll active" href="#">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/faqs.html">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./marinas/login.html">Enti affiliati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/contatti.html">Contatti</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Lingua</a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li>
                                <a class="dropdown-item active" href="javascript:setLang('it')">
                                    <img src="https://flagcdn.com/w40/it.png" alt="Italiano"
                                        style="width: 20px; height: auto; margin-right: 8px" />
                                    Italiano
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:setLang('en')">
                                    <img src="https://flagcdn.com/w40/gb.png" alt="Inglese"
                                        style="width: 20px; height: auto; margin-right: 8px" />
                                    Inglese
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