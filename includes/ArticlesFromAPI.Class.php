<?php
include_once 'Articles.Class.php';

class ArticlesFromAPI extends Articles {
    //output
    public function output (){
        ?>
        <ul>
            <li><?php echo $this->id;?></li>
            <li><?php echo $this->blogTitle; ?></li>
            <li><?php echo $this->blogContent; ?></li>
        </ul>
        <?php
    }
}