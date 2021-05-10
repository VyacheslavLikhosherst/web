<?php
$visitCounter = (isset ($_COOKIE["visitCounter"])) ? $_COOKIE["visitCounter"] : 0;
$visitCounter++;
setcookie("visitCounter", $visitCounter, time()+5);
echo "Пользователь посещал страницу $visitCounter раз";
echo "</br>";


$lastVisit = $_COOKIE["lastVisit"]; 
if (!isSet($lastVisit)) 
$lastVisit = date('Y-m-d H:i:s'); 
else 
$lastVisit = $lastVisit; 
echo "Последний раз вы заходили $lastVisit";
echo "</br>";
?>
