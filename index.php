<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="manifest.webmanifest">
    <script src="./js/splash.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/splash.css">
    <title>Antorcha Virtual 2020</title>

    <?php
    $inicioAntorcha=1599844740;
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
    
    //echo $current;

	$difference = $target - $current;
	$rDay = floor($difference/60/60/24);
	$rHour = floor(($difference-($rDay*60*60*24))/60/60);
	$rMin = floor(($difference-($rDay*60*60*24)-$rHour*60*60)/60);
    $rSec = floor(($difference-($rDay*60*60*24)-($rHour*60*60))-($rMin*60));
    
    //Redirect a cuenta regresvia antes del iniicio de la antorcha
    if ($current <  $inicioAntorcha ) {
        header("Location: ./regresiva/");
        exit;
    }
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

</head>
<body>             
           


    <div class="row">
        <div class="col-sm-12 splash text-center">
            <img class="img-fluid" src="./assets/img/splash.gif" alt="imagen de carga de la aplicación" >
        </div>
    </div>

    <iframe width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="AntorchaV2" src="//geotec.maps.arcgis.com/apps/Embed/index.html?webmap=e3c7f2fe20554b2ab3aa343b99b87d3e&extent=-87.5453,7.3533,-79.4319,12.0034&zoom=true&previewImage=false&scale=false&disable_scroll=true&theme=light"></iframe>
    
</body>

</html>