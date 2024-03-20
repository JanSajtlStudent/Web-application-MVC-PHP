<?php

Class Comment {
    public $id;
    public $content;
    public $date;
    public $user;
    public $article;

    public function __construct($id, $content, $date, $user_id, $article_id){
        $this->id = $id;
        $this->content = $content;
        $this->date = $date;
        $this->user = User::find($user_id);
        $this->article = Article::find($article_id);
    }

    public static function create($content, $user, $article){
        $db = Db::getInstance();
        $content = mysqli_real_escape_string($db, $content);
        $user = mysqli_real_escape_string($db, $user);
        $article = mysqli_real_escape_string($db, $article);
        $query = "INSERT INTO comments (content, user_id, article_id) VALUES ('$content', '$user', '$article');";
        if($db->query($query)){
            return true;
        }
        else{
            return false;
        } 
    }

    public static function all($article){
        $db = Db::getInstance();
        $article = mysqli_real_escape_string($db, $article);
        $query = "SELECT * FROM comments WHERE article_id = '$article';";
        $res = $db->query($query);
        $comments = array();
        while ($comment = $res->fetch_object()) {
            array_push($comments, new Comment($comment->id, $comment->content, $comment->date, $comment->user_id, $comment->article_id));
        }
        return $comments;
    }
}