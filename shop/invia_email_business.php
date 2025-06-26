<?php
// Inserisci l’indirizzo a cui vuoi ricevere le email
$to = "info@punto-mare.it";
// Verifica che i campi siano presenti
if (
    isset($_POST['FirstName'], $_POST['LastName'], $_POST['Email'], $_POST['Message'])
) {
    $firstName = htmlspecialchars(trim($_POST['FirstName']));
    $lastName = htmlspecialchars(trim($_POST['LastName']));
    $email = htmlspecialchars(trim($_POST['Email']));
    $attivita = isset($_POST['Attivita']) ? htmlspecialchars(trim($_POST['Attivita'])) : 'Non specificato';
    $message = htmlspecialchars(trim($_POST['Message']));

    $subject = "Richiesta PuntoMare Business da $firstName $lastName";

    $body = "Hai ricevuto una nuova richiesta tramite il modulo Business:\n\n";
    $body .= "Nome: $firstName\n";
    $body .= "Cognome: $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Attività: $attivita\n";
    $body .= "Messaggio:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email inviata con successo.";
    } else {
        echo "Errore nell'invio dell'email.";
    }
} else {
    echo "Dati mancanti. Compila tutti i campi obbligatori.";
}
?>
