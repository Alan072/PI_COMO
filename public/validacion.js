function validarNombre (nom){
    console.log(nom); //log tamaño de campo
    if(nom.length==0){ // utilizar !=
        alert('El nombre no puede estar vacio');
    }
}

function validarDescripcion (desc){
    console.log(desc); //log tamaño de campo
    if(desc.length<10){ // utilizar !=
        alert('La longitud de la descripción debe de ser mayor a 10 caracteres');
    }
}
function validarEmail(email) {
    console.log(email);
    var re = /[a-zA-Z0-9._-]+@[upq]+\.(edu.mx|edu)/;
    if(!re.test(email)) {
        alert("Email inválido");   
    }else{
        
    }
} 
function validarPass(pass){
    console.log(pass); //log tamaño de campo
    if(pass.length!=10){ // utilizar !=
        alert('Contraseña invalida, la contraseña debe contener al menos 10 caracteres');
    }
}
