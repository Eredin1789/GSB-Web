// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.14.1/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.14.1/firebase-analytics.js";
import { getFirestore, collection, addDoc } from "https://www.gstatic.com/firebasejs/10.14.1/firebase-firestore.js"; 

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCBs7AxfYWDu388UfN58X87XwbjLWBqaL8",
  authDomain: "projet-gsb.firebaseapp.com",
  projectId: "projet-gsb",
  storageBucket: "projet-gsb.appspot.com",
  messagingSenderId: "273030084006",
  appId: "1:273030084006:web:0b6bf05a2862fea1cb0b67",
  measurementId: "G-57Y8R34STK"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);




// Initialiser Firestore
const db = getFirestore(app);

// Fonction pour ajouter des données à Firestore
async function addData() {
  try {
    // Remplace "products" par le nom de ta collection
    const docRef = await addDoc(collection(db, "utilisateur"), {
      Nom: "Ut Test",
      age: 100,
    });
    console.log("Document écrit avec l'ID : ", docRef.id);
  } catch (e) {
    console.error("Erreur lors de l'ajout du document : ", e);
  }
}

// Appeler la fonction pour tester
addData();