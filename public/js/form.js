const form = document.querySelector(".formulaire"), continueBtn = document.querySelector(".formulaire input[type='submit']"), erreur = document.querySelector(".erreur"), mdp = document.getElementById("floatingInputGroup2"), showmdp = document.getElementById("showmdp"), masqmdp = document.getElementById("masqmdp");
form.onsubmit = (e) => {
    e.preventDefault();
};
continueBtn.onclick = () => {
    let formdata = new FormData(form);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/core/fonctions/login.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "Admin") {
                    location.href = "/core/pages/" + data + "/index.php";
                } else if (data === "User") {
                    location.href = "/core/pages/" + data + "/index.php";
                } else {
                    erreur.innerHTML = "<i class='fa-solid fa-xmark' onclick='masquer(erreur)' id='fermer'></i>" + data;
                    erreur.style.display = "block";
                }
            }
        }
    };
    xhr.send(formdata);
};
function showpassword() {
    showmdp.addEventListener('click', () => {
        if (mdp.type === "password") {
            mdp.type = "text";
            showmdp.style.display = "none";
            masqmdp.style.display = "block";
        } else {
            mdp.type = "password";
            showmdp.style.display = "block";
            masqmdp.style.display = "none";
        }
    });
    masqmdp.addEventListener('click', () => {
        if (mdp.type === "password") {
            mdp.type = "text";
            showmdp.style.display = "none";
            masqmdp.style.display = "block";
        } else {
            mdp.type = "password";
            showmdp.style.display = "block";
            masqmdp.style.display = "none";
        }
    });
}
showpassword();
function masquer(element) {
    if (element.style.display === "block") {
        element.style.display = "none";
    } else {
        element.style.display = "block";
    }
}
