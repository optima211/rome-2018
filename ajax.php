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
		
		$query = $mysqli->query("SELECT * FROM account where type = 3 and parrent = ".$_POST['city_id']." ORDER BY name ");
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
		<select id="home" name="home">';
		
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

}



?>