let calcButton      = document.getElementById('calcular');
let totalFactura    = document.getElementById('totalCuenta');
let cantidad        = document.getElementById('cantidad');
let categoria       = document.getElementById('categoria');
let mensaje         = document.getElementById('mensaje');
let nomre           = document.getElementById('nombre');
let apellido        = document.getElementById('apellido');
let email           = document.getElementById('email');
//
let dtoEstudiante       = 0.8;
let dtoTrainee          = 0.5;
let dtoJunior           = 0.15;  
const precioEntrada     = 200;
//        

function calcular(e) {
    e.preventDefault();
    let errorMsg = validar();
    let cantInt = parseInt(cantidad.value, 10);
    let dto = 0;
    let ticketEntrada = 0.0;


    if (errorMsg!= '') {
        console.log(errorMsg);
        mensaje.style.display = "flex";
        mensaje.textContent = errorMsg;

        alert(errorMsg);
        return;
    } else {
        mensaje.style.display = "none";
    }

    switch(categoria.value) {
        case 'Estudiante':
            dto = dtoEstudiante;
            break;            
        case 'Trainee':
            dto = dtoTrainee;
            break;
        case 'Junior':
            dto = dtoJunior;
            break;
        default:
            dto = 0;
    }

    ticketEntrada = Math.round(cantInt * precioEntrada * (1 - dto));

    totalFactura.textContent = 'Total a Pagar: $ ' + ticketEntrada;

    // console.log('Hola, la cantidad es: ' + cantidad.value);
    // // console.log('Hola, la cantInt: ' + cantInt);
    // console.log('La categoria es: ' + categoria.value);
    // console.log('dtoEstudiante: ' + dtoEstudiante);
}

function validar() {

    let msgError = ''; 
    let cantInt = parseInt(cantidad.value, 10);
    console.log('Hola, la cantInt: ' + cantInt);

    if (categoria.value == 'Seleccioná una categoria') {
        msgError = 'Debes seleccionar una catoría';
    }

    if ( ( cantInt < 1 ) || ( cantInt > 10 )) {
        msgError = 'Debes ingresar una cantidad entre 1 y 10 entradas!';
        cantidad.textContent = 0;
    } 

    if (cantidad.value == ''){
        msgError = 'Debes ingresar cuantas entradas queres!'
    }

    if ((nombre.value == '') || (apellido.valu == '') || (email.value == '')) {
        msgError = 'Debes ingresar tu nombre, apellido y un correo!'
    }

    return msgError;
}



calcButton.addEventListener('click', calcular);