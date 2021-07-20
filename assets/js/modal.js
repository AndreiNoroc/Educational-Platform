// Get the modal
var loginModal = document.getElementById("loginModal");
var registerModal = document.getElementById("registerModal");

// Get the button that opens the modal
var btn = document.getElementById("buttonLogin");
var registration = document.getElementById("new_account");
var login = document.getElementById("exist_account");

// Get the <span> element that closes the modal
var spanLogin = document.getElementsByClassName("close")[0];
var spanRegister = document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal
btn.onclick = function() {
    document.getElementById('hero').classList.add("blurr");
    document.getElementById('tabs').classList.add("blurr");
    document.getElementById('services').classList.add("blurr");
    document.getElementById('team').classList.add("blurr");
    document.getElementById('contact').classList.add("blurr");
    document.getElementById('footer').classList.add("blurr");
    loginModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanLogin.onclick = function() {
    document.getElementById('hero').classList.remove("blurr");
    document.getElementById('tabs').classList.remove("blurr");
    document.getElementById('services').classList.remove("blurr");
    document.getElementById('team').classList.remove("blurr");
    document.getElementById('contact').classList.remove("blurr");
    document.getElementById('footer').classList.remove("blurr");
    loginModal.style.display = "none";
}

spanRegister.onclick = function() {
    document.getElementById('hero').classList.remove("blurr");
    document.getElementById('tabs').classList.remove("blurr");
    document.getElementById('services').classList.remove("blurr");
    document.getElementById('team').classList.remove("blurr");
    document.getElementById('contact').classList.remove("blurr");
    document.getElementById('footer').classList.remove("blurr");
    registerModal.style.display = "none";
}

// When the user clicks anywhere outside of the loginModal, close it
window.onclick = function(event) {
    if (event.target == loginModal) {
        loginModal.style.display = "none";
        document.getElementById('hero').classList.remove("blurr");
        document.getElementById('tabs').classList.remove("blurr");
        document.getElementById('services').classList.remove("blurr");
        document.getElementById('team').classList.remove("blurr");
        document.getElementById('contact').classList.remove("blurr");
        document.getElementById('footer').classList.remove("blurr");
    }

    if (event.target == registerModal) {
        registerModal.style.display = "none";
        document.getElementById('hero').classList.remove("blurr");
        document.getElementById('tabs').classList.remove("blurr");
        document.getElementById('services').classList.remove("blurr");
        document.getElementById('team').classList.remove("blurr");
        document.getElementById('contact').classList.remove("blurr");
        document.getElementById('footer').classList.remove("blurr");
    }
}

registration.onclick = function() {
    loginModal.style.display = "none";
    registerModal.style.display = "block";
}

login.onclick = function() {
    registerModal.style.display = "none";
    loginModal.style.display = "block";
}