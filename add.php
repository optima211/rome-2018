<? 	if(isset($_POST['action'])){
		header('Location: /add.php?action='.$_POST['action']);
		error_reporting (-1);
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
	2 => "Город",
	3 => "Улица",
	4 => "Дом",
	5 => "Квартира",
	6 => "Служебное помещение"
);
?>
<div class="container">
   <div class="row">

      <div class="col-lg-11 col-lg-offset-1">

<ul class="breadcrumb"><li><a href="index.php">Главная</a></li>
<li class="active">Добавление</li></ul>
</div>
</div>
</div>

<div class="container">
 <div class="ms2_product">
    <div class="col-lg-12">

<h2 class="upper">Добавление информации в базу</h2>






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
	if(isset($_POST['name']) && isset($_POST['save'])){
		$results = $mysqli->query("SELECT COUNT(*) AS n FROM account where (name = '".$_POST['name']."' AND type= 1)");
		$row = $results->fetch_assoc();
		echo $row["n"];
		if ($row["n"] == 0)
		{
		$query = "INSERT INTO account VALUE(NULL,1,'".$_POST['name']."',0,'".$_POST['comment']."','".$_POST['owner']."',0)";
		if($mysqli->query($query)){echo '<font color="green"><center>Страна <b>'.$_POST['name'].'</b> успешно добавлена</center></font><br />'; }
		else echo '<font color="red"><center>Ошибка при добавлении страны <b>'.$_POST['name'].'</b>.</center></font><br />';
		}
		else
		{
			echo '<h3>Введите другое значение</h3>';
		}
	}
	echo '<form class="contact_form" action="add.php?action='.$_GET['action'].'" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Добавление страны</h2>
             <span class="required_notification">* Обязательное поле</span>

        </li>';
		echo '<li>
            <label for="name">Название</label>
            <input name="name" type="text" step="any" placeholder="Россия" required />
        </li>';
		echo '<li>
            <label for="name">Владелец</label>
            <input name="owner" type="text" step="any"  placeholder="NOVOSIBIRSK" />
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
		$results = $mysqli->query("SELECT COUNT(*) FROM account where (name = '".$_POST['name']."' AND type= 2 AND owner = '".$_POST['country']."')");
		if ($results == 0)
		{
		$query = "INSERT INTO account VALUE(NULL,2,'".$_POST['name']."','".$_POST['country']."','".$_POST['comment']."','".$_POST['owner']."',0)";
		if($mysqli->query($query)){echo '<font color="green"><center>Город <b>'.$_POST['name'].'</b> успешно добавлен.</center></font><br />'; }
		else echo '<font color="red"><center>Ошибка при добавлении города <b>'.$_POST['name'].'</b>.</center></font><br />';
		}
		else
		{
		echo '<h3>Введите другое значение</h3>';
		}	
	}
	
	
	
	echo '<form class="contact_form" action="add.php?action='.$_GET['action'].'" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Добавление города</h2>
             <span class="required_notification">* Обязательное поле</span>

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



	case 3;
	echo '<a href="add.php"><< Назад</a>';
	if(isset($_POST['name']) && isset($_POST['owner']) && isset($_POST['save'])){
		$results = $mysqli->query("SELECT COUNT(*) FROM account where (name = '".$_POST['name']."' AND type= 3 AND owner = '".$_POST['city']."')");
		if ($results == 0)
		{
		$query = "INSERT INTO account VALUE(NULL,3,'".$_POST['name']."','".$_POST['city']."','".$_POST['comment']."','".$_POST['owner']."',0)";
		if($mysqli->query($query)){echo '<font color="green"><center>Улица <b>'.$_POST['name'].'</b> успешно добавлена.</center></font><br />'; }
		else echo '<font color="red"><center>Ошибка при добавлении улицы <b>'.$_POST['name'].'</b>.</center></font><br />';
		}
		else
		{
		echo '<h3>Введите другое значение</h3>';
		}			
		}
	echo '<form class="contact_form" action="add.php?action='.$_GET['action'].'" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Добавление улицы</h2>
             <span class="required_notification">* Обязательное поле</span>
        </li>';
		echo '<li><label for="country">Страна</label>
<select onchange="javascript:getCities();" id="country" name="country">';
		echo '<option value="0">Не выбрано</option>';
		$cities = $mysqli->query("SELECT * FROM account where type = 1");
		while($parent = $cities->fetch_assoc()){
			echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';
		}
		echo '<select></li>';
		echo '<div name="selectCities"></div>';
		echo '<li>
            <label for="name">Название</label>
            <input name="name" type="text" step="any"  placeholder="Ленина" required />
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
	case 4;
	echo '<a href="add.php"><< Назад</a>';
	if(isset($_POST['name']) && isset($_POST['city']) && isset($_POST['city']) &&  isset($_POST['country']) && isset($_POST['owner']) && isset($_POST['state']) && isset($_POST['save'])){
		$results = $mysqli->query("SELECT COUNT(*) FROM account where (name = '".$_POST['name']."' AND type= 3 AND owner = '".$_POST['street']."')");
		if ($results == 0)
		{
		$query = "INSERT INTO account VALUE(NULL,4,'".$_POST['name']."','".$_POST['street']."','".$_POST['comment']."','".$_POST['owner']."','".$_POST['state']."')";
		if($mysqli->query($query)){echo '<font color="green"><center>Дом <b>'.$_POST['name'].'</b> успешно добавлен.</center></font><br />';
		if(isset($_POST['x']) && isset($_POST['y'])) {
		$acc_id = $mysqli->insert_id;
		$query2 = "INSERT INTO geopoint VALUE(".$acc_id.", ".$_POST['x'].", ".$_POST['y'].")";
		if($mysqli->query($query2)){echo '<font color="green"><center>Координаты '.$_POST['x'].'x'.$_POST['y'].'</center></font><br />'; }
		}
		}
		else echo '<font color="red"><center>Ошибка при добавлении дома <b>'.$_POST['name'].'</b>.</center></font><br />';
		}
		else
		{
		echo '<h3>Введите другое значение</h3>';
		}			
		
		
		
	}
	echo '<form class="contact_form" action="add.php?action='.$_GET['action'].'" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Добавление дома</h2>
             <span class="required_notification">* Обязательное поле</span>
        </li>';
		echo '<li><label for="country">Страна</label>
<select onchange="javascript:getCities();" id="country" name="country">';
		echo '<option value="0">Не выбрано</option>';
		$cities = $mysqli->query("SELECT * FROM account where type = 1");
		while($parent = $cities->fetch_assoc()){
			echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';
		}
		echo '<select></li>';
		echo '<div name="selectCities"></div><div name="selectStreets"></div>';
		echo '<li>
            <label for="name">Координаты</label>
            <input size="7" name="x" type="number" step="any"  placeholder="20.01234" /> x <input size="7" name="y" type="number" step="any"  placeholder="20.01234" />
        </li>';
		echo '<li>
            <label for="name">Название</label>
            <input name="name" type="text" step="any"  placeholder="20" required />
        </li>';
		echo '<li>
            <label for="name">Владелец</label>
            <input name="owner" type="text" step="any"  placeholder="NOVOSIBIRSK" required />
        </li>';
		echo '<li>
            <label for="name">Комментарий</label>
            <textarea name="comment" required></textarea>
        </li>';
		echo '<li>
            <label for="name">Статус установки</label>
			<select class="form-control" name="state" width =60>
			<option value="0">Снят с учета</option>
			<option value="1">Принят к учету</option>
			</select required>
        </li>';
		echo '<button class="submit" type="submit" name="save">Добавить</button></li>';
		echo '<ul></form>';
	break;
	case 5;
	echo '<a href="add.php"><< Назад</a>';
	if(isset($_POST['name']) && isset($_POST['city']) && isset($_POST['city']) &&  isset($_POST['country']) && isset($_POST['owner']) && isset($_POST['state']) && isset($_POST['save'])){
		$results = $mysqli->query("SELECT COUNT(*) FROM account where (name = '".$_POST['name']."' AND type= 3 AND owner = '".$_POST['home']."')");
		if ($results == 0)
		{
		$query = "INSERT INTO account VALUE(NULL,5,'".$_POST['name']."','".$_POST['home']."','".$_POST['comment']."','".$_POST['owner']."','".$_POST['state']."')";
		if($mysqli->query($query)){echo '<font color="green"><center>Квартира <b>'.$_POST['name'].'</b> успешно добавлена.</center></font><br />'; }
		else echo '<font color="red"><center>Ошибка при добавлении квартиры <b>'.$_POST['name'].'</b>.</center></font><br />';
		}
		else
		{
		echo '<h3>Введите другое значение</h3>';
		}	
	}
	echo '<form class="contact_form" action="add.php?action='.$_GET['action'].'" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Добавление квартиры</h2>
             <span class="required_notification">* Обязательное поле</span>
        </li>';
		echo '<li><label for="country">Страна</label>
<select onchange="javascript:getCities();" id="country" name="country">';
		echo '<option value="0">Не выбрано</option>';
		$cities = $mysqli->query("SELECT * FROM account where type = 1");
		while($parent = $cities->fetch_assoc()){
			echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';
		}
		echo '<select></li>';
		echo '<div name="selectCities"></div><div name="selectStreets"></div><div name="selectHomes"></div>';
		echo '<li>
            <label for="name">Название</label>
            <input name="name" type="text" step="any"  placeholder="20" required />
        </li>';
		echo '<li>
            <label for="name">Владелец</label>
            <input name="owner" type="text" step="any"  placeholder="NOVOSIBIRSK" required />
        </li>';
		echo '<li>
            <label for="name">Комментарий</label>
            <textarea name="comment" required></textarea>
        </li>';
		echo '<li>
            <label for="name">Статус установки</label>
			<select class="form-control" name="state" width =60>
			<option value="0">Снят с учета</option>
			<option value="1">Принят к учету</option>
			</select required>
        </li>';
		echo '<button class="submit" type="submit" name="save">Добавить</button></li>';
		echo '<ul></form>';
	break;
	case 6;
	echo '<a href="add.php"><< Назад</a>';
	if(isset($_POST['name']) && isset($_POST['city']) && isset($_POST['city']) &&  isset($_POST['country']) && isset($_POST['owner']) && isset($_POST['state']) && isset($_POST['save'])){

		$results = $mysqli->query("SELECT COUNT(*) FROM account where (name = '".$_POST['name']."' AND type= 3 AND owner = '".$_POST['home']."')");
		if ($results == 0)
		{
		$query = "INSERT INTO account VALUE(NULL,6,'".$_POST['name']."','".$_POST['home']."','".$_POST['comment']."','".$_POST['owner']."','".$_POST['state']."')";
		if($mysqli->query($query)){echo '<font color="green"><center>Служебное помещение <b>'.$_POST['name'].'</b> успешно добавлено.</center></font><br />'; }
		else echo '<font color="red"><center>Ошибка при добавлении служебного помещения <b>'.$_POST['name'].'</b>.</center></font><br />';
		}
		else
		{
		echo '<h3>Введите другое значение</h3>';
		}	
	}
	echo '<form class="contact_form" action="add.php?action='.$_GET['action'].'" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Добавление служебного помещения</h2>
             <span class="required_notification">* Обязательное поле</span>
        </li>';
		echo '<li><label for="country">Страна</label>
<select onchange="javascript:getCities();" id="country" name="country">';
		echo '<option value="0">Не выбрано</option>';
		$cities = $mysqli->query("SELECT * FROM account where type = 1");
		while($parent = $cities->fetch_assoc()){
			echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';
		}
		echo '<select></li>';
		echo '<div name="selectCities"></div><div name="selectStreets"></div><div name="selectHomes"></div>';
		echo '<li>
            <label for="name">Название</label>
            <input name="name" type="text" step="any"  placeholder="20" required />
        </li>';
		echo '<li>
            <label for="name">Владелец</label>
            <input name="owner" type="text" step="any"  placeholder="NOVOSIBIRSK" required />
        </li>';
		echo '<li>
            <label for="name">Комментарий</label>
            <textarea name="comment" required></textarea>
        </li>';
		echo '<li>
            <label for="name">Статус установки</label>
			<select class="form-control" name="state" width =60>
			<option value="0">Снят с учета</option>
			<option value="1">Принят к учету</option>
			</select required>
        </li>';
		echo '<button class="submit" type="submit" name="save">Добавить</button></li>';
		echo '<ul></form>';
	break;

}
?>
</br>
</br>
</br>












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
		



</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</html>
