<? 	if(isset($_POST['home']) && $_GET['action'] == 4){
		header('Location: /update.php?action=7&id='.$_POST['home']);
	  }
	 	elseif(isset($_POST['p']) && $_GET['action'] == 5){
			header('Location: /update.php?action=7&id='.$_POST['p']);
		}
		elseif(isset($_POST['k']) && $_GET['action'] == 5){
				header('Location: /update.php?action=7&id='.$_POST['k']);
		}
		elseif(isset($_POST['action'])){
						header('Location: /update.php?action='.$_POST['action']);
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
	4 => "Дом",
	5 => "Служебное помещение или квартира",
);
?>
<div class="container">
   <div class="row">

      <div class="col-lg-11 col-lg-offset-1">

<ul class="breadcrumb"><li><a href="#">Главная</a></li>
<li class="active">Обновление</li></ul>
</div>
</div>
</div>

<div class="container">
 <div class="ms2_product">
    <div class="col-lg-12">

<h2 class="upper">Редактирование информации в базе</h2>






	 <br>
	 <hr>
	 <br>
<?php
if(isset($_GET['action'])){$action = $_GET['action']; } else $action = 0;
switch ($action)	{
	case 0:

		echo '<form class="contact_form" action="update.php?" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Что изменить?</h2>

        </li>
        <li>';
		echo '<select name="action">';
		$i = 4;
		foreach($types as &$type){
			echo '<option value="'.($i).'">'.$type.'</option>';
			$i++;
		}

		echo '</select></li>';
		echo '<li><button class="submit" type="submit" name="add">Изменить</button></li>';
		echo '<ul></form>';
	break;
	case 4;
	echo '<a href="update.php"><< Назад</a>';
	echo '<form class="contact_form" action="update.php?action=4" method="post" name="contact_form">';
		echo '<ul>
				<li>
						 <h2>Поиск дома</h2>

				</li>';
		echo '<li><label for="country">Страна</label>
		<select onchange="javascript:getCities();" id="country" name="country">';
		echo '<option value="0">Не выбрано</option>';
		$countries = $mysqli->query("SELECT * FROM account where type = 1");
		while($parent = $countries->fetch_assoc()){
			echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';
		}
		echo '<select></li>';

	echo '<div name="selectCities"></div><div name="selectStreets"></div><div name="selectHomes"></div>';
	echo '<button class="submit" type="submit" name="save">Проверка</button></li>';
	echo '<ul></form>';
	break;
	case 5;
	echo '<a href="update.php"><< Назад</a>';
	echo '<form class="contact_form" action="update.php?action=5" method="post" name="contact_form">';
		echo '<ul>
				<li>
						 <h2>Поиск дома</h2>

				</li>';
		echo '<li><label for="country">Страна</label>
		<select onchange="javascript:getCities();" id="country" name="country">';
		echo '<option value="0">Не выбрано</option>';
		$countries = $mysqli->query("SELECT * FROM account where type = 1");
		while($parent = $countries->fetch_assoc()){
			echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';
		}
		echo '<select></li>';

	echo '<div name="selectCities"></div><div name="selectStreets"></div><div name="selectHomes"></div><div name="selectSk"></div><div name="selectp"></div>';
	echo '<button class="submit" type="submit" name="save">Изменить</button></li>';
	echo '<ul></form>';
	break;
	case 7;
	echo '<a href="update.php"><< Назад</a>';
	$edit = $mysqli->query("SELECT * FROM account where account_id = ".$_GET['id'])->fetch_assoc();
	if(isset($_POST['name']) && isset($_POST['owner']) && isset($_POST['state']) && isset($_POST['comment']) && isset($_POST['save'])){
		$query = "UPDATE account SET name = '".$_POST['name']."', owner = '".$_POST['owner']."', comment = '".$_POST['comment']."', account_state = '".$_POST['state']."' WHERE account_id = ".$edit['account_id'];
		if($mysqli->query($query)){echo '<font color="green"><center>Запись <b>'.$_POST['name'].'</b> успешно изменена.</center></font><br />'; }
		else echo '<font color="red"><center>Ошибка при изменении <b>'.$edit['name'].'</b>.</center></font><br />';
		$edit = $mysqli->query("SELECT * FROM account where account_id = ".$_GET['id'])->fetch_assoc();
	}
	echo '<form class="contact_form" action="update.php?action=7&id='.$edit['account_id'].'" method="post" name="contact_form">';
		echo '<ul>
        <li>
             <h2>Изменение "'.$edit['name'].'"</h2>
             <span class="required_notification">* Обязательное поле</span>
        </li>';
		echo '<li>
            <label for="name">Название</label>
            <input name="name" type="text" value="'.$edit['name'].'" step="any"  placeholder="20" required />
        </li>';
		echo '<li>
            <label for="name">Владелец</label>
            <input name="owner" type="text" value="'.$edit['owner'].'" step="any"  placeholder="NOVOSIBIRSK" required />
        </li>';
		echo '<li>
            <label for="name">Комментарий</label>
            <textarea name="comment" required>'.$edit['comment'].'</textarea>
        </li>';
		echo '<li>
            <label for="name">Статус установки</label>
			<select class="form-control" name="state" width =60>
			<option '.($edit['account_state'] == 0 ? 'selected="selected"' : '' ).' value="0">Снят с учета</option>
			<option '.($edit['account_state'] == 1 ? 'selected="selected"' : '' ).' value="1">Принят к учету</option>
			</select required>
        </li>';
		echo '<button class="submit" type="submit" name="save">Изменить</button></li>';
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

 <script src="./js/jquery.min.js"></script>


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
function getSk(){
$('div[name="selectSk"]').html("");
			var street_id = $('select[name="home"]').val();
		 if(!street_id){
						 $('div[name="selectSk"]').html('');

		 }else{
						 $.ajax({
										 type: "POST",
										 url: "/ajax.php",
										 data: { action: 'getSk', street_id: street_id },
										 cache: false,
										 success: function(responce){ $('div[name="selectSk"]').html(responce); }
						 });
		 };
};

function getp(){
$('div[name="selectp"]').html("");
			var home_id = $('select[name="home"]').val();
			var sk = $('select[name="sk"]').val();
		 if(!home_id && !sk){
						 $('div[name="selectp"]').html('');

		 }else{
						 $.ajax({
										 type: "POST",
										 url: "/ajax.php",
										 data: { action: 'getp', home_id: home_id, sk: sk },
										 cache: false,
										 success: function(responce){ $('div[name="selectp"]').html(responce); }
						 });
		 };
};

 </script>

<!-- Footer -->




</body>
</html>
