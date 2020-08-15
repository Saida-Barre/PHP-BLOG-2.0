<?php
function retrieveArticles(){
    $responseString = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/data/articles.json'); //added a root path due to differences of file types.
//var_dump($responseString); - tested and recieved a response

if($responseString !==FALSE){
    if(($responseObj = json_decode($responseString))!==NULL){
    //var_dump($responseObj); - tested and shows the decoding 
    $results = $responseObj->articles;
    //var_dump($results);//now test has passed we can now access all articles in the aray
    } else {
        echo 'could not interprest API reponse';
    } 
    }else {
        echo 'unable tp connect/retrieve data from API.';

    }
}


