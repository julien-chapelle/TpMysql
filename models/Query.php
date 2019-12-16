<?php
setlocale(LC_ALL, 'fr_FR.UTF-8');

$pass = '';
$user = 'root';
$data = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', $user, $pass);


$carousel = 'SELECT `id`, `title`, `performer`, `date`, `picture` 
            FROM `shows`
            ORDER BY `date` LIMIT 3';

$media_object_view = 'SELECT `id`, `firstname`, `viewClients`, `picture` 
            FROM `clients`
            ORDER BY `id`';

$media_object_shows = 'SELECT `shows`.`title`, `shows`.`performer`, `shows`.`date`, `shows`.`startTime`, `shows`.`picture`, `shows`.`officialSite`, `shows`.`duration`, `showtypes`.`type`, `shows`.`firstGenresId`, `shows`.`secondGenreId`, `genres`.`id`, `genres`.`genre`,
            CASE 
            WHEN `shows`.`secondGenreId`="3" THEN "Pop/Rock"
            WHEN `shows`.`secondGenreId`="4" THEN "Musique électronique"
            WHEN `shows`.`secondGenreId`="5" THEN "Folk"
            WHEN `shows`.`secondGenreId`="13" THEN "Funk"
            ELSE "autre"
            END AS "genre2"
            FROM `shows`
            LEFT JOIN `showtypes`
            ON `shows`.`showTypesId`=`showtypes`.`id`
            LEFT JOIN `genres`
            ON `shows`.`firstGenresId`=`genres`.`id`';

$media_object_month = 'SELECT DISTINCT DATE_FORMAT(`date`, "%M %Y")
            FROM `shows`
            ORDER BY `date` ASC';
