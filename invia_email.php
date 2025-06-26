<?php
$responseMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "info@punto-mare.it";
    $subject = "Nuovo messaggio dal sito PuntoMare";
    $emailContent = "Nome: $name\nEmail: $email\n\nMessaggio:\n$message\n";
    $headers = "Da sito PuntoMare: $email";

    // Invia l'email e aggiorna il messaggio di risposta
    if (mail($to, $subject, $emailContent, $headers)) {
        $responseMessage = "Messaggio inviato con successo!";
    } else {
        $responseMessage = "Errore nell'invio del messaggio. Riprova più tardi.";
    }

    // Restituisci il messaggio di risposta come JSON
    echo json_encode(['message' => $responseMessage]);
}
?>
