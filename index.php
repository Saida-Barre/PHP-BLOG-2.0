<?php
include 'includes/articles-api.php'; //import stuff from our api file
include 'includes/ArticlesFromAPI.Class.php'; //Articles.Class already inside this file

global $title;

$title = 'PHP Blog Homepage'; //this title will appear in the page all the time

include 'templates/header.php'; //imports stuff from header
?>

<h1><?php echo $title; ?></h1> <!---this just outputs the title-->

<h2> Our Articles!! Yaaaah! </h2>

<?php if ($myArticles = retrieveArticles()): ?>
<?php var_dump($myArticles); ?> <!--test passed for producing the array but cannot connect to output--> 
    <ol>
        <?php foreach ($myArticles as $myArticle): ?>
            <?php $currentArticle = new ArticlesFromAPI($myArticle->blogContent); ?>
            <li>
                <?php $currentArticle->output(); ?>
            </li>
        <?php endforeach; ?>
    </ol>
        <?php endif; ?>

        
 <?php include 'templates/footer.php';