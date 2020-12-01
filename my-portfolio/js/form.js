//  Desc:   This file contains validation code for guestbook.php to validate form information
//          prior to submission.
//  Author: Ryan Rivera
//  Date:   11/06/20
//  File:   form.js

window.onLoad = hideOther();
window.onLoad = hideEmailFormat();
document.getElementById('howmet').onchange = hideOther;
document.getElementById('mailing-check').onchange = hideEmailFormat;

// document.getElementById("guestbook").onsubmit = validate;

//Hide the "other" text box and it's label if the "other" how we met option is selected
function hideOther(){
    let howmet = document.getElementById('howmet').value;
    let otherText = document.getElementsByClassName('otherText')
    if(howmet !== "Other"){
        for (let i=0; i<otherText.length; i++) {
            otherText[i].classList.add("d-none");
        }
    }
    else{
        for (let i=0; i<otherText.length; i++) {
            otherText[i].classList.remove("d-none");
        }
    }

}

//Hide email format buttons if mailing list checkbox is not checked
function hideEmailFormat(){
    let mailingChecked = document.getElementById('mailing-check').checked;
    let emailFormatDiv = document.getElementById('emailFormatDiv');
    mailingChecked ? emailFormatDiv.classList.remove('d-none') : emailFormatDiv.classList.add('d-none');
}


//Hide the "Other" text box if howmet != "Other", else make it visible
// function hideOther(){
//     let howmet = document.getElementById('howmet').value;
//     let otherText = document.getElementsByClassName('otherText')
//     if(howmet !== "Other"){
//         for (let i=0; i<otherText.length; i++) {
//             otherText[i].classList.add("d-none");
//         }
//     }
//     else{
//         for (let i=0; i<otherText.length; i++) {
//             otherText[i].classList.remove("d-none");
//         }
//     }
// }


// //Make all error messages invisible
// function clearErrors() {
//     let errors = document.getElementsByClassName("err-text");
//     for (let i=0; i<errors.length; i++) {
//         errors[i].classList.add("d-none");
//     }
// }


//Validate form data
// function validate() {
//
//     clearErrors();
//
//     //Create an error flag
//     let isValid = true;
//

    //Validate first name is not empty
    // let first = document.getElementById("fname").value;
    // if (first === "") {
    //     let errFname = document.getElementById("errFname");
    //     errFname.classList.remove("d-none");
    //     isValid = false; //Stay on the page
    // }


    //Validate last name is not empty
    // let last = document.getElementById("lname").value;
    // if (last === "") {
    //     let errLname = document.getElementById("errLname");
    //     errLname.classList.remove("d-none");
    //     isValid = false; //Stay on the page
    // }


    //If mailing list checkbox is selected, Validate a mail format option is chosen
    // let mailingChecked = document.getElementById('mailing-check').checked;
    // if(mailingChecked){
    //     let emailFormat = document.getElementsByName('email-format');
    //     let errFormat = document.getElementById('errFormat');
    //     let count = 0
    //     for(let i=0; i<emailFormat.length; i++){
    //         if(emailFormat[i].checked){
    //             count++;
    //         }
    //     }
    //     //If mailing list is checked, and count > 0 (an option is selected), hide error, otherwise show error
    //     if(count > 0){
    //         errFormat.classList.add('d-none');
    //     }
    //     else{
    //         errFormat.classList.remove('d-none');
    //         isValid = false;
    //     }
    // }


    // //If email is supplied, or if mailing list checkbox is checked, Validate email format using Regex
    // let email = document.getElementById("email").value;
    // if(email !== "" || mailingChecked){
    //     let emailregex = new RegExp('^([a-zA-Z0-9_\\-\\.]+)@([a-zA-Z0-9_\\-\\.]+)\\.([a-zA-Z]{2,5})$');
    //     if (!email.match(emailregex)) {
    //         let errEmail = document.getElementById("errEmail");
    //         errEmail.classList.remove("d-none");
    //         isValid = false; //Stay on the page
    //     }
    // }


    // //If URL is supplied, Validate URL to begin with htt://www. and ends with .com using Regex
    // let linkedin = document.getElementById("linkedin").value;
    // if(linkedin !== ""){
    //     let linkedinRegex = RegExp('^(http|https)(:\/\/www.)([a-zA-Z0-9_\.-]+)(.com)');
    //     if (linkedin === "" || !linkedin.match(linkedinRegex)) {
    //         let errLinkedin = document.getElementById("errLinkedin");
    //         errLinkedin.classList.remove("d-none");
    //         isValid = false; //Stay on the page
    //     }
    // }


    //Validate that a "how we met" option is selected.
    // let howmet = document.getElementById('howmet').value;
    // let otherText = document.getElementById('other-text').value;
    // //If no howmet option is selected, display error
    // if(howmet === ""){
    //     let errHowmet = document.getElementById('errHowmet');
    //     errHowmet.classList.remove('d-none');
    //     isValid = false; //Stay on page
    // }
    // //If "Other" is selected AND the other textbox is empty, display error
    // else if(howmet === "Other" && otherText === ""){
    //     let errOther = document.getElementById('errOther');
    //     errOther.classList.remove('d-none');
    //     isValid = false; //Stay on page
    // }


    //Validate size
    // return isValid;
// }


