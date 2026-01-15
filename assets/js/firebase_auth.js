// Firebase Authentication Configuration
// This file handles Google Login and Register functionality

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyD6UGlMNla_lBFCTc9rHdO7xLulxMVpb6Y",
  authDomain: "decor-website.firebaseapp.com",
  projectId: "decor-website",
  storageBucket: "decor-website.appspot.com",
  messagingSenderId: "127088212973",
  appId: "1:127088212973:web:af78c68c9b841e213145e4",
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Google Auth Provider with force account selection
const provider = new firebase.auth.GoogleAuthProvider();
provider.setCustomParameters({
  prompt: "consent select_account",
});

/**
 * Get path to auth_controller.php
 */
function getAuthPath() {
  return "../../controllers/auth_controller.php";
}

/**
 * Get path for login page (from views/auth/)
 */
function getLoginPath() {
  return "../../views/auth/login.php";
}

/**
 * Get path for index page (from views/auth/)
 */
function getHomePath() {
  return "../../index.php";
}

/**
 * Google Login Function
 */
function googleLogin() {
  console.log("Starting Google login...");

  firebase
    .auth()
    .signInWithPopup(provider)
    .then((result) => {
      console.log("Google login success:", result.user);
      const user = result.user;
      const authPath = getAuthPath();

      console.log("Sending to:", authPath);
      console.log("Email:", user.email);

      fetch(authPath, {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({
          google_login: 1,
          email: user.email,
          name: user.displayName,
          avatar: user.photoURL,
          uid: user.uid,
        }),
      })
        .then((response) => {
          console.log("Response status:", response.status);
          if (!response.ok) {
            throw new Error("Server error: " + response.status);
          }
          return response.text();
        })
        .then((data) => {
          console.log("Server response:", data);
          if (
            data.includes("Missing") ||
            data.includes("Failed") ||
            data.includes("Error") ||
            data.includes("❌")
          ) {
            alert("Login error: " + data);
          } else {
            // Redirect to index.php for login
            window.location.href = getHomePath();
          }
        })
        .catch((error) => {
          console.error("Fetch error:", error);
          alert("Login failed: " + error.message + "\nPath: " + authPath);
        });
    })
    .catch((error) => {
      console.error("Google login error:", error.code, error.message);
      if (error.code === "auth/popup-blocked") {
        alert("Popup was blocked! Please allow popups for this site.");
      } else if (error.code === "auth/cancelled-popup-request") {
        // User cancelled, ignore
      } else {
        alert("Google login error: " + error.message);
      }
    });
}

/**
 * Google Register Function
 */
function googleRegister() {
  console.log("Starting Google registration...");

  firebase
    .auth()
    .signInWithPopup(provider)
    .then((result) => {
      console.log("Google registration success:", result.user);
      const user = result.user;
      const authPath = getAuthPath();

      console.log("Sending to:", authPath);
      console.log("Email:", user.email);

      fetch(authPath, {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({
          google_register: 1,
          email: user.email,
          name: user.displayName,
          avatar: user.photoURL,
          uid: user.uid,
        }),
      })
        .then((response) => {
          console.log("Response status:", response.status);
          if (!response.ok) {
            throw new Error("Server error: " + response.status);
          }
          return response.text();
        })
        .then((data) => {
          console.log("Server response:", data);
          if (
            data.includes("Missing") ||
            data.includes("Failed") ||
            data.includes("Error") ||
            data.includes("❌") ||
            data.includes("already exists")
          ) {
            alert("Registration error: " + data);
          } else {
            // Redirect to LOGIN page for registration (NOT index)
            window.location.href = getLoginPath();
          }
        })
        .catch((error) => {
          console.error("Fetch error:", error);
          alert(
            "Registration failed: " + error.message + "\nPath: " + authPath
          );
        });
    })
    .catch((error) => {
      console.error("Google registration error:", error.code, error.message);
      if (error.code === "auth/popup-blocked") {
        alert("Popup was blocked! Please allow popups for this site.");
      } else if (error.code === "auth/cancelled-popup-request") {
        // User cancelled, ignore
      } else if (error.code === "auth/email-already-in-use") {
        alert("This email is already registered. Please login instead.");
      } else {
        alert("Google registration error: " + error.message);
      }
    });
}

/**
 * Check if user is already logged in
 */
function checkAuthState(authCallback) {
  firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      authCallback(user);
    } else {
      console.log("No user signed in");
    }
  });
}

/**
 * Logout function
 */
function logout() {
  firebase
    .auth()
    .signOut()
    .then(() => {
      window.location.href = getHomePath();
    })
    .catch((error) => {
      console.error("Logout error:", error);
    });
}
