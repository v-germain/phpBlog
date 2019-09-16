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
}