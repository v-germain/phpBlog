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

    public function removeComment($postid)
    {
        $db = $this->dbConnect();
        $removeComment = $db->prepare('DELETE FROM comments WHERE id =? AND reported=1');

        $removeComment->execute(array($postid));
        header('Location: index.php?action=admin');
    }

    public function restoreReportedComment($postid)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE FROM comments(reported) VALUES(?) NOW(0)');
        
        $req->execute(array($postid));
    }
}