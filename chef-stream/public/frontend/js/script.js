// if(grecaptcha && grecaptcha.getResponse().length > 0)
// {
//     //the recaptcha is checked
//     // Do what you want here
//     alert('Well, recaptcha is checked !');
// }
// else
// {
//     //The recaptcha is not cheched
//     //You can display an error message here
//     alert('Oops, you have to check the recaptcha !');
// }
if(window.history.replaceState) 
{
    window.history.replaceState(null, null, window.location.href);
}

function callback() {
    let submitButton1 = document.getElementById("submit-btn1");
    // submitButton1.removeAttribute("disabled");
    // submitButton1.removeAttribute("disabled");
    document.getElementById("submit-btn1").style.visibility = "visible";
  }


const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

const sign_in_btn2 = document.querySelector("#sign-in-btn2");
const sign_up_btn2 = document.querySelector("#sign-up-btn2");

sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});

sign_up_btn2.addEventListener("click", () => {
    container.classList.add("sign-up-mode2");
});

sign_in_btn2.addEventListener("click", () => {
    container.classList.remove("sign-up-mode2");
});
