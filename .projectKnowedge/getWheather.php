<?php
$url = 'http://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=b1b15e88fa797225412429c1c50c122a1';
 $json = file_get_contents($url);
// echo $json;
 $weatherObj = json_decode($json);

 echo "City: Tallinn<br>";
 echo "Temp:".$weatherObj->main->temp."<br>";
 echo "Humidity:".$weatherObj->main->humidity."<br>";