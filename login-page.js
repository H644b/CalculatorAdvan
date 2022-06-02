const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const closeButton = document.getElementById("close-form-submit")
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "H644b" && password === "JoeMom") {
        alert("You have successfully logged in.");
        window.open("./secretpage.html", "LoginWindow", "width=500,height=auto");
        window.close();
    } else {
        loginErrorMsg.style.opacity = 1;
    }
})
closeButton.addEventListener("click", (e) => {


window.close();
  
})  