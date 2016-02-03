
<?php

//Calculate the sunrise time for Brazil, Sao Paulo
//Latitude: 23.533773 South
//Longitude: 46.625290 West
//Zenith ~= 90
//offset: +1 GMT

echo("<h2>America, Brazil (Sao Paulo city) </h2>");
echo("Date: " . date("M d Y"));
echo("<br>Sunrise time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,23.5,-9,90,1));
echo("<br>Sunset time: ");
echo(date_sunset(time(),SUNFUNCS_RET_STRING,46.6,-9,90,1));

echo "<br>";

date_default_timezone_set ('America/Sao_Paulo');

echo "The current tme is ". date ("h:i:sa");

?>
