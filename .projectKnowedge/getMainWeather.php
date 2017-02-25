<?php
echo $_GET['city'];

$url = 'http://samples.openweathermap.org/data/2.5/weather?q='.$_GET['city'].'&appid=b1b15e88fa797225412429c1c50c122a1';
 $json = file_get_contents($url);
// echo $json;
 $weatherObj = json_decode($json);
 ?>

<table class="table table-stripped">
    <tr>
        <th>Температура:</th>
        <td><?= $weatherObj->main->temp; ?></td>
    </tr>
    <tr>
        <th>Давление:</th>
        <td><?= $weatherObj->main->pressure; ?></td>
    </tr>
        <tr>
        <th>Влажность:</th>
        <td><?= $weatherObj->main->humidity; ?></td>
    </tr>
</table>
