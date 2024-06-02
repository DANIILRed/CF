let singupBtn = document.getElementById("singupBtn")
let singinBtn = document.getElementById("singinBtn")
let nameField = document.getElementById("nameField")
let title = document.getElementById("title")


singinBtn.onclick = function(){
    nameField.style.maxHeight = "0";
    title.innerHTML = "Вход в аккаунт";
    singupBtn.classList.remove("disable");
    singinBtn.classList.add("disable");
}

singupBtn.onclick = function(){
    nameField.style.maxHeight = "90px";
    title.innerHTML = "Регистрация";
    singupBtn.classList.add("disable");
    singinBtn.classList.remove("disable");
}