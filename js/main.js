window.onload = function() {
    init();
};


function init () {
    console.log("LISTO");
    mostrarInfo();
    document.getElementById("btnAcerca").addEventListener("click", handleMostrarAcerca); 
    document.getElementById("btnModalVideos").addEventListener("click", handleMostrarModalVideos); 

    
    cuentaRegresiva();
}


function handleMostrarAcerca() {
    $('#mdlAcerca').modal('show')
}

function handleMostrarModalVideos() {
    $('#mdlVideos').modal('show')
}



function mostrarInfo() {
    console.log("dias",d);
    console.log("horas",h);
    console.log("minutos", m);
    console.log("segundos", s);
}

function cuentaRegresiva(){
    s--;
    if (s < 0){
        m--;
        s = 59
    }
    if (m < 0){
        h--;
        m = 59
    }
    if (h < 0){
        d--;
        h = 23
    }
    
    function pad(n) {
        if ( n < 10 && n >= 0 ) {
            return "0" + n;
        } else {
            return n;
        }
    }
    
    document.getElementById("visorCuenta").innerHTML = pad(d)+" días "+pad(h)+" horas "+pad(m)+" minutos "+pad(s) + " segundos";
    setTimeout ( "cuentaRegresiva()", 1000 );
  
}