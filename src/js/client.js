document.getElementById("signup-form").addEventListener("submit", function(event) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;
    var errorMessage = document.getElementById("error-message");
  
    if (password !== confirmPassword) {
      errorMessage.textContent = "Passwords do not match";
    } else {
      // Perform form submission or further validation here
      errorMessage.textContent = ""; // Clear any previous error messages
      // For demonstration purposes, we'll just log the data to the console
      
    }
  });
  