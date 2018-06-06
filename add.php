<? 	if(isset($_POST['action'])){
		header('Location: /add.php?action='.$_POST['action']);
	}
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
<?
$types = array(
	1 => "Страна",
	2 => "Город"
);
?>
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
<?php
if(isset($_GET['action'])){$action = $_GET['action']; } else $action = 0;
switch ($action)	{
	case 0:

		echo '<form class="contact_form" action="add.php?" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Что добавить?</h2>
			 
        </li>
        <li>';
		echo '<select name="action">';
		$i = 0;
		foreach($types as &$type){
			echo '<option value="'.($i+1).'">'.$type.'</option>';
			$i++;
		}
		
		echo '</select></li>';
		echo '<li><button class="submit" type="submit" name="add">Добавить</button></li>';
		echo '<ul></form>';
	break;
	case 1;
	echo '<a href="add.php"><< Назад</a>';
	if(isset($_POST['name']) && isset($_POST['owner']) && isset($_POST['save'])){
		$query = "INSERT INTO account VALUE(NULL,1,'".$_POST['name']."',0,'".$_POST['comment']."','".$_POST['owner']."',0)";
		if($mysqli->query($query)){echo '<font color="green"><center>Страна <b>'.$_POST['name'].'</b> успешно добавлена</center></font><br />'; }
		else echo '<font color="red"><center>Ошибка при добавлении страны <b>'.$_POST['name'].'</b>.</center></font><br />';
	}
	echo '<form class="contact_form" action="add.php?action='.$_GET['action'].'" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Добавление страны</h2>
			 
        </li>';
		echo '<li>
            <label for="name">Название</label>
            <input name="name" type="text" step="any"  placeholder="Россия" required />
        </li>';
		echo '<li>
            <label for="name">Владелец</label>
            <input name="owner" type="text" step="any"  placeholder="NOVOSIBIRSK" required />
        </li>';
		echo '<li>
            <label for="name">Комментарий</label>
            <textarea name="comment"></textarea>
        </li>';
		
		echo '<button class="submit" type="submit" name="save">Добавить</button></li>';
		echo '<ul></form>';
	break;
	case 2;
	echo '<a href="add.php"><< Назад</a>';
	if(isset($_POST['name']) && isset($_POST['owner']) && isset($_POST['save'])){
		$query = "INSERT INTO account VALUE(NULL,2,'".$_POST['name']."','".$_POST['country']."','".$_POST['comment']."','".$_POST['owner']."',0)";
		if($mysqli->query($query)){echo '<font color="green"><center>Город <b>'.$_POST['name'].'</b> успешно добавлен.</center></font><br />'; }
		else echo '<font color="red"><center>Ошибка при добавлении города <b>'.$_POST['name'].'</b>.</center></font><br />';
	}
	echo '<form class="contact_form" action="add.php?action='.$_GET['action'].'" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Добавление города</h2>
			 
        </li>';
		echo '<li><label for="country">Страна</label>
<select name="country">';
		$countries = $mysqli->query("SELECT * FROM account where type = 1");
		while($parent = $countries->fetch_assoc()){
			echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';
		}
		echo '<select></li>';
		echo '<li>
            <label for="name">Название</label>
            <input name="name" type="text" step="any"  placeholder="Новосибирск" required />
        </li>';
		echo '<li>
            <label for="name">Владелец</label>
            <input name="owner" type="text" step="any"  placeholder="NOVOSIBIRSK" required />
        </li>';
		echo '<li>
            <label for="name">Комментарий</label>
            <textarea name="comment"></textarea>
        </li>';
		
		echo '<button class="submit" type="submit" name="save">Добавить</button></li>';
		echo '<ul></form>';
	break;
}
?>
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