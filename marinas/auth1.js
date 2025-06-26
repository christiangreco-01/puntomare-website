// Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyDbQqvK73LfecAhVnbNWOI61B87BeFTbr0",
  authDomain: "firm-moonlight-363920.firebaseapp.com",
  databaseURL:
    "https://firm-moonlight-363920-default-rtdb.europe-west1.firebasedatabase.app",
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

// Funzione per ottenere name e name_slug
async function getMarinaDetails(marinaId) {
  try {
    const marinaRef = db.collection("marinas").doc(marinaId);
    const marinaDoc = await marinaRef.get();
    if (marinaDoc.exists) {
      const data = marinaDoc.data();
      return {
        name: data.name || "Nome non disponibile",
        name_slug: data.name_slug || "Slug non disponibile",
      };
    } else {
      console.error("Documento marina non trovato.");
      return null;
    }
  } catch (error) {
    console.error("Errore durante il recupero dei dettagli del marina:", error);
    return null;
  }
}

function isCheckboxChecked() {
  const checkbox = document.getElementById("terms-checkbox");
  if (!checkbox || !checkbox.checked) {
    alert("Devi accettare i termini e condizioni per procedere.");
    return false;
  }
  return true;
}

// Gestione dello stato di autenticazione
auth.onAuthStateChanged(async (user) => {
  if (user) {
    const docsContainer = document.getElementById("docs-container");
    const marinaId = user.uid; // Usa l'UID dell'utente autenticato

    try {
      // Recupera dettagli del marina
      const marinaDetails = await getMarinaDetails(marinaId);
      if (marinaDetails) {
        console.log("Dettagli del marina:", marinaDetails);
        document.getElementById(
          "marina-name"
        ).textContent = `${marinaDetails.name}`;
      }

      //recupera dettagli docs
      const marinaRef = db.collection("marinas").doc(marinaId);
      const docsSnapshot = await marinaRef
        .collection("docs")
        .orderBy("last_update", "desc")
        .get();

      docsContainer.innerHTML = ""; // Pulisci il contenitore

      if (!docsSnapshot.empty) {
        docsSnapshot.forEach((doc) => {
          const docId = doc.id;
          const data = doc.data();

          // Crea un elemento per ogni documento
          const docElement = document.createElement("div");
          docElement.className = "doc-item";
          docElement.innerHTML = `
         <div style="display: flex; flex-direction: column; width: 100%;     background-color: #ECEFEF;
    padding: 20px;
    border-radius: 15px;
    margin-top: 20px;">
  <h2>
  <input type="text"
           style="font-weight: bolder; font-size: smaller; border: 1px solid transparent;" 
           id="title-${docId}" 
           value="${data.title}" 
           disabled>
  </h2>
  <p style="display: flex; flex-direction: column;">
    <textarea id="content-${docId}" 
              rows="11" 
              disabled 
              maxlength="900000"
              style="border: 1px solid transparent;">${data.content}</textarea>
  </p>
  <div class="button-group">
    <button id="edit-${docId}" >Modifica</button>
    <button id="save-${docId}" style="display:none;" class="save-button">Salva</button>
    <button id="delete-${docId}" class="delete-button">Elimina</button>
  </div>
</div>

          `;

          docsContainer.appendChild(docElement);

          // Bottone Modifica
          const editButton = document.getElementById(`edit-${docId}`);
          const saveButton = document.getElementById(`save-${docId}`);
          const deleteButton = document.getElementById(`delete-${docId}`);
          const titleInput = document.getElementById(`title-${docId}`);
          const contentInput = document.getElementById(`content-${docId}`);

          editButton.addEventListener("click", () => {
            titleInput.disabled = false;
            contentInput.disabled = false;
            saveButton.style.display = "inline";
            editButton.style.display = "none";
          });

          saveButton.addEventListener("click", async () => {
            titleInput.disabled = true;
            contentInput.disabled = true;
            saveButton.style.display = "none";
            editButton.style.display = "inline";

            try {
              await marinaRef.collection("docs").doc(docId).update({
                title: titleInput.value,
                name_slug: marinaDetails.name_slug,
                content: contentInput.value,
                name: marinaDetails.name,
                last_update: new Date(),
                type: "text",
              });
              alert("Dati aggiornati con successo!");
            } catch (error) {
              console.error("Errore durante l'aggiornamento:", error);
              alert("Errore durante l'aggiornamento dei dati.");
            }
          });

          // Bottone Elimina
          deleteButton.addEventListener("click", async () => {
            const confirmation = confirm(
              "Sei sicuro di voler eliminare questa sezione?"
            );
            if (confirmation) {
              try {
                await marinaRef.collection("docs").doc(docId).delete();
                alert("Sezione eliminata con successo!");
                docElement.remove(); // Rimuove l'elemento HTML dalla pagina
              } catch (error) {
                console.error("Errore durante l'eliminazione:", error);
                alert("Errore durante l'eliminazione della sezione.");
              }
            }
          });
        });
      } else {
        docsContainer.innerHTML = "<p>Nessun documento trovato.</p>";
      }
    } catch (error) {
      console.error("Errore nel recupero dei documenti:", error);
      docsContainer.innerHTML = `<p>Errore nel recupero dei documenti: ${error.message}</p>`;
    }
  } else {
    if (window.location.pathname.endsWith("home.html")) {
      window.location.href = "login.html";
    }
  }
});

// Aggiungi nuova sezione
document.addEventListener("DOMContentLoaded", () => {
  const addButton = document.getElementById("add-reparto"); // Manteniamo l'ID "add-reparto"

  if (addButton) {
    addButton.addEventListener("click", async () => {
      const user = auth.currentUser;

      if (!user) {
        alert("Devi essere autenticato per aggiungere una sezione.");
        return;
      }

      const marinaId = user.uid;
      const marinaDetails = await getMarinaDetails(marinaId);

      // Creazione di un nuovo documento temporaneo
      const newDocId = `temp-${Date.now()}`;
      const newDocData = {
        title: "Nuova sezione",
        content: "Inserisci i dati e la descrizione per la nuova sezione",
        type: "text",
        name_slug: marinaDetails.name_slug,
        last_update: new Date(),
        name: marinaDetails.name,
      };

      // Aggiunta della nuova sezione al DOM (in cima)
      const docsContainer = document.getElementById("docs-container"); // Manteniamo l'ID "docs-container"
      const newDocElement = document.createElement("div");
      newDocElement.className = "doc-item";
      newDocElement.innerHTML = `
 <div style="display: flex; flex-direction: column; width: 100%;     background-color: #ECEFEF;
    padding: 20px;
    border-radius: 15px;
    margin-top: 20px;">
              <h2>
            <input type="text" id="title-${newDocId}" value="${newDocData.title}" style="font-weight: bolder; font-size: smaller;">
          </h2>
          <textarea id="content-${newDocId}" rows="11" maxlength="900000" style="border: 1px solid #ccc;">${newDocData.content}</textarea>
          <div class="button-group">
            <button id="save-${newDocId}" class="save-button">Salva</button>
            <button id="cancel-${newDocId}" class="cancel-button">Annulla</button>
          </div>
        </div>
      `;

      docsContainer.insertBefore(newDocElement, docsContainer.firstChild); // Inserisce in cima

      const titleInput = document.getElementById(`title-${newDocId}`);
      const contentInput = document.getElementById(`content-${newDocId}`);
      const saveButton = document.getElementById(`save-${newDocId}`);
      const cancelButton = document.getElementById(`cancel-${newDocId}`);

      // Abilitiamo gli input di default
      titleInput.disabled = false;
      contentInput.disabled = false;

      // Gestione del pulsante "Salva"
      saveButton.addEventListener("click", async () => {
        try {
          const marinaRef = db.collection("marinas").doc(marinaId);
          const newDocRef = marinaRef.collection("docs").doc(); // Creazione effettiva su Firestore

          await newDocRef.set({
            title: titleInput.value,
            content: contentInput.value,
            type: newDocData.type,
            name_slug: newDocData.name_slug,
            name: newDocData.name,
            last_update: new Date(),
          });
          alert("Nuova sezione salvata con successo!");
          location.reload(); // Ricarica la pagina per aggiornare la lista
        } catch (error) {
          console.error("Errore durante il salvataggio della sezione:", error);
          alert("Errore durante il salvataggio della sezione.");
        }
      });

      // Gestione del pulsante "Annulla"
      cancelButton.addEventListener("click", () => {
        newDocElement.remove(); // Rimuove il form dalla pagina
      });
    });
  }
});

// Login form handler
document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.getElementById("login-form");
  const logoutButton = document.getElementById("logout-button");

  if (loginForm) {
    loginForm.addEventListener("submit", async (e) => {
      e.preventDefault();
      // Controlla se la checkbox è selezionata
      if (!isCheckboxChecked()) return;
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;
      const errorMessage = document.getElementById('error-message');
      try {
        await auth.signInWithEmailAndPassword(email, password);
        window.location.href = "home.html";
      } catch (error) {
        if (error.code === 'auth/invalid-email') {
          errorMessage.textContent = 'L\'email inserita non è valida.';
      } else if (error.code === 'auth/user-not-found') {
          errorMessage.textContent = 'Non esiste un account associato a questa email.';
      } else if (error.code === 'auth/wrong-password') {
          errorMessage.textContent = 'La password inserita è errata.';
      } else {
          errorMessage.textContent = 'Si è verificato un errore durante il login. Riprova.';
      }

      // Mostra il messaggio di errore
      errorMessage.style.display = 'block';
      }
    });
  }

  if (logoutButton) {
    logoutButton.addEventListener("click", async () => {
      try {
        await auth.signOut();
        alert("Logged out avvenuto correttamente.");
        window.location.href = "login.html";
      } catch (error) {
        alert(error.message);
      }
    });
  }
});
