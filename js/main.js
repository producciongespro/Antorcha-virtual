const video1= '<iframe width="100%" height="200" src="https://www.youtube.com/embed/k76BgIb89-s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
const video2= '<iframe width=100%" height="200" src="https://www.youtube.com/embed/KdWgysitPgU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
const video3= '<iframe width=100%" height="200" src="https://www.youtube.com/embed/OJJMVLPdAwY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
const video4= '<iframe width=100%" height="200" src="https://www.youtube.com/embed/1crxmBTxRlM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
const candado='<img class="img-fluid" src="./assets/img/candado.png" alt="imagen de candado" >';

window.onload = function() {
    init();
};


function init () {
    console.log("LISTO");
    mostrarInfo();
    document.getElementById("btnAcerca").addEventListener("click", handleMostrarAcerca); 
    document.getElementById("btnModalVideos").addEventListener("click", handleMostrarModalVideos);     
    cuentaRegresiva();    
    detenerVideos();
}

function detenerVideos() {
    $('#mdlVideos').on('hidden.bs.modal', function () {
        $('#mdlVideos iframe').removeAttr('src');
    })
    
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
    if (d == 5 && h == 3 && m == 42 ) {
        contVideo1.innerHTML= video1;
    } else {
        contVideo1.innerHTML=candado
    }

      /* video 2 */
      if (d == 5 && h == 3 && m == 41 ) {
        contVideo2.innerHTML= video2;
    } else {
        contVideo2.innerHTML=candado
    }

    /* video 3 */
    if (d == 5 && h == 3 && m == 40 ) {
        contVideo3.innerHTML= video3;
    } else {
        contVideo3.innerHTML=candado
    }
    
    /* video 4 */
    if (d == 5 && h == 3  && m == 39 ) {
        contVideo4.innerHTML= video4;
    } else {
        contVideo4.innerHTML=candado
    }
    
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