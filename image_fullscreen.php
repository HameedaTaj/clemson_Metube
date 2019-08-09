<?php ob_start(); ?>
<?php session_start(); ?>
<?php

//$mediaId = $_SESSION['mid'];
include_once "function.php";
$result = mediaDetails($_SESSION['mid']);

$details = mysqli_fetch_object($result);

$path = $details->file_path;

echo "<img src = '$path' class = 'img-responsive'>";

echo "<a href = 'viewMedia.php'>Back</a>";

?>
