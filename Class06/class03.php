<?php 

class ArticleManager{

    function getAllArticles(){
        $apiEndPoint = "https://jsonplaceholder.typicode.com/posts";
        $content = file_get_contents($apiEndPoint);
        return $content;
    }

    function gerSingleArticle($id = 1){
        $apiEndPoint = "https://jsonplaceholder.typicode.com/posts/{$id}";
        $content = file_get_contents($apiEndPoint);
        return $content;
    }
}


$am = new ArticleManager();

// $allPost = $am->getAllArticles();

// echo $allPost;

$singlePost =  $am->gerSingleArticle(23);
echo $singlePost;