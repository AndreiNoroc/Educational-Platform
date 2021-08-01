<?php
//! parte de php in interiorul html

//* modalul de register ramane deschis si dupa ce se da refresh
if(!isset($_GET['signup'])) {
    //  exit();
} else {
    $signupCheck = $_GET['signup'];
    if(!empty($signupCheck)) {
        echo '<script type="text/javascript">',
        'var registerModal = document.getElementById("registerModal");',
        'registerModal.style.display = "block";',
        'document.getElementById("hero").classList.add("blurr");',
        'document.getElementById("tabs").classList.add("blurr");',
        'document.getElementById("services").classList.add("blurr");',
        'document.getElementById("team").classList.add("blurr");',
        'document.getElementById("contact").classList.add("blurr");',
        'document.getElementById("footer").classList.add("blurr");',
        '</script>';
    }
}

//* modalul de login ramane deschis si dupa ce se da refresh
if(!isset($_GET['login'])) {
    //  exit();
} else {
    $signupCheck = $_GET['login'];
    if(!empty($signupCheck)) {
        echo '<script type="text/javascript">',
        'var registerModal = document.getElementById("loginModal");',
        'registerModal.style.display = "block";',
        'document.getElementById("hero").classList.add("blurr");',
        'document.getElementById("tabs").classList.add("blurr");',
        'document.getElementById("services").classList.add("blurr");',
        'document.getElementById("team").classList.add("blurr");',
        'document.getElementById("contact").classList.add("blurr");',
        'document.getElementById("footer").classList.add("blurr");',
        '</script>';
    }
}

//* modalul de recover ramane deschis si dupa ce se da refresh
if(!isset($_GET['reset'])) {
    //  exit();
} else {
    $signupCheck = $_GET['reset'];
    if(!empty($signupCheck)) {
        echo '<script type="text/javascript">',
        'var registerModal = document.getElementById("recoverModal");',
        'registerModal.style.display = "block";',
        'document.getElementById("hero").classList.add("blurr");',
        'document.getElementById("tabs").classList.add("blurr");',
        'document.getElementById("services").classList.add("blurr");',
        'document.getElementById("team").classList.add("blurr");',
        'document.getElementById("contact").classList.add("blurr");',
        'document.getElementById("footer").classList.add("blurr");',
        '</script>';
    }
}

//* modalul de reset ramane deschis si dupa ce se da refresh
if(!isset($_GET['selector'])) {
    //  exit();
} else {
    $signupCheck = $_GET['selector'];
    if(!empty($signupCheck)) {
        echo '<script type="text/javascript">',
        'var registerModal = document.getElementById("resetModal");',
        'registerModal.style.display = "block";',
        'document.getElementById("hero").classList.add("blurr");',
        'document.getElementById("tabs").classList.add("blurr");',
        'document.getElementById("services").classList.add("blurr");',
        'document.getElementById("team").classList.add("blurr");',
        'document.getElementById("contact").classList.add("blurr");',
        'document.getElementById("footer").classList.add("blurr");',
        '</script>';
    }
}

//* modalul de reset ramane deschis si dupa ce se da refresh
//! nu cred ca mai este nevoie de asta, avem partea de sus dar testam alta data :))
if(!isset($_GET['newpwd'])) {
    //  exit();
} else {
    $signupCheck = $_GET['newpwd'];
    if(!empty($signupCheck)) {
        echo '<script type="text/javascript">',
        'var registerModal = document.getElementById("resetModal");',
        'registerModal.style.display = "block";',
        'document.getElementById("hero").classList.add("blurr");',
        'document.getElementById("tabs").classList.add("blurr");',
        'document.getElementById("services").classList.add("blurr");',
        'document.getElementById("team").classList.add("blurr");',
        'document.getElementById("contact").classList.add("blurr");',
        'document.getElementById("footer").classList.add("blurr");',
        '</script>';
    }
}
?>
