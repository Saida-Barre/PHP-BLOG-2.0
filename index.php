<?php
include 'includes/Articles.Class.php'; //import stuff from Articles class
global $title;

$title = 'PHP Blog Homepage'; //this title will appear in the page all the time

include 'templates/header.php'; //imports stuff from header
?>

<h1><?php echo $title; ?></h1> <!---this just outputs the title-->

<h2> Article Test Title </h2>

<?php //adding new object for the class Article.
   //submit the new ID, title, and blog content through article
   $blog1 = new Articles();
   $blog1->blogTitle = 'testing title 1';
   echo $blog1->blogTitle;
   $blog1->blogContent = 'testing content 1';
   echo $blog1->blogContent;
   ?>

   <ul>
    <?php
        $myArticles = array(
            ( new Articles( 1, 'title1', 'content1')),
            ( new Articles( 2, 'title2', 'content2')),
            ( new Articles( 3, 'title3', 'content3')),
            ( new Articles( 4, 'title4', 'content4')),
            ( new Articles( 5, 'title5', 'content5')),
            ( new Articles( 6, 'title6', 'content6'))
        );
        foreach ($myArticles as $article):
            ?>
            <h3><?php echo $article->blogTitle; ?></h3>
            <h4><?php echo $article->id; ?></h4>
            <p>
                <?php
                echo $article->blogContent;
                ?>
            </p>
            <?php
            endforeach;
            ?>

   </ul>








 <?php include 'templates/footer.php';