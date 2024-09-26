console.log("Funciona JS")

var cambio = false;

function cambia_color(){
    if(cambio){
    document.getElementById("cuadrado").style.backgroundColor = 'white';
}else{
    document.getElementById("cuadrado").style.backgroundColor = 'pink';
    cambio= true;
}
}

function ocultar(){
    document.getElementById('titulo').style.display='none';
    //document.getElementById('titulo').style.fontSize='62px';
}