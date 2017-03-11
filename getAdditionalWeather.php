<h4>Additional Info</h4>
<?php

$url = 'http://samples.openweathermap.org/data/2.5/weather?q='.$_GET['city'].'&appid=b1b15e88fa797225412429c1c50c122a1';
 $json = file_get_contents($url);
// echo $json;
 $weatherObj = json_decode($json);
 
 $clouds = $weatherObj->clouds->all;
 
 if ($clouds >0 && $clouds <= 20) {
 $imageName = "solnishko.png";
 }
 else if ($clouds >20 && $clouds <=40) {
     $imageName = "solnishko_i_oblachko.png";
 }
 else if ($clouds >40 && $clouds <=60) {
     $imageName = "solnishko_i_3oblachka.png";
 }
 else if ($clouds >60 && $clouds <=80) {
     $imageName = "solnishko_i_6oblachka.png";
 }
 else if ($clouds >80 && $clouds <=100) {
     $imageName = "solnishko_i_1big_oblachka.png";
 }
 
 
 ?>

<table class="table table-stripped">
    <tr>
        <th>Видимость:</th>
        <td><?= $weatherObj->visibility; ?></td>
    </tr>
    <tr>
        <th>Скорость ветра:</th>
        <td><?= $weatherObj->wind->speed; ?></td>
    </tr>
    <tr>
        <th>Облачность:</th>
        <td><?= $weatherObj->clouds->all; ?> %></td>
        <td><img src="images/<?= $imageName; ?>"></td>
         
    </tr>
    <tr>
        <th>Направление ветра:</th>
        <td><?= $weatherObj->wind->deg; ?></td>
        <td><img src="http://savepic.ru/13119792.png" style="-ms-transform: rotate(<?= $weatherObj->wind->deg; ?>);-webkit-transform: rotate(<?= $weatherObj->wind->deg; ?>);transform: rotate(<?= $weatherObj->wind->deg; ?>deg);"</td>
</table>
