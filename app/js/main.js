const video1= '<iframe width="100%" height="200" src="https://www.youtube.com/embed/HXrFucXru-k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
const video2= '<iframe width=100%" height="200" src="https://www.youtube.com/embed/BgJZJ7VHKQw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
const video3= '<iframe width=100%" height="200" src="https://www.youtube.com/embed/VgfhEFtwR0Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
const video4= '<iframe width=100%" height="200" src="https://www.youtube.com/embed/xCzYlnnRm6g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
const candado='<img class="img-fluid borde-redondo1" src="./assets/img/candado.jpg" alt="imagen de candado" >';
//13 de set 11:00
const horaV1=1600016400;
//14 de set 8:30
const horaV2=1600093800;
//14 de set 12:30 del 14
const horaV3=1600108200;
//5:30
const horaV4=1600126200;
var h;
var d;
var m;
var s;
var actual;

window.onload = function() {
    init();
};


function init () {
    //console.log("LISTO");
    cargarDatos();
    document.getElementById("btnAcerca").addEventListener("click", handleMostrarAcerca); 
    document.getElementById("btnModalVideos").addEventListener("click", handleMostrarModalVideos); 
    document.getElementById("btnModalCompartir").addEventListener("click", handleMostrarModalCompartir);     
    cuentaRegresiva();    
    detenerVideos();
    incrementarActual();
}

function detenerVideos() {
    $('#mdlVideos').on('hidden.bs.modal', function () {
        $('#mdlVideos iframe').removeAttr('src');
    })
    
}


function handleMostrarModalCompartir() {
    $('#mdlCompartir').modal('show')
}

function handleMostrarAcerca() {
    $('#mdlAcerca').modal('show')
}

function handleMostrarModalVideos() {
    mostrarVideos();
    $('#mdlVideos').modal('show')
}

function mostrarVideos() {
    let contVideo1 = document.getElementById("contVideo1");
    let contVideo2 = document.getElementById("contVideo2");
    let contVideo3 = document.getElementById("contVideo3");
    let contVideo4 = document.getElementById("contVideo4");

   
    
    /* video 1 */
    if (actual > horaV1   ) {
        contVideo1.innerHTML= video1;
    } else {
        contVideo1.innerHTML=candado
    }

      /* video 2 */
      if (actual >   horaV2 ) {
        contVideo2.innerHTML= video2;
    } else {
        contVideo2.innerHTML=candado
    }

    /* video 3 */
    if (actual > horaV3  ) {
        contVideo3.innerHTML= video3;
    } else {
        contVideo3.innerHTML=candado
    }
    
    /* video 4 */
    if (actual > horaV4   ) {
        contVideo4.innerHTML= video4;
    } else {
        contVideo4.innerHTML=candado
    }
    
}

function cargarDatos() {
    d = parseInt(sessionStorage.getItem('d'));
    h = parseInt(sessionStorage.getItem('h'));
    m = parseInt(sessionStorage.getItem('m'));
    s = parseInt(sessionStorage.getItem('s'));
    actual = parseInt(sessionStorage.getItem('actual'));

   // console.log("dias",d);
    //console.log("horas",h);
    //console.log("minutos", m);
    //console.log("segundos", s);
    //console.log("actual", actual);

    //Redirecciona en caso de que los datos no hayan sido cargados
    //Esto pasa cuando el usuario accede directamente a la pa´gina sin pasar por el index (splah)
    if (actual) {
        //console.log("Datos cargados de session");
    } else {
        window.location.replace("./index.php");  
    }
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
    
    
    if (actual > 1600127999 ) {
        //en caso de que la cuenta regresiva ya esté en cero:
        //17:59:59 del servidor
        document.getElementById("visorCuenta").innerHTML ="¡Viva el 15 de setiembre!"    
    } else {        
        let minutos =    parseInt(pad(m) );
        document.getElementById("visorCuenta").innerHTML = pad(d)+" días "+pad(h)+" horas "+ minutos +" minutos "+pad(s) + " segundos";        
    }
    

    setTimeout ( "cuentaRegresiva()", 1000 );
  
}


function incrementarActual() {
    setInterval(() => {
        actual++
        //console.log("actual", actual);
    }, 1000);
}