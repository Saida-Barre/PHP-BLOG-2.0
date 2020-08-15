<?php

class Articles
{
    public $id = 0;
    public $blogTitle= "";
    public $blogContent="";

    function __construct ($id= false, $blogTitle=false, $blogContent=false)
    {
        if (is_integer($id)) {
            $this->id=$id;
        }
        if (is_string($blogTitle)){
            $this->blogTitle=$blogTitle;
        }
        if (is_string($blogContent)){
            $this->blogContent=$blogContent;
        }
    }
}