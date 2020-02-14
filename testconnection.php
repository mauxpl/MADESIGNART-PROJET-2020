<?php
$link = mysqli_connect('localhost', 'adminma', 'Arqascanio13*');
if (!$link) {
die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>