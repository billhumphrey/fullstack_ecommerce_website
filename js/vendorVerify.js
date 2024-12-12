document.getElementById("passwordForm").addEventListener("submit", function (event) {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("cpassword").value;
    var passwordStrength = document.getElementById("passwordStrength");
    var message = document.getElementById("message");
    //firstname
    var firstname = document.getElementById("firstname").value;
    var NameMessage=document.getElementById("validName");
    //phonenumber
    var phoneNumber = document.getElementById("phone").value;
    var onlyAZ=document.getElementById("onlyAZ");
    //lastname
    var lastname = document.getElementById("lastname").value;
    var lNameMessage = document.getElementById("lvalidName");
    //regname
    var regnumber= document.getElementById("regnumber").value;
    var regMessage = document.getElementById("regMessage");
    //businessname
    var bname= document.getElementById("bname").value;
    var bMessage = document.getElementById("bMessage");
    //businessname
    var desname= document.getElementById("description").value;
    var desMessage = document.getElementById("desMessage");
    

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

    function hasSingleNumberRepetition(single) {
    // Check if the string consists of a single repeated number
    return /^(\d)\1*$/.test(single);
    }

    function isValidFormat(regnumber) {
        //check for a valid registration number
        return /^[A-Za-z]{5}\d{2}\/\d{4}\/\d{4}$/.test(regnumber);
    }
    function countWords(text) {
        // Remove extra whitespaces and split the text by spaces
        const words = text.trim().split(/\s+/);
        return words.length;
      }

    if (hasSingleLetterRepetition(bname) || hasSingleNumberRepetition(bname) || bname.length < 2) {
        bMessage.textContent = "Enter a valid business name";
        event.preventDefault();
        return;
    }else{
        bMessage.textContent = "";
    }
    if (hasSingleLetterRepetition(desname) || hasSingleNumberRepetition(desname)) {
        desMessage.textContent = "Enter a valid business description";
        event.preventDefault();
        return;
    }else{
        desMessage.textContent = "";
    }
    if (countWords(desname) < 10) {
        desMessage.textContent = "Business description should have a minimum of 10 words";
        event.preventDefault();
        return;
    }else{
        desMessage.textContent = "";
    }

    if (isValidFormat(regnumber)) {
        regMessage.textContent = "";
    }else{
        regMessage.textContent = "Enter a valid Registration/Admission number";
        event.preventDefault();
        return;
    }
    //Check for a valid name
    if (firstname.length >= 3 && isValidName(firstname)) {
        NameMessage.textContent = "";
    }else{
        NameMessage.textContent = "Enter a valid name";
        event.preventDefault();
        return;
    }
    if (lastname.length >= 3 && isValidName(lastname)) {
        lNameMessage.textContent = "";
    }else{
        lNameMessage.textContent = "Enter a valid name";
        event.preventDefault();
        return;
    }
    if (hasSingleLetterRepetition(firstname)) {
        NameMessage.textContent = "Enter a valid name";
        event.preventDefault();
        return;
    }else{
        NameMessage.textContent = "";
    }
    if (hasSingleLetterRepetition(lastname)) {
        lNameMessage.textContent = "Enter a valid name";
        event.preventDefault();
        return;
    }else{
        lNameMessage.textContent = "";
    }

    function phoneNumberCheck(name) {
        // Check if the input contains only numbers
        return /^[0-9]+$/.test(name.trim());
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