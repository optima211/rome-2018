<?
error_reporting(-1);
?>
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
	<link href="./css/table.css" rel="stylesheet" type="text/css">
	<link href="./css/link.css" rel="stylesheet" type="text/css">

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

// можно, как шаблон взять эту страницу

?>


    

<body>

<!-- Navigation -->

 <?php   include ("template/header.php");?>
 <br><br><br><br> 
<!-- Button trigger modal -->



<div class="container">
   <div class="row">
      
      <div class="col-lg-11 col-lg-offset-1"> 
   
<ul class="breadcrumb"><li><a href="index.php">Главная</a></li>
<li class="active">миграция</li></ul>
</div>
</div>
</div>

<div class="container">
 <div class="ms2_product">
    <div class="col-lg-12"> 
     
<h2 class="upper">миграция адресов точек учета</h2>


<form class="contact_form" action="migration.php" method="post" name="contact_form">
    <ul>
	        <li>
             <h2>Произвести миграцию адресов</h2>
        </li>
        <li>
        <button class="submit" type="submit" name="search"><a href="./only/migration.php" target="_blank">Миграция</a></button>
		</li>
<!---          <li>
           <h2>Поиск ошибочных записей</h2>
        </li>
        <li>
        	<button class="submit" type="submit" name="search">Найти ошибочные записи</button>
        </li> --->
    </ul>
</form>
<?php
    # Если кнопка нажата
    if( isset( $_POST['search'] ) )
    {
        # Тут пишете код, который нужно выполнить.
        # Пример:
      //  echo 'Кнопка нажата!';
		$results = $mysqli->query("SELECT * FROM geopoint where lat IS NULL");
		if(isset($results)){
			echo '<h4>обнаружены следующие ошибочные записи:</h4>';
echo '<table border="1" class="table_price">';
echo '<tr><th>номер</th><th></th></tr>';
while($row = $results->fetch_assoc()) {
    echo '<tr>';
    echo '<td>'.$row["account_id"].'</td>';
	echo '<td>'.$row["lat"].'</td>';
	echo '<td><a>Select</a></td>';
    echo '</tr>';
}
echo '</table>';
		}
		else{echo "ошибочных записей не найдено";}
// Frees the memory associated with a result
$results->free();

// close connection
$mysqli->close();
    }
?>



	 <hr>
	 <br>
	 
 
	 

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