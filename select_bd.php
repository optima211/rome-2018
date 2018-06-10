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
include ('../template/google_maps_api.php')


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
<li class="active">просмотр</li></ul>
</div>
</div>
</div>

<div class="container">
 <div class="ms2_product">
    <div class="col-lg-12"> 
     
<h2 class="upper">Просмотр данных из базы</h2>

	 

</br>
	<?php 
	
	switch($_GET['action']){
	default:
	 echo '<a href="select_db.php"><< Назад</a>';
	echo $_POST['country'].'-'.$_POST['city'].'-'.$_POST['street'].'-'.$_POST['home'].'<br />';
	echo '<form class="contact_form" action="select_bd.php?action=view" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Просмотр по адресу</h2>
			 
        </li>';
		echo '<li><label for="country">Страна</label>
		<select onchange="javascript:getCities();" id="country" name="country">';
		echo '<option value="0">Не выбрано</option>';
		$countries = $mysqli->query("SELECT * FROM account where type = 1");
		while($parent = $countries->fetch_assoc()){
			echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';
		}
		echo '<select></li>';
		
		
		
		?>
		<script>
			function getCities(){
			$('div[name="selectStreets"]').html("");
			$('div[name="selectCities"]').html("");
				 var country_id = $('select[name="country"]').val();
        if(!country_id){
                $('div[name="selectCities"]').html('');
                
        }else{
                $.ajax({
                        type: "POST",
                        url: "/ajax.php",
                        data: { action: 'getCities', country_id: country_id },
                        cache: false,
                        success: function(responce){ $('div[name="selectCities"]').html(responce); }
                });
        };
};		

function getStreets(){
	$('div[name="selectStreets"]').html("");
				 var city_id = $('select[name="city"]').val();
        if(!city_id){
                $('div[name="selectStreets"]').html('');
                
        }else{
                $.ajax({
                        type: "POST",
                        url: "/ajax.php",
                        data: { action: 'getStreets', city_id: city_id },
                        cache: false,
                        success: function(responce){ $('div[name="selectStreets"]').html(responce); }
                });
        };
};	

function getHomes(){
	$('div[name="selectHomes"]').html("");
				 var street_id = $('select[name="street"]').val();
        if(!street_id){
                $('div[name="selectHomes"]').html('');
                
        }else{
                $.ajax({
                        type: "POST",
                        url: "/ajax.php",
                        data: { action: 'getHomes', street_id: street_id },
                        cache: false,
                        success: function(responce){ $('div[name="selectHomes"]').html(responce); }
                });
        };
};			
	
		</script>
		
	<?php
	 
		echo '<div name="selectCities"></div><div name="selectStreets"></div><div name="selectHomes"></div>';
	?>
	<li>
            <label for="zoom">Масштаб:</label>
            <input type="number" min="1" name="zoom" placeholder="14" required pattern="(http|https)://.+"/>
            <span class="form_hint"> Чем больше число, тем более бриближено изображение карты</span>
        </li>
	<?
		echo '<button class="submit" type="submit" name="save">Проверка</button></li>';
		echo '<ul></form>';
		break;
	
	 ?>

<? 
case 'view':
$country = $mysqli->query("SELECT * FROM account where account_id = ".$_POST['country'])->fetch_assoc();
$city = $mysqli->query("SELECT * FROM account where account_id = ".$_POST['city'])->fetch_assoc();
$street = $mysqli->query("SELECT * FROM account where account_id = ".$_POST['street'])->fetch_assoc();
$home = $mysqli->query("SELECT * FROM account where account_id = ".$_POST['home'])->fetch_assoc();
$homegeo = $mysqli->query("SELECT * FROM geopoint where account_id = ".$_POST['home'])->fetch_assoc();
$address = $country['name'].', '.$city['name'].', '.$street['name'].', '.$home['name'];
$lat = $homegeo['lat']; $lng = $homegeo['lng']; $zoom = $_POST['zoom'];

echo $address;
echo '<br /><img src="graphics/'.$homegeo['account_id'].'.png"/>';





break;


	}	 
	 
	 
 ?>

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

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


</body>
</html>