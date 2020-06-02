<?php require "ultra/genre_up.php"; ?>
<?php require "ultra/actors_up.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="genre.php">
    <p><b>список фильмов выбранного жанра</b></p>
    <select name="genre">
        <?php
        foreach ($outputGenre as $genre) {
            echo "<option value=\"$genre\">$genre</option>";
        }
        ?>
    </select>
    <p><input type="submit" value="Выбрать"></p>
</form>
<form action="actor.php">
    <p><b>список фильмов с выбранным актером</b></p>
    <select name="actor_film">
        <?php
        foreach ($outputActor as $actor) {
            echo "<option value=\"$actor\">$actor</option>";
        }
        ?>
    </select>
    <p><input type="submit" value="Выбрать"></p>
</form>
<form action="date_film.php">
    <p><b>список фильмов за указанный временной интервал</b></p>
    <input type="date" name="date_start" required="required">
       <input type="date" name="date_end" required="required">
    <p><input type="submit" value="Выбрать"></p>
</form>
</body>
</html>