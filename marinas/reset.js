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
const resetForm = document.getElementById('reset-form');
const emailInput = document.getElementById('email');
const errorMessage = document.getElementById('error-message');

// Gestione invio modulo per il reset della password
resetForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const email = emailInput.value;

  // Esegui la richiesta per inviare il link di reset della password
  auth.sendPasswordResetEmail(email)
      .then(() => {
          // Successo: messaggio di conferma
          alert('Un link per il reset della password è stato inviato alla tua email.');
      })
      .catch((error) => {
          // Gestisci errori
          const errorCode = error.code;
          const errorMessageText = error.message;
          errorMessage.textContent = `Errore: ${errorMessageText}`;
          errorMessage.style.display = 'block';
      });
});
