<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="manifest.webmanifest">
    <script src="./js/splash.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/splash.css">
    <title>Antorcha Virtual 2020</title>

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
    //$current = time();
    $current = time() - (60*16);
    
    //echo $current;

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
    var actual = <?php echo $current; ?> 
    
    //Almacena en sessión storege
    sessionStorage.setItem('d', d);
    sessionStorage.setItem('h', h);
    sessionStorage.setItem('m', m);
    sessionStorage.setItem('s', s);
    sessionStorage.setItem('actual', actual);
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129164311-45"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129164311-45');
</script>

</head>
<body>            
    <div class="row">
        <div class="col-sm-12 splash text-center">
            <img class="img-fluid" src="./assets/img/splash.gif" alt="imagen de carga de la aplicación" >
        </div>
    </div>    
    
</body>

</html>