/*
     Sanchez, Jamaica Ann B.  
     BSIT - 3A
     Activity 5: Form Validation Using Javascript   
*/

// script.js

document.addEventListener("DOMContentLoaded", function () {
    const registrationForm = document.getElementById("registrationForm");
    const loginForm = document.getElementById("loginForm");
  
    registrationForm.addEventListener("submit", function (e) {
      e.preventDefault();
      const regUsername = document.getElementById("regUsername").value;
      const regEmail = document.getElementById("regEmail").value;
      const regPassword = document.getElementById("regPassword").value;
      const regConfirmPassword = document.getElementById("regConfirmPassword").value;
  
      if (validateRegistration(regUsername, regEmail, regPassword, regConfirmPassword)) {
        alert("Registration successful!");
        registrationForm.reset();
      }
    });
  
    loginForm.addEventListener("submit", function (e) {
      e.preventDefault();
      const loginEmail = document.getElementById("loginEmail").value;
      const loginPassword = document.getElementById("loginPassword").value;
  
      if (validateLogin(loginEmail, loginPassword)) {
        const user = getUserByEmail(loginEmail);
        if (user) {
          alert("Welcome, " + user.name + "!");
          loginForm.reset();
        } else {
          alert("User not found.");
        }
      }
    });
  
    // Replace this with actual user data and validation logic
    const users = [
      { username: "user1", email: "user1@example.com", password: "password1", name: "User 1" },
      { username: "user2", email: "user2@example.com", password: "password2", name: "User 2" },
    ];
  
    function validateRegistration(username, email, password, confirmPassword) {
      // Add registration validation logic here
      if (username.length < 3 || username.length > 15) {
        alert("Username must be between 3 and 15 characters.");
        return false;
      }
  
      const emailRegex = /^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
      if (!emailRegex.test(email)) {
        alert("Invalid email address.");
        return false;
      }
  
      if (password.length < 8 || password.length > 20) {
        alert("Password must be between 8 and 20 characters.");
        return false;
      }
  
      if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
      }
  
      const userExists = users.some((user) => user.email === email);
      if (userExists) {
        alert("Email address is already in use.");
        return false;
      }
  
      return true;
    }
  
    function validateLogin(email, password) {
      // Add login validation logic here
      const user = users.find((user) => user.email === email && user.password === password);
      if (!user) {
        alert("Invalid email address or password.");
        return false;
      }
      return true;
    }
  
    function getUserByEmail(email) {
      return users.find((user) => user.email === email);
    }
  });
  