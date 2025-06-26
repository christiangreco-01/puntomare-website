<?php
// Verifica se il parametro "parametro" è presente nella query string
if (isset($_GET['source'])) {
    $parametro = $_GET['source'];
    // Crea l'URL di destinazione con il parametro
    $url_destinazione = "https://europe-west3-firm-moonlight-363920.cloudfunctions.net/mktg-tracker?source=" . urlencode($parametro);
} else {
    // Se il parametro non è presente, puoi decidere cosa fare (es. non aggiungere nulla o usare un valore di default)
    $url_destinazione = "https://europe-west3-firm-moonlight-363920.cloudfunctions.net/mktg-tracker";
}

// Esegui il redirect
header("Location: $url_destinazione");
exit;
?>
