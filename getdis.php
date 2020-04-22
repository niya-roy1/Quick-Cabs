<?php
function distance($lat1, $lon1, $lat2, $lon2, $unit) {
  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
    return 0;
  }
  else {
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
      return ($miles * 1.609344);
    } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
      return $miles;
    }
  }
}

echo distance(10.7677457,76.276381,10.7677457,76.276381, "M") . " Miles<br>";
echo distance(9.9682, 76.3182,9.9816,  76.2999, "K") . " Kilometers<br>";
echo distance(9.9682, 76.3182,9.9816,  76.2999, "N") . " Nautical Miles<br>";
?>


<!DOCTYPE html>
<html>
<form method="post">
<input type="text" name="address">
<input type="submit" name="submit" value="submit">
</form>
</html>
<?php
if(isset($_POST['submit']))
{
function getLatLong($address){
if(!empty($address)){
//Formatted address
$formattedAddr = str_replace(' ','+',$address);
//Send request and receive json data by address
$geocodeFromAddr = file_get_contents
('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false&key=AIzaSyBq1lNNV-2_dbJcN1nGa2OQhueNkvku6f8');
$output = json_decode($geocodeFromAddr);
//Get latitude and longitute from json data
$data['latitude'] = $output->results[0]->geometry->location->lat;
$data['longitude'] = $output->results[0]->geometry->location->lng;
//Return latitude and longitude of the given address
if(!empty($data)){
return $data;
}else{
return false;
}
}else{
return false;
}
}
$address = $_POST['address'];
$latLong = getLatLong($address);
$latitude = $latLong['latitude']?$latLong['latitude']:'Not found';
$longitude = $latLong['longitude']?$latLong['longitude']:'Not found';
echo "Latitude:".$latitude."<br>";
echo "longitude:".$longitude."";
}
?>