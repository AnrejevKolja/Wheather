<h4>Additional Info</h4>
<?php

$url = 'http://samples.openweathermap.org/data/2.5/weather?q='.$_GET['city'].'&appid=b1b15e88fa797225412429c1c50c122a1';
 $json = file_get_contents($url);
// echo $json;
 $weatherObj = json_decode($json);
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
        <td><?= $weatherObj->clouds->all; ?> %</td>
    </tr>
    <tr>
        <th>Направление ветра:</th>
        <td><?= $weatherObj->wind->deg; ?></td>
        <td><img src="http://mosautokran.ru/style/top.gif" style="-ms-transform: rotate(<?= $weatherObj->wind->deg; ?>);-webkit-transform: rotate(<?= $weatherObj->wind->deg; ?>);transform: rotate(<?= $weatherObj->wind->deg; ?>deg);"</td>
</table>
