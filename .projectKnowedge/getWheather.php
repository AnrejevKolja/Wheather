<?php
$url = 'http://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=aa2fa8d00be5cf0b79285f318608f64c';
 $json = file_get_contents($url);
 echo $json;
 $weatherObj = json_decode($json);

 echo "City: Tallinn<br>";
 echo "Temp:".$weatherObj->main->temp."<br>";
 echo "Humidity:".$weatherObj->main->humidity."<br>";