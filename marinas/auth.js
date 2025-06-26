// auth.js

// Firebase configuration
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

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Firebase Auth instance
const auth = firebase.auth();
const db = firebase.firestore();

// Funzione di login
document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.getElementById("login-form");
  const errorMessage = document.getElementById("error-message");
  const termsCheckbox = document.getElementById("terms-checkbox");

  if (loginForm) {
    loginForm.addEventListener("submit", async (e) => {
      e.preventDefault();

      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;
      if (!termsCheckbox.checked) {
        errorMessage.textContent = "Devi accettare i termini e le condizioni per effettuare il login.";
        errorMessage.style.display = 'block';
        return;
      }
      try {
        // Effettua il loginù
        await auth.setPersistence(firebase.auth.Auth.Persistence.SESSION);
        await auth.signInWithEmailAndPassword(email, password);
        // Salva il timestamp della sessione
        localStorage.setItem("loginTimestamp", Date.now().toString());

        // Reindirizza alla home dopo il login
        window.location.href = "home.html";
      } catch (error) {
        // Gestione degli errori
        if (error.code === 'auth/invalid-email') {
          errorMessage.textContent = 'L\'email inserita non è valida.';
        } else if (error.code === 'auth/user-not-found') {
          errorMessage.textContent = 'Non esiste un account associato a questa email.';
        } else if (error.code === 'auth/wrong-password') {
          errorMessage.textContent = 'La password inserita è errata.';
        } else {
          errorMessage.textContent = 'Si è verificato un errore durante il login. Riprova.';
        }

        errorMessage.style.display = 'block';
      }
    });
  }

  // Gestione del logout
  const logoutButton = document.getElementById("logout-button");
  if (logoutButton) {
    logoutButton.addEventListener("click", async () => {
      try {
        // Effettua il logout
        await auth.signOut();
        // Reindirizza alla pagina di login
        window.location.href = "login.html";
      } catch (error) {
        console.error("Errore durante il logout:", error);
        alert("Si è verificato un errore durante il logout.");
      }
    });
  }
});

// Gestione dello stato di autenticazione
auth.onAuthStateChanged(user => {
  const loginPage = document.getElementById("login-page");
  const homePage = document.getElementById("home-page");

  if (user) {
    // Se l'utente è autenticato, reindirizzalo alla home
    if (window.location.pathname.endsWith("login.html")) {
      window.location.href = "home.html";
    }
  } else {
    // Se non è autenticato, mostra la pagina di login
    if (window.location.pathname.endsWith("home.html")) {
      window.location.href = "login.html";
    }
  }
});
