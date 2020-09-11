<!DOCTYPE html>

<?php
    $inicioAntorcha=1599850800;
    $current = time();
    
    echo "inicioAntorcha: ".$inicioAntorcha;
    echo "<br/>";
    echo "Actual: ".$current;
     

      //Redirect a cuenta regresvia antes del iniicio de la antorcha
      if ($current >  $inicioAntorcha ) {        
        header("Location: ../app");        
        exit;
    }
?>

<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cuenta regresiva Antorcha</title>
    <link rel="icon" href="images/ico.png">
    <link rel="stylesheet" href="vendor/bootstrap-4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="vendor/jquery-3.3.1/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="vendor/bootstrap-4.1/js/bootstrap.min.js" charset="utf-8"></script>
    
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Macondo+Swash+Caps&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/flipdown/flipdown.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <script src="https://momentjs.com/downloads/moment.min.js"></script>

    <script type="text/javascript" src="js/flipdown/flipdown.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

<!-- UNITE GALLERY -->
    <script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>	
    <script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>	

    <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />

    <script type='text/javascript' src='unitegallery/themes/default/ug-theme-default.js'></script>
    <link rel='stylesheet' 		  href='unitegallery/themes/default/ug-theme-default.css' type='text/css' />

    <link rel="stylesheet" type="text/css" href="css/style.css">



  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center">
          <img class="img-fluid titulo" src="images/titulo.gif">
          <br><br><br><br><br><br>
          
      </div>
      <div class="row justify-content-center row-first">
          <h2 class="text-center textE">Empieza en: ⏰</h2> <br>

      </div>
      <div class="row  row-flipdown pb-2 ">
        <div class="col-12">
          <div id="flipdown" class="flipdown flipdown flipdown__theme-dark"></div>
        </div>
      </div>
      <div class="row justify-content-center align-items-center">
        <div class="col-12">
          <!-- <hr> -->
          <!-- <h2 class="text-center">Texto aquí si se requiere</h2> -->
        </div>
      </div>
      <br>
      
    
    <footer id="sticky-footer" class="pt-4">
      <div class="container text-center">
        <img class="img-fluid tituloA" src="images/antorcha.gif">
        <p>Ministerio de Educación Pública &copy; 2020</p>
        <p>Comisión de fiestas Patrias</p>
        <p>DRTE-GESPRO-DDC</p>
        <img class="img-fluid tituloB" src="images/fiestas.png">
      </div>
    </footer>
    
    
    <script type="text/javascript">
  
      jQuery(document).ready(function(){
  
        jQuery("#gallery").unitegallery();
  
      });
      
    </script>
  


  </body>
</html>
