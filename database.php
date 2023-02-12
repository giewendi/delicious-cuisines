<?php
require_once __DIR__ . "/vendor/autoload.php";
$client = new MongoDB\Client(
    'mongodb+srv://gdpinlac:gdpinlac@cluster0.8xokbod.mongodb.net/?retryWrites=true&w=majority');
//Select DB
$db = $client->dbResto;
//Select Collection
$collection = $db->colresto;
?>