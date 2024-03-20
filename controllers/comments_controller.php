<?php

Class comments_controller {
    public function create(){
        if(!isset($_SESSION["USER_ID"])){
            header("Location: /pages/error");
            die();
        }
        else if(empty($_POST["text"]) || empty($_POST["article_id"])){
            header("Location: /articles/show?error=1&id=".$_POST["article_id"]);
        }
        else if(Comment::create($_POST["text"], $_SESSION["USER_ID"], $_POST["article_id"])){
            header("Location: /articles/show?id=".$_POST["article_id"]);
        }
        else{
            header("Location: /articles/show?error=2&id=".$_POST["article_id"]);
        }
        die();
    }

    public function all(){
        if(!isset($_SESSION["USER_ID"])){
            header("Location: /pages/error");
            die();
        }
        $comments = Comment::all($_GET["article_id"]);
        require_once('views/articles/show.php');
    }
}