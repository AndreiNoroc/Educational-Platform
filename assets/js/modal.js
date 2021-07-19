// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    document.getElementById('hero').classList.add("blurr");
    document.getElementById('tabs').classList.add("blurr");
    document.getElementById('services').classList.add("blurr");
    document.getElementById('team').classList.add("blurr");
    document.getElementById('contact').classList.add("blurr");
    document.getElementById('footer').classList.add("blurr");
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    document.getElementById('hero').classList.remove("blurr");
    document.getElementById('tabs').classList.remove("blurr");
    document.getElementById('services').classList.remove("blurr");
    document.getElementById('team').classList.remove("blurr");
    document.getElementById('contact').classList.remove("blurr");
    document.getElementById('footer').classList.remove("blurr");
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        document.getElementById('hero').classList.remove("blurr");
        document.getElementById('tabs').classList.remove("blurr");
        document.getElementById('services').classList.remove("blurr");
        document.getElementById('team').classList.remove("blurr");
        document.getElementById('contact').classList.remove("blurr");
        document.getElementById('footer').classList.remove("blurr");
    }
}