<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#317EFB"/>
    <title>Antorcha Virtual 2020</title>
    <link rel="shortcut icon" href="./logo64.png" type="image/png">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/escritorio.css">
    <!-- <link rel="stylesheet" href="css/mapa.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <?php
	$year = 2020;
	$month = 9;
	$day = 14;
	$hour = 18;
	$min = 00;
	$sec = 00;
	date_default_timezone_set('America/Costa_Rica');
    $zonahoraria = date_default_timezone_get();
    
	$target = mktime($hour, $min, $sec, $month, $day, $year);
	$current = time();
	$difference = $target - $current;
	$rDay = floor($difference/60/60/24);
	$rHour = floor(($difference-($rDay*60*60*24))/60/60);
	$rMin = floor(($difference-($rDay*60*60*24)-$rHour*60*60)/60);
	$rSec = floor(($difference-($rDay*60*60*24)-($rHour*60*60))-($rMin*60));
?>

<script>
  var d = <?php echo $rDay; ?>  
	var h = <?php echo $rHour; ?>  
	var m = <?php echo $rMin; ?>  
	var s = <?php echo $rSec; ?>  
</script>
    
</head>
<body>
   


    <!-- Banner -->
     <header>
        <div class="row" role="banner">            
            <div tabindex="1" class="col" >
                <img class="img-fluid" src="./assets/web/encabezado_animado.gif" alt="encabezado Antorcha virtual 2020" >
            </div>

            <div class="col"></div>

            <div class="col text-right">
                <img 
                    class="img-play"
                    id="btnModalVideos" 
                    src="./assets/img/play.png" 
                    alt="reproducir videos" >
            </div>           

            <div class="col text-right">
                <img 
                  tabindex="2" 
                  role="button"
                  class="img-fluid" 
                  id="btnAcerca" 
                  src="./assets/web/boton_antorcha.gif" 
                  alt="información acerca del aplicativo"                   
                  >
            </div>            
           
        </div>
        </header>

    <div class="container-fluid"> 

         <!-- Cuenta regresiva -->

         <div tabindex="3" class="row fondo-azul">          
            <div class="col-md-2">Llega a Cartago:</div>
            <div class="col-md-10" id="visorCuenta"></div>          
        </div>
        

        <!-- Mapa -->

        <div tabindex="4" class="row">
          <span class="sr-only"> Visor del mapa con la antorcha </span>
            <div class="col-12 cont-mapa">
              
              
            <iframe 
                    width='100%' height='100%'                     
                    src="https://geotec.maps.arcgis.com/apps/Embed/index.html?webmap=e3c7f2fe20554b2ab3aa343b99b87d3e&extent=-87.5453,7.3533,-79.4319,12.0034&zoom=true&previewImage=false&scale=false&disable_scroll=true&theme=light"
                    frameborder='0' 
                    scrolling='no'>
                </iframe>
              
            </div>            
        </div>

        <!-- Footer -->

   <footer>
   <div class="row">
        <div tabindex="5" class="col-12">
        <!-- <span class="cursiva">Soy Patria,</span>
        <span>solidaridad y esperanza</span> -->

        <img 
          class="img-fluid"
          src="./assets/web/pie_lema_antorcha2020.jpg" 
          alt="lema antorcha: Soy patria, solidaridad y esperanza" >

        </div>
        </div>
    </div>
   </footer>

      
  <!-- Modal acerca de -->
  <div class="modal fade" id="mdlAcerca" tabindex="-1" aria-labelledby="tituloAcercaDe" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tituloAcercaDe">Acerca de</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" tabindex="3">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum officia eius dolorem error harum, est itaque esse consectetur reiciendis deserunt nemo laborum. Et dolores eveniet architecto beatae quidem, unde pariatur.
        </div>
        <div class="modal-footer">

    

        </div>
      </div>
    </div>
  </div>



    <!-- Modal videos -->
    <div class="modal fade" id="mdlVideos" tabindex="-1" aria-labelledby="tituloVideos" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tituloVideos">videos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" tabindex="3">

        <div class="row">

            <div class="col">
                    <div class="card bg-light mb-3" >
                    <div class="card-header">Video 1</div>
                    <div id="contVideo1" class="card-body"> </div>
                    </div>
            </div>            

            <div class="col">
                    <div class="card bg-light mb-3">
                    <div class="card-header">Video 1</div>
                        <div id="contVideo2" class="card-body"> </div>
                    </div>
            </div>   
            
            <div class="col">
                    <div class="card bg-light mb-3">
                    <div class="card-header">Video 1</div>
                    <div id="contVideo3" class="card-body"> </div>
                    </div>
            </div>  

            <div class="col">
                    <div class="card bg-light mb-3">
                    <div class="card-header">Video 1</div>
                        <div id="contVideo4" class="card-body"> </div>
                    </div>
            </div>  
        
        </div>
  

  
     
          
        </div>


        <div class="modal-footer">

    

        </div>
      </div>
    </div>
  </div>

  <noscript>Necesita habilitar JavaScript en el navegador.</noscript>
    
</body>
<script src="./js/main.js"></script>
    
</html>