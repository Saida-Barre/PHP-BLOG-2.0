<?php
include 'includes/articles-api.php'; //import stuff from our api file
include 'includes/Articles.Class.php'; //import stuff from Articles class
global $title;

$title = 'PHP Blog Homepage'; //this title will appear in the page all the time

include 'templates/header.php'; //imports stuff from header
?>

<h1><?php echo $title; ?></h1> <!---this just outputs the title-->

<h2> Our Articles!! Yaaaah! </h2>



 <?php include 'templates/footer.php';