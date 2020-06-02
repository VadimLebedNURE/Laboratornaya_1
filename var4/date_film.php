<?php

$dsn = "mysql:host=localhost; dbname=lab1var4";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $date1 = $_GET["date_start"];
	$date2 = $_GET["date_end"];

    $datestart = "SELECT film.FILM_NAME FROM film WHERE film.FILM_DATE BETWEEN '". $date1 ."' AND '". $date2 ."'";

    foreach ($dbh->query($datestart) as $row) {
        echo $row['FILM_NAME'];
        echo "&nbsp;";
    }
} catch (PDOException $e) {
    echo "Ошибка";
}