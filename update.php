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
<li class="active">заголовок 1</li></ul>
</div>
</div>
</div>

<div class="container">
 <div class="ms2_product">
    <div class="col-lg-12"> 
     
<h2 class="upper">заголовок 2</h2>






	 <br>
	 <hr>
	 <br>
	 
<form class="contact_form" action="map.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>мес1</h2>
             <span class="required_notification">Все поля обязательны к заполнению</span>
        </li>
        <li>
            <label for="lat">мес2:</label>
            <input name="lat" type="number" step="any"  placeholder="0000" required />
			<span class="form_hint">плитка</span>
        </li>
        <li>
            <label for="lng">мес3:</label>
            <input name="lng" type="number" step="any"  placeholder="0000" required />
            <span class="form_hint">плитка</span>
        </li>
        <li>
            <label for="zoom">мес4:</label>
            <input type="number" min="1" name="zoom" placeholder="000000" required pattern="00000"/>
            <span class="form_hint"> плитка</span>
        </li>
        <li>
        	<button class="submit" type="submit" name="map">кнопка</button>
        </li>
    </ul>
</form>

</br>
	 
	 
	 

	 
	 
	 
	 
	 
	 

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