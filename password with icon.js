// password icon with spalsh


let IcoPass = document.getElementById("IcoPassID");
if (IcoPass) {
    IcoPass.addEventListener("click", Edit_State);
}

function Edit_State(event){
    let icon = event.target;
    let MainIco = icon.parentElement;
    let ListIco = MainIco.parentElement;
    let input = ListIco.querySelector("#password");

    if (MainIco.getAttribute("state") === "show"){
        input.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
        MainIco.setAttribute("state", "hide")
    }
    else{
        input.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
        MainIco.setAttribute("state", "show")
    }
}