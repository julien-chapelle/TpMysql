<?php
setlocale(LC_ALL, 'fr_FR');

$pass = '';
$user = 'root';
$data = new PDO('mysql:host=localhost;dbname=colyseum;charset=UTF8', $user, $pass);


$carousel = 'SELECT `id`, `title`, `performer`, `date`, `picture` 
            FROM `shows`
            ORDER BY `date` LIMIT 3';
            

?>
