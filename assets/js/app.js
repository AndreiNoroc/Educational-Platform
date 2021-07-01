'use strict'

//functie penrtu read more, read less
const switcher = document.querySelector('.btn-learn-more');

switcher.addEventListener('click', function () {
    const dots = document.getElementById("dots");
    const moreText = document.getElementById("more");
    const btnText = document.body.getElementsByClassName("btn-learn-more");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        this.textContent = "Read more";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        this.textContent = "Read less";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
});

const css='table '

//functii pentru schimbat textul
function myFunction1() {
    const x = document.getElementById("tab-01");
    x.style.background='none';
}

function myFunction2() {
    const x = document.getElementById("tab-02");
    x.style.background='none';
}

function myFunction3() {
    const x = document.getElementById("tab-03");
    x.style.background='none';
}