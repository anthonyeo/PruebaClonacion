
const form = document.getElementById('form');
const nombre = document.getElementById('nombre');
const correo = document.getElementById('correo');
const mensaje = document.getElementById('mensaje');

form.addEventListener('submit', e => {
    e.preventDefault();
    checkForm(e);
});

function checkForm(e){
    const nombreValue = nombre.value.trim();
    const correoValue = correo.value.trim();
    const mensajeValue = mensaje.value.trim();
    var validated = true;

    if(nombreValue === ''){
        setErrorFor(nombre, 'Es necesario llenar el campo del nombre');
        validated = false;
    }else{
        setSuccessFor(nombre);
    }
    if(correoValue === ''){
        setErrorFor(correo, 'Es necesario llenar el campo del email');
        validated = false;
    }else if(!isEmail(correoValue)){
        setErrorFor(correo, "Ingrese un email válido");
        validated = false;
    }else{
        setSuccessFor(correo);
    }
    if(mensajeValue === ''){
        setErrorFor(mensaje, 'Es necesario llenar el campo del mensaje');
        validated = false;
    }else{
        setSuccessFor(mensaje);
    }    

    if (validated === true) {
        alert('Se envió el correo de manera exitosa');
        e.currentTarget.submit();
    }
};

function setErrorFor(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    if (formControl.className === 'input-field' || formControl.className === 'input-field error' || formControl.className === 'input-field success') {
        formControl.className = 'input-field error';
    } else {
        formControl.className = 'input-field-textarea error';
    }    
    small.innerText = message;
}

function setSuccessFor(input){

    const formControl = input.parentElement;
    if (formControl.className === 'input-field' || formControl.className === 'input-field error' || formControl.className === 'input-field success') {
        formControl.className = 'input-field success';
    } else {
        formControl.className = 'input-field-textarea success';
    }
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}