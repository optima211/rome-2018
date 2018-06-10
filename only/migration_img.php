<?
while($t = $mysqli->query("SELECT * FROM geopoint WHERE a = 0")->fetch_assoc()){
$mysqli->query("UPDATE geopoint SET a = 1 WHERE account_id = ".$t['account_id']);
$src = 'https://maps.googleapis.com/maps/api/staticmap?center='.$t['lat'].','.$t['lng'].'&markers=color:red%7Clabel:C%7C'.$t['lat'].','.$t['lng'].'&zoom=16&size=600x400&key='.$googleKey.'';
file_put_contents('graphics/'.$t['account_id'].'.png',file_get_contents($src));
}
?>