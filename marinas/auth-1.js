firebase.auth().setPersistence(firebase.auth.Auth.Persistence.SESSION)
  .then(() => {
    firebase.auth().onAuthStateChanged((user) => {
      if (user) {
        window.location.href = "home.html";
      }
    });

    // Gestione login
    const formLogin = document.getElementById("login-form");
    formLogin.addEventListener("submit", (e) => {
      e.preventDefault();

      const email = formLogin["login-email"].value;
      const password = formLogin["login-password"].value;

      firebase.auth().signInWithEmailAndPassword(email, password)
        .then((cred) => {
          console.log("Login avvenuto con:", cred.user.email);
          formLogin.reset();
          window.location.href = "home.html";
        })
        .catch((error) => {
          console.error("Errore nel login:", error.message);
          alert("Login fallito: " + error.message);
        });
    });
  })
  .catch((error) => {
    console.error("Errore nella configurazione della sessione:", error.message);
  });


