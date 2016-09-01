<?php

$encodedString = $_POST['image'];

echo $_POST['image'];


$decoded=base64_decode($encodedString);

file_put_contents('newImage.jpg',$decoded);


?>