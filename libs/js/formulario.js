let btnEnviarForm = document.getElementById("btn-enviarForm");
let inputs = document.querySelectorAll(".form-control");
let contenedorForm = document.getElementById("contenedor-form");

function validarFormulario(){
    for(let input of inputs){
        if (input.value == ""){
            let alerta = insertarAlerta();
            contenedorForm.insertAdjacentElement("afterbegin", alerta);
            return false;
        }
    }
    return true;
}

function insertarAlerta(){
    const newElement = document.createElement("div");
    newElement.classList.add("alert");
    newElement.classList.add("alert-danger");
    newElement.textContent = "Ingrese los datos faltantes";
    return newElement;
}