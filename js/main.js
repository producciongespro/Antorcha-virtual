const video1= '<iframe width="100%" height="200" src="https://www.youtube.com/embed/k76BgIb89-s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
const video2= '<iframe width=100%" height="200" src="https://www.youtube.com/embed/KdWgysitPgU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
const video3= '<iframe width=100%" height="200" src="https://www.youtube.com/embed/OJJMVLPdAwY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
const video4= '<iframe width=100%" height="200" src="https://www.youtube.com/embed/1crxmBTxRlM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
window.onload = function() {
    init();
};


function init () {
    console.log("LISTO");
    mostrarInfo();
    document.getElementById("btnAcerca").addEventListener("click", handleMostrarAcerca); 
    document.getElementById("btnModalVideos").addEventListener("click", handleMostrarModalVideos);     
    cuentaRegresiva();
    mostrarVideos();
}


function handleMostrarAcerca() {
    $('#mdlAcerca').modal('show')
}

function handleMostrarModalVideos() {
    $('#mdlVideos').modal('show')
}

function mostrarVideos() {
    let contVideo1 = document.getElementById("contVideo1");
    let contVideo2 = document.getElementById("contVideo2");
    let contVideo3 = document.getElementById("contVideo3");
    let contVideo4 = document.getElementById("contVideo4");

   
    
    /* video 1 */
    if (d == 5 && h == 4 ) {
        contVideo1.innerHTML= video1;
    }

      /* video 2 */
      if (d == 5 && h == 4 ) {
        contVideo2.innerHTML= video2;
    }

    /* video 3 */
    if (d == 5 && h == 4 ) {
        contVideo3.innerHTML= video3;
    }
    
    /* video 4 */
    if (d == 5 && h == 4 ) {
        contVideo4.innerHTML= video4;
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