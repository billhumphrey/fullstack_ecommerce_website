document.getElementById("passwordForm").addEventListener("submit", function (event) {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var passwordStrength = document.getElementById("passwordStrength");
    var message = document.getElementById("message");
    var firstName = document.getElementById('firstname').value;
    var firstMessage=document.getElementById("validName");
    var lastName = document.getElementById('lastname').value;
    var lastMessage=document.getElementById("lvalidName");
    //phonenumber
    var phoneNumber = document.getElementById('phone').value;
    var onlyAZ=document.getElementById("onlyAZ");
    // Check password strength (add your own rules here)
    if (password.length < 8) {
        passwordStrength.textContent = "Password must be at least 8 characters long.";
        event.preventDefault();
        return;
    }else{
      passwordStrength.textContent = "";
    }
    // Check if password and confirm password match
    if (password !== confirmPassword) {
        message.textContent = "Password and confirm password do not match. Please try again.";
        event.preventDefault();
        return;
    }else{
      message.textContent = "";
    }
    function isValidName(name) {
        // Check if the name contains only alphabetic characters
        return /^[a-zA-Z]+$/.test(name.trim());
    }
    function hasSingleLetterRepetition(input) {
            // Check if the string consists of a single repeated letter
        return /^(\w)\1*$/.test(input);
    }
    //Check for a valid name greator than 3 and contains letters only
    if (firstName.length >= 3 && isValidName(firstName)) {
          firstMessage.textContent = "";
    }else{
        firstMessage.textContent = "Enter a valid name";
        event.preventDefault();
        return;
    }
    //Check for a valid name greator than 3 and contains letters only
    if (lastName.length >= 3 && isValidName(lastName)) {
        lastMessage.textContent = "";
    }else{
        lastMessage.textContent = "Enter a valid name";
        event.preventDefault();
        return;
    }
    if (hasSingleLetterRepetition(firstName)) {
            firstMessage.textContent = "Enter a valid name";
            event.preventDefault();
            return;
        }else{
            firstMessage.textContent = "";
        }
    if (hasSingleLetterRepetition(lastName)) {
            lastMessage.textContent = "Enter a valid name";
            event.preventDefault();
            return;
        }else{
            lastMessage.textContent = "";
    }
    function phoneNumberCheck(number) {
        // Check if the input contains only numbers
        return /^[0-9]+$/.test(number.trim());
    }
    function startsWith0701(input) {
      //Check if a number starts with 07 0r 01
          return /^(07|01)/.test(input);
    }
    //For phonenumber
    if (phoneNumberCheck(phoneNumber) && startsWith0701(phoneNumber) && phoneNumber.length === 10 ) {
            onlyAZ.textContent = "";
        } else {
          onlyAZ.textContent = "Enter a valid phone number";
          event.preventDefault();
          return;
        }
});