<?php
include_once('./lib/connect.php');
switch($_POST['action']){

	case "getCities":

	echo '<li><label for="city">Город</label>
		<select onchange="javascript:getStreets();" id="city" name="city">';

		$query = $mysqli->query("SELECT * FROM account where type = 2 and parrent = ".$_POST['country_id']);
		$count = $query->num_rows;
		if($count == 0){
				echo '<option value="0">Города не найдены</option>';
			}else{
				echo '<option value="0">Не выбрано</option>';
		while($parent = $query->fetch_assoc()){

			echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';

		}
			}
		echo '<select></li>';

	break;

	case "getStreets":

	echo '<li><label for="street">Улица</label>
		<select onchange="javascript:getHomes();" id="street" name="street">';

		$query = $mysqli->query("SELECT * FROM account where type = 3 and parrent = ".$_POST['city_id']." ORDER BY name ASC");
		$count = $query->num_rows;
		if($count == 0){
				echo '<option value="0">Улицы не найдены</option>';
			}else{
				echo '<option value="0">Не выбрано</option>';
		while($parent = $query->fetch_assoc()){

			echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';

		}
			}
		echo '<select></li>';

	break;
	case "getHomes":

	echo '<li><label for="street">Дом</label>
		<select id="home" onchange="javascript:getSk();" name="home">';

		$query = $mysqli->query("SELECT * FROM account where type = 4 and parrent = ".$_POST['street_id']);
		$count = $query->num_rows;
		if($count == 0){
				echo '<option value="0">Дома не найдены</option>';
			}else{
				echo '<option value="0">Не выбрано</option>';
		while($parent = $query->fetch_assoc()){

			echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';

		}
			}
		echo '<select></li>';

	break;
	case "getSk":

	echo '<li><label for="sk">Тип помещения</label>
		<select id="sk" onchange="javascript:getp();" name="sk">';
				echo '<option value="0">Не выбрано</option>';
				echo '<option value="5">Квартира</option>';
			  echo '<option value="6">Служебное помещение</option>';
		echo '<select></li>';

	break;
	case "getp":

	if($_POST['sk'] == '5'){
		echo '<li><label for="k">Квартира</label>
			<select id="k" name="k">';

			$query = $mysqli->query("SELECT * FROM account where type = 5 and parrent = ".$_POST['home_id']);
			$count = $query->num_rows;
			if($count == 0){
					echo '<option value="0">Квартиры не найдены</option>';
				}else{
					echo '<option value="0">Не выбрано</option>';
			while($parent = $query->fetch_assoc()){

				echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';

			}
				}
			echo '<select></li>';
	}
	elseif($_POST['sk'] == '6') {
		echo '<li><label for="p">Служебное помещение</label>
			<select id="p" name="p">';

			$query = $mysqli->query("SELECT * FROM account where type = 6 and parrent = ".$_POST['home_id']);
			$count = $query->num_rows;
			if($count == 0){
					echo '<option value="0">Служебное помещение не найдены</option>';
				}else{
					echo '<option value="0">Не выбрано</option>';
			while($parent = $query->fetch_assoc()){

				echo '<option value="'.$parent['account_id'].'">'.$parent['name'].'</option>';

			}
				}
			echo '<select></li>';
	}

	break;

}



?>
