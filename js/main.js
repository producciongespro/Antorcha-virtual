window.onload = function() {
    init();
};


function init () {
    console.log("LISTO");
    mostrarInfo();
    document.getElementById("btnAcerca").addEventListener("click", handleMostrarAcerca); 
 

    if ( navigator.serviceWorker ) {
        navigator.serviceWorker.register('./sw.js');        
    }

    cuentaRegresiva();

}


function handleMostrarAcerca() {
    $('#mdlAcerca').modal('show')
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
    
    document.getElementById("visorCuenta").innerHTML = pad(d)+" d "+pad(h)+" hr "+pad(m)+" min "+pad(s) + " seg";
    setTimeout ( "cuentaRegresiva()", 1000 );
  
}