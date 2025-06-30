<?php
// Determina la lingua (parametro GET o cookie)
$lang = isset($_GET['lang']) ? $_GET['lang'] : (isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'it');

// Assicura che sia una lingua supportata
$supported_langs = ['it', 'en'];
if (!in_array($lang, $supported_langs)) {
    $lang = 'it';
}

// Rileva la pagina corrente (ad esempio 'home' o 'about')
$page = basename($_SERVER['PHP_SELF'], '.php'); // ottieni il nome del file senza l'estensione

// Carica il file JSON della lingua tramite URL
$lang_url = "https://www.punto-mare.it/nuovo_puntomare/$lang.json";

// Usa file_get_contents per ottenere il contenuto JSON dal file remoto
$response = file_get_contents($lang_url);
if ($response === false) {
    echo "Errore nel caricare il file JSON.";
    $translations = [];
} else {
    $translations = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "Errore nel decodificare il JSON: " . json_last_error_msg();
        $translations = [];
    }
}

// Imposta un cookie per ricordare la lingua
setcookie('lang', $lang, time() + 3600, "/");

// Recupera i contenuti per la pagina corrente
$page_translations = $translations[$page] ?? ['title' => 'Titolo predefinito', 'description' => 'Descrizione predefinita'];
