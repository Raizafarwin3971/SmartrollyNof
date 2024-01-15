<?php 
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$users = $client->users; 
$result1 = $users->createCollection('usercollection');
var_dump($result1);
?>
