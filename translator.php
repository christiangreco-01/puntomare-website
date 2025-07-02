<?php
// translator.php
$lang = isset($_GET['lang']) ? $_GET['lang'] : (isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'it');
$supported_langs = ['it', 'en'];
if (!in_array($lang, $supported_langs)) {
    $lang = 'it';
}
setcookie('lang', $lang, time() + 3600, "/");

$page = basename($_SERVER['PHP_SELF'], '.php');
$json_path = $_SERVER['DOCUMENT_ROOT'] . "/nuovo_puntomare/{$lang}.json";

$translations = [];
if (file_exists($json_path)) {
    $json_content = file_get_contents($json_path);
    if ($json_content !== false) {
        $translations = json_decode($json_content, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo "Errore nella decodifica del JSON: " . json_last_error_msg();
            $translations = [];
        }
    }
}

// Rendili globali
$page_translations = $translations[$page] ?? [];

// Recupera le traduzioni per la pagina corrente
$page_translations = $translations[$page] ?? [
    'title' => 'Titolo predefinito',
    'description' => 'Descrizione predefinita'
];

?>
<!-- 
// // Rileva la pagina corrente (ad esempio 'home' o 'about')
// $page = basename($_SERVER['PHP_SELF'], '.php'); // ottieni il nome del file senza l'estensione

// // Carica il file JSON della lingua tramite URL
// $lang_url = "https://www.punto-mare.it/nuovo_puntomare/$lang.json";

// // Usa file_get_contents per ottenere il contenuto JSON dal file remoto
// $response = file_get_contents($lang_url);
// if ($response === false) {
//     echo "Errore nel caricare il file JSON.";
//     $translations = [];
// } else {
//     $translations = json_decode($response, true);
//     if (json_last_error() !== JSON_ERROR_NONE) {
//         echo "Errore nel decodificare il JSON: " . json_last_error_msg();
//         $translations = [];
//     }
// }

// // Imposta un cookie per ricordare la lingua
// setcookie('lang', $lang, time() + 3600, "/");

// // Recupera i contenuti per la pagina corrente
// $page_translations = $translations[$page] ?? ['title' => 'Titolo predefinito', 'description' => 'Descrizione predefinita']; -->
