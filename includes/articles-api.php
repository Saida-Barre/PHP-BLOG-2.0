<?php
function retrieveArticles(){
    $responseString = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/data/articles.json'); //added a root path due to differences of file types.
var_dump($responseString);

}
retrieveArticles();