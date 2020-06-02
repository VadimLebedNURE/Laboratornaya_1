<?php

$dsn = "mysql:host=localhost; dbname=lab1var4";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $actor = $_GET["actor_film"];

    $nursestart = "SELECT film.FILM_NAME FROM film,actor,film_actor WHERE film.FILM_ID = film_actor.FILM_FID and film_actor.ACTOR_FID = actor.ACTOR_ID and actor.ACTOR_NAME = '". $actor ."'";

    foreach ($dbh->query($nursestart) as $row) {
        echo $row['FILM_NAME'];
        echo "&nbsp;";
    }
} catch (PDOException $e) {
    echo "Ошибка";
}