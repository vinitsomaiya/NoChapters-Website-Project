/* CST8285-313 
project: Assignment 2
author: Web-Dev-#9 Kyoko Ikari
*/
// this code is refered to theory lecture materials

// declare variables to store the emements
let titleInput = document.querySelector("#title");
let authorInput = document.querySelector("#author");
let yearInput = document.querySelector("#year");

// create new elements to display the error messages
let titleError = document.createElement('p');
titleError.setAttribute("class", "error");

let authorError = document.createElement('p');
authorError.setAttribute("class", "error");

let yearError = document.createElement('p');
yearError.setAttribute("class", "error");

// append the error message to the parent "newListText"
document.querySelectorAll(".newListText")[0].append(titleError);
document.querySelectorAll(".newListText")[1].append(authorError);
document.querySelectorAll(".newListText")[2].append(yearError);

// declare the error messages
valifiedMessage = "";
titleErrMessage = "Please enter the title of the novel";
authorErrMessage = "Please enter the author of the novel";
yearErrMessage = "Pleases enter the published year of the novel";

// create validate functions for title, author, and published year
function validateTitle() {
    let title = titleInput.value;
    if (title.length == 0) {
        message = titleErrMessage;
    } else {
        message = valifiedMessage;
    }
    return message;
}

function validateAuthor() {
    let author = authorInput.value;
    if (author.length == 0) {
        message = authorErrMessage;
    } else {
        message = valifiedMessage;
    }
    return message;
}

function validateYear() {
    let year = yearInput.value;
    // check if the input is 4 digits number for the year
    // regexp is refered to https://www.regextester.com/116374
    let regexp = /(?:(?:18|19|20|21)[0-9]{2})/g;
    if (regexp.test(year)) {
        message = valifiedMessage;
    } else {
        message = yearErrMessage;
    }
    return message;
}

// function validateNewList() on submit event
function validateNewList() {
    let valid = true;
    let titleValidation = validateTitle();
    let authorValidation = validateAuthor();
    let yearValidation = validateYear();
 
    if(titleValidation !== valifiedMessage){
        titleError.innerText = titleValidation;
        titleInput.style.borderColor = "red";
        valid = false;
    }
    if(authorValidation !== valifiedMessage){
        authorError.innerText = authorValidation;
        authorInput.style.borderColor = "red";
        valid = false;
    }
    if(yearValidation !== valifiedMessage){
        yearError.innerText = yearValidation;
        yearInput.style.borderColor = "red";
        valid = false;
    }
    return valid;
}

// add event listner to check the title, author, and published year
// if correct contents are entered, the error message will disappear.
titleInput.addEventListener("blur",()=>{ 
    let x = validateTitle();
    if(x == valifiedMessage){
        titleError.innerText = valifiedMessage;
        titleInput.style.borderColor = "";
    }
    });

authorInput.addEventListener("blur",()=>{ 
    let x = validateAuthor();
    if(x == valifiedMessage){
        authorError.innerText = valifiedMessage;
        authorInput.style.borderColor = "";
    }
    });

yearInput.addEventListener("blur",()=>{ 
    let x = validateYear();
    if(x == valifiedMessage){
        yearError.innerText = valifiedMessage;
        yearInput.style.borderColor = "";
    }
    });
    
// function to empty the text inside, error messages, and highlights when resent
function resetError() {
    titleError.innerText = correctlyVarified;
    authorError.innerText = correctlyVarified;
    yearError.innerText = correctlyVarified;
    titleInput.style.borderColor = "";
    authorInput.style.borderColor = "";
    yearInput.style.borderColor = "";
}

// event listner to call the function restError() on reset event
document.newListForm.addEventListener("reset",resetError);



