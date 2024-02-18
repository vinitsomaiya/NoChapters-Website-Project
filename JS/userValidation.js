/* CST8285-313 
project: Assignment 2
author: Web-Dev-#9 Kyoko Ikari
*/

// this code is for sign-up validatin and refered to theory lecture materials

// declare variables to store the emements
let userNameInput = document.querySelector("#userName");
let emailInput = document.querySelector("#signUpEmail");
let passwordInput = document.querySelector("#signUpPass");
let rePasswordInput = document.querySelector("#repass");
let termsInput = document.querySelector("#terms");

// create new elements to display the error messages
let userNameError = document.createElement('p');
userNameError.setAttribute("class", "warning");

let emailError = document.createElement('p');
emailError.setAttribute("class", "warning");

let passError = document.createElement('p');
passError.setAttribute("class", "warning");

let repassError = document.createElement('p');
repassError.setAttribute("class", "warning");

let termsError = document.createElement('p');
termsError.setAttribute("class","warning");

// append the error message to the parent "signUpTextfield"
document.querySelectorAll(".signUpTextfield")[0].append(userNameError);
document.querySelectorAll(".signUpTextfield")[1].append(emailError);
document.querySelectorAll(".signUpTextfield")[2].append(passError);
document.querySelectorAll(".signUpTextfield")[3].append(repassError);

// append the error message to the parent "term-checkbox"
document.querySelector(".term-checkbox").append(termsError);

// declare the error messages
let correctlyVarified= "";
let userNameErrorMsg = "User name is required and within 20 characters.";
let emailErrorMsg = "Email address needs to be in a correct format. ex:web@programming.com";
let passErrorMsg = "Password must be at least 8 characters(at least 1 number, and upper and lower cases).";
let repassErrorMsg = "It must be matched. Please re-type password."
let termsErrorMsg = "Please accept the terms and conditions.";

// create validate functions for
// username, email, password, re-type password, and terms

// checks the username if it is not empty and less than 20 letters
function validateUserName(){
    let name = userNameInput.value;
    if (name.length > 20 || name.length === 0) {
        message = userNameErrorMsg;    
    } else {
        message = correctlyVarified;
    }
    return message;
}

// checks the email if it is matched with regexp
function vaildateEmail(){
    let email = emailInput.value;
    let regexp = /\S+@\S+\.\S+/;
    if(regexp.test(email)){ 
        message = correctlyVarified;
    } else {
        message = emailErrorMsg;
    }
    return message;
}

// checks the password if it is matched with regexp and the length has at least 8 characters
function validatePassword(){
    let password = passwordInput.value;
    let regexp = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
    if(regexp.test(password)){ 
        message = correctlyVarified;
    } else {
        message = passErrorMsg;
    } 
    return message;
}

// checks the re-type password if it is matched with the first password
function validateRepasswd(){
    let repass = rePasswordInput.value;
    if(repass === passwordInput.value && repass.length != 0){ 
        message = correctlyVarified;
    } else {
        message = repassErrorMsg;
    }
    return message;
}

// checks the terms and conditions are applied
function validateTerms(){
    if(termsInput.checked)
        return correctlyVarified;
    else
        return termsErrorMsg;
}

// function validate() on submit event
function validate(){
    let valid = true;
    let userValidation = validateUserName();
    let emailValidation = vaildateEmail();
    let passValidation = validatePassword();
    let repassValidation = validateRepasswd();
    let termsValidation = validateTerms();

    if(userValidation !== correctlyVarified){
        userNameError.textContent = userValidation;
        userNameInput.style.borderColor = "red";
        valid = false;
    }
    if(emailValidation !== correctlyVarified){
        emailError.textContent = emailValidation;
        emailInput.style.borderColor = "red";
        valid = false;
    }
    if(passValidation !== correctlyVarified){
        passError.textContent = passValidation;
        passwordInput.style.borderColor = "red";
        valid = false;
    }
    if(repassValidation !== correctlyVarified){
        repassError.textContent = repassValidation;
        rePasswordInput.style.borderColor = "red";
        valid = false;
    }
    if(termsValidation !== correctlyVarified){
        termsError.textContent = termsValidation;
        valid = false;
    }
    return valid;
}
// add event listner to check the email,username, password, retype password
// and if correct contents are entered, the error message will disappear.

emailInput.addEventListener("blur",()=>{ 
    let x = vaildateEmail();
    if(x == correctlyVarified){
        emailError.textContent = correctlyVarified;
        emailInput.style.borderColor = "";
    }
    });

userNameInput.addEventListener("blur",()=>{ 
    let x = validateUserName();
    if(x == correctlyVarified){
        userNameError.textContent = correctlyVarified;
        userNameInput.style.borderColor = "";
    }
    });

passwordInput.addEventListener("blur",()=>{ 
    let x = validatePassword();
    if(x == correctlyVarified){
        passError.textContent = correctlyVarified;
        passwordInput.style.borderColor = "";
    }
    });

rePasswordInput.addEventListener("blur",()=>{ 
    let x = validateRepasswd();
    if(x == correctlyVarified){
        repassError.textContent = correctlyVarified;
        rePasswordInput.style.borderColor = "";
    }
    });

// add event listner to the checkbox if you check the terms box,the error paragraph that won't be shown
termsInput.addEventListener("change", function(){
    if(this.checked){
        termsError.textContent = correctlyVarified;
    }
    });

// function to empty the text inside, error messages, and highlights when resent
function resetFormError() {
    userNameError.textContent = correctlyVarified;
    emailError.textContent = correctlyVarified;
    passError.textContent = correctlyVarified;
    repassError.textContent = correctlyVarified;
    termsError.textContent = correctlyVarified;
    userNameInput.style.borderColor = "";
    emailInput.style.borderColor = "";
    passwordInput.style.borderColor = "";
    rePasswordInput.style.borderColor = "";
}

// event listner to call the function restFormError() on reset event
 document.signUpForm.addEventListener("reset",resetFormError);

 

