

self.addEventListener('install', e=> {
    console.log("SW instalado");    
})

self.addEventListener('activate', e=>{  
    console.log("SW activo y listo para controlar la app");
})


self.addEventListener('fetch', e=>{
    //console.log("--e.request.url:", e.request.url );

    const offlineResp = new Response (` 
    Esta aplicación necesita conexión a Internet
    : (
    `);

    const resp = fetch (e.request)
    .catch (() => {
        return offlineResp;
    })




    e.respondWith(resp)
})