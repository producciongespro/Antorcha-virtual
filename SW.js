self.addEventListener('install', e=> {
    //Descarga assets
    //Crea caché
    console.log("SW instalado");    
})


//2-ATIVATE
self.addEventListener('activate', e=>{
    //Borra caché
    console.log("SW activo y listo para controlar la app");

})