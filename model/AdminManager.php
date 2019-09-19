<?php
require_once('model/Manager.php');

class AdminManager extends Manager
{
    public function createPost($title, $content)
    {
        $db = $this->dbConnect();
        $createPost = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?, ?, NOW())');
        $affectedLines = $createPost->execute(array($title, $content));

        return $affectedLines;
    }
    
    public function getReportedComment()
    {
        $db = $this->dbConnect();
        $getReportedComment = $db->prepare('SELECT * FROM comments WHERE reported=1');    
        $getReportedComment->execute();

        return $getReportedComment;
    }

    public function removeComment($postId)
    {
        $db = $this->dbConnect();
        $removeComment = $db->prepare('DELETE FROM comments WHERE id =? AND reported=1');

        $removeComment->execute(array($postId));
        header('Location: index.php?action=admin');
    }

    public function restoreComment($postId)
    {
        $db = $this->dbConnect();
        $restoreComment = $db->prepare('UPDATE comments SET reported = 0 WHERE reported = 1 AND id = ?');
        
        $restoreComment->execute(array($postId));
        header('Location: index.php?action=admin');
    }

    public function getAdminPosts()
    {
        $db = $this->dbConnect();
        $getAdminPosts = $db->query('SELECT id, title, content, creation_date FROM posts ORDER BY creation_date DESC');

        return $getAdminPosts;
    }

    public function getAdminPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, creation_date FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function removePost($postId)
    {
        $db = $this->dbConnect();
        $removePost = $db->prepare('DELETE FROM posts WHERE id =?');

        $removePost->execute(array($postId));
        header('Location: index.php?action=admin');
    }

    public function editPost($postid, $newTitle, $newContent)
    {
        $db = $this->dbConnect();
        $editPost = $db->prepare('UPDATE posts SET content = :newContent, title = :newTitle WHERE id = :postid');

        $editPost->execute(array(
            'newContent' => $newContent,
            'newTitle' => $newTitle,
            'postid' => $postid
        ));
        header('Location: index.php?action=admin');
    }
}