<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#317EFB"/>
    <title>Antorcha Virtual 2020</title>
    <link rel="shortcut icon" href="./logo64.png" type="image/png">
    <link rel="manifest" href="manifest.webmanifest">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">     
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/master.css">
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
    <!-- 
        orignal
        https://geotec.maps.arcgis.com/apps/TimeAware/index.html?appid=f40dab64757d4ee9a0e9f0b65b0782d4
        segundo
        https://geotec.maps.arcgis.com/apps/webappviewer/index.html?id=cb83985b5d504791b3b9979dc2af5b13
     -->

    <div class="container">

    <!-- Banner -->

        <header>
        <div class="row" role="banner">            
            <div tabindex="1" class="col-8" >
                <span  class="titulo1" >Recorrido Virtual</span>
                <span  class="titulo2" >de la Antorcha</span>
                <span  class="titulo3" >2020</span>
            </div>            
            <div class="col-4">
                <img 
                  tabindex="2" 
                  role="button"
                  class="img-peq" 
                  id="btnAcerca" 
                  src="./assets/img/btn_antorcha.png" 
                  alt="información acerca del aplicativo"                   
                  >
            </div>            
        </div>
        </header>

        <!-- Cuenta regresiva -->

        <div tabindex="3" class="row fondo-azul">          
            <div class="col-4">Llega a Cartago:</div>
            <div class="col-8" id="visorCuenta"></div>          
        </div>
        

        <!-- Mapa -->

        <div tabindex="4" class="row">
          <span class="sr-only"> Visor del mapa con la antorcha </span>
            <div class="col-sm-12 cont-mapa">
              
              
            <iframe 
                    width='100%' height='100%' 
                    src="https://geotec.maps.arcgis.com/apps/Embed/index.html?webmap=0d1686075b2a4a1d9f6093ab1b7f1717&extent=-86.3154,9.0943,-82.2587,11.4157&zoom=true&previewImage=false&scale=true&legend=true&disable_scroll=true&theme=light"
                    frameborder='0' 
                    scrolling='no'>
                </iframe>
              
            </div>            
        </div>

        <!-- Footer -->

   <footer>
   <div class="row">
        <div tabindex="5" class="col-sm-12">
        <span class="cursiva">Soy Patria,</span>
        <span>solidaridad y esperanza</span>
        </div>
        </div>
    </div>
   </footer>

      
  <!-- Modal -->
  <div class="modal fade" id="mdlAcerca" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Acerca de</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" tabindex="3">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum officia eius dolorem error harum, est itaque esse consectetur reiciendis deserunt nemo laborum. Et dolores eveniet architecto beatae quidem, unde pariatur.
        </div>
        <div class="modal-footer">
<!-- 

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>

 -->
    

        </div>
      </div>
    </div>
  </div>

  <noscript>Necesita habilitar JavaScript en el navegador.</noscript>
    
</body>
<script src="./js/main.js"></script>
    
</html>