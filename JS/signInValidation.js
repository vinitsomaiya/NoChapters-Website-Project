/* CST8285-313 
project: Assignment 2
author: Web-Dev-#9 Igor Malov
*/

// user sign-in validation code // Igor Malov

// creating EventListner with the event on key up for email and password validation
document.form.email.addEventListener('keyup', validateEmail);
document.form.password.addEventListener('keyup', validatePassword);

// email validation
function validateEmail() {    
//\S match one or more non-whitespace character
var myEmailPattern = /\S+@\S+\.\S+/; 
var emailValue = document.form.email.value;
var isEmailValid = myEmailPattern.test(emailValue);

    if (!isEmailValid) { //&& document.querySelector('.errorClass') === null
        //The querySelector() method returns the first element that matches a CSS selector.
        document.querySelector('.errorClassForEmail')?.remove();
        var errorElemForEmail = document.createElement('div');
        errorElemForEmail.textContent = "*Email textbox value should be non-empty and have email structure (xyx@xyz.xyz)";
        errorElemForEmail.classList.add('errorClassForEmail');
        document.form.email.before(errorElemForEmail);
        return false;

    //The querySelector() method returns the first element that matches a CSS selector.
    } else if (isEmailValid) {
        document.querySelector('.errorClassForEmail')?.remove();
        return true;
    }
}

// password validation
function validatePassword() {    
    //\S match one or more non-whitespace character
    var myPasswordPattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
    var passwordValue = document.form.password.value;
    var isMyPasswordValid = myPasswordPattern.test(passwordValue);
    
    if (!isMyPasswordValid) { //&& document.querySelector('.errorClass') === null
        //The querySelector() method returns the first element that matches a CSS selector.
        document.querySelector('.errorClassForPassword')?.remove();
        var errorElemForPassword = document.createElement('div');
        errorElemForPassword.textContent = "*Password must be at least 8 characters(at least 1 number, and upper and lower cases).";
        errorElemForPassword.classList.add('errorClassForPassword');
        document.form.password.before(errorElemForPassword);
        return false;
    
    //The querySelector() method returns the first element that matches a CSS selector.
    } else if (isMyPasswordValid) {
        document.querySelector('.errorClassForPassword')?.remove();
        return true;
    }
    }