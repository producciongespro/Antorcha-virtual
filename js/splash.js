window.onload = function() {
    detectarPlataforma();
};


  function detectarPlataforma() {
        var plataforma = navigator.platform;
        //Prueba dispositivo movil
        //var plataforma = "Linux armv7l";
        console.log(plataforma);
        switch (plataforma) {
          case "Linux armv7l":
          case "Linux armv8l":
          case "iPhone":
          case "iPad":
            plataforma = "movil";
            break;
          case "win32":
            plataforma = "escritorio";
            //plataforma = "movil";
            break;
          default:
            plataforma = "escritorio";
            //plataforma = "movil";
            break;
        }
        redirect(plataforma)
        sessionStorage.setItem("tipoPlataforma", plataforma);
        
      }


      function redirect(params) {

            setTimeout(() => {
                
            }, () => {
                if (params == "escritorio") {
                    window.location.replace("./escritorio.php");      
                  }
                  if (params == "movil") {
                    window.location.replace("./movil.php");      
                  }
            });


        
          
      }
