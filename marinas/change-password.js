// Inizializzazione di Firebase
const firebaseConfig = {
  apiKey: "AIzaSyDbQqvK73LfecAhVnbNWOI61B87BeFTbr0",
  authDomain: "firm-moonlight-363920.firebaseapp.com",
  databaseURL: "https://firm-moonlight-363920-default-rtdb.europe-west1.firebasedatabase.app",
  projectId: "firm-moonlight-363920",
  storageBucket: "firm-moonlight-363920.appspot.com",
  messagingSenderId: "27973119375",
  appId: "1:27973119375:web:3ae485aeebf56eb5d9affa",
  measurementId: "G-XEK6M7PQTN",
};

// Inizializza Firebase
firebase.initializeApp(firebaseConfig);
const auth = firebase.auth();

// Riferimenti agli elementi HTML
const changePasswordForm = document.getElementById('change-password-form');
const successMessage = document.getElementById('success-message');
const newPasswordInput = document.getElementById('new-password');
const confirmPasswordInput = document.getElementById('confirm-password');
const errorMessage = document.getElementById('error-message');

// Ottenere l'OOB code e il mode dalla URL
const urlParams = new URLSearchParams(window.location.search);
const oobCode = urlParams.get('oobCode');
const mode = urlParams.get('mode'); // Verifica se è reset della password o verifica email

// Verifica che l'OOB code e il mode siano presenti
if (!oobCode || !mode) {
  errorMessage.textContent = "Errore: il codice di reset o di verifica non è valido.";
  errorMessage.style.display = 'block';
  changePasswordForm.style.display = 'none'; // Nascondi il modulo
  successMessage.style.display = 'none'; // Nascondi il messaggio di successo
}

// Gestione del comportamento per la verifica dell'email
if (mode === 'verifyEmail') {
  auth.applyActionCode(oobCode)
    .then(() => {
      // Successo: email verificata
      successMessage.style.display = 'block'; // Mostra il messaggio di successo
      changePasswordForm.style.display = 'none'; // Nascondi il modulo per il cambio password
    })
    .catch((error) => {
      // Gestisci errori
      const errorCode = error.code;
      const errorMessageText = error.message;
      errorMessage.textContent = `Errore: ${errorMessageText}`;
      errorMessage.style.display = 'block';
    });
}

// Gestione invio del modulo per cambiare la password
if (mode === 'resetPassword') {
  // Mostra il modulo per il cambio della password
  changePasswordForm.style.display = 'block';
  
  changePasswordForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const newPassword = newPasswordInput.value;
    const confirmPassword = confirmPasswordInput.value;

    // Controlla che le password corrispondano
    if (newPassword !== confirmPassword) {
      errorMessage.textContent = "Le password non corrispondono.";
      errorMessage.style.display = 'block';
      return;
    }

    // Cambia la password utilizzando l'OOB code
    auth.confirmPasswordReset(oobCode, newPassword)
      .then(() => {
        // Successo: password cambiata
        alert('La tua password è stata cambiata con successo! Torna al login');
        window.location.href = '../index.html'; // Reindirizza alla pagina di login
      })
      .catch((error) => {
        // Gestisci errori
        const errorCode = error.code;
        const errorMessageText = error.message;
        errorMessage.textContent = `Errore: ${errorMessageText}`;
        errorMessage.style.display = 'block';
      });
  });
}
