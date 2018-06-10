<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<base href=".">
    <title>АО "Радио и Микроэлектроника"</title>
    <link href="#" rel="shortcut icon" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    
    <!-- подключение CSS файла Fancybox -->
   <link rel="stylesheet" href="./css/jquery.fancybox.css" type="text/css" media="screen">

    <!-- Custom CSS -->
    <link href="./css/modern-business.css" rel="stylesheet">
	<link href="./css/input.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    
    <link href="./css/css" rel="stylesheet" type="text/css">
    <link href="./css/css(1)" rel="stylesheet">
    <link href="./css/css(2)" rel="stylesheet">
			<!-- !!!!!!!<link rel="stylesheet" type="text/css" href="./css/modal-contact-form.css" /> -->
   
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">jQuery.noConflict();</script>
<script src="/templates/<?php// echo $this->template ?>/facebox/facebox.js"></script>
<link href="/templates/<?php// echo $this->template ?>/facebox/facebox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    jQuery(document).ready(function(jQuery) {
      jQuery('a[rel*=facebox]').facebox({
      })
    })
</script> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?

include_once('./lib/connect.php');



?>


    

<body>

<!-- Navigation -->

 <?php   include ("template/header.php");?>
 <br><br><br><br> 
<!-- Button trigger modal -->



<div class="container">
   <div class="row">
      
      <div class="col-lg-11 col-lg-offset-1"> 
   
<ul class="breadcrumb"><li><a href="#">Главная</a></li>
<li class="active">Просмотр</li></ul>
</div>
</div>
</div>

<div class="container">
 <div class="ms2_product">
    <div class="col-lg-12"> 
     
<h2 class="upper">Просмотр по коордниатам</h2>






	 <br>
	 <hr>
	 <br>
	 
<form class="contact_form" action="map.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Просмотр по коордниатам</h2>
             <span class="required_notification">Все поля обязательны к заполнению</span>
        </li>
        <li>
            <label for="lat">Широта:</label>
            <input name="lat" type="number" step="any"  placeholder="41.247" required />
			<span class="form_hint">Введите число формата "0.00000"</span>
        </li>
        <li>
            <label for="lng">Долгота:</label>
            <input name="lng" type="number" step="any"  placeholder="94.215" required />
            <span class="form_hint">Введите число формата "0.00000"</span>
        </li>
        <li>
            <label for="zoom">Масштаб:</label>
            <input type="number" min="1" name="zoom" placeholder="14" required pattern="(http|https)://.+"/>
            <span class="form_hint"> Чем больше число, тем более бриближено изображение карты</span>
        </li>
        <li>
        	<button class="submit" type="submit" name="map">Найти</button>
        </li>
    </ul>
</form>
        <?php
        if(isset($_POST['lat']))
        {
            $lat=$_POST['lat'];
            $lng=$_POST['lng'];
		$zoom=$_POST['zoom'];
		echo '<h3>Введенные данные</h3>
        
 <table id="tborder" name="tborder" border="2px">
<tr>     <td>Широта:</td> <td>'; echo $lat; echo'</td></tr>
<tr>     <td>Долгота:</td> <td>'; echo $lng; echo'</td></tr>
<tr>     <td>Масштаб:</td> <td>'; echo $zoom; echo'</td></tr>
 </table>';
		
		}
        ?>

</br>
  <link href="../css/google.css" rel="stylesheet" type="text/css">
 <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: <? echo $lat; ?>, lng: <? echo $lng; ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: <? echo $zoom; ?>,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<? echo $key; ?>&callback=initMap">
    </script>	 
	 
	 

	 
	 
	 
	 
	 
	 

<div class="pagin 897061acae4878988cdc752665e07dfede081a1e" id="pagin"><div class="pagination"><ul class="pagination"><li class="control"><a href="#" data-pagin="page" id="next">»</a></li></ul></div></div>

<!-- totop -->
<div class="col-md-1 col-md-offset-11 col-sm-2 col-sm-offset-10 col-xs-5 col-xs-offset-7">
<div id="scroller"></div>
</div>
</div>
</div>
</div> 
 <!-- jQuery -->
   <script src="./js/users.js"></script>
 <?php   include ("template/footer.php");?>

    
<!-- Footer -->




</body>
</html>