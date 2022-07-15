<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyB9AYJJWAgQUmhHbxb5bhLxg8DwDyS99u4",
    authDomain: "web-application-d3d75.firebaseapp.com",
    projectId: "web-application-d3d75",
    storageBucket: "web-application-d3d75.appspot.com",
    messagingSenderId: "321311080260",
    appId: "1:321311080260:web:eacbfb13f143c57b2ea111",
    measurementId: "G-FG9JNR3ZQF"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>