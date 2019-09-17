<?php

require_once('model/AdminManager.php');

function getAdminContent()
{
    $adminManager = new AdminManager();
    $getReportedComment = $adminManager->getReportedComment();
    $getAdminPosts = $adminManager->getAdminPosts();

    require('view/frontend/adminView.php');
}

function removeComment($postid)
{
    $adminManager = new AdminManager();
    $removeComment = $adminManager->removeComment($postid);

    require('view/frontend/adminView.php');
}

function restoreComment($postid)
{
    $adminManager = new AdminManager();
    $restoreComment = $adminManager->restoreComment($postid);

    require('view/frontend/adminView.php');
}

function addPost($title, $content)
{
   $adminManager = new AdminManager();
   $affectedLines = $adminManager->createPost($title, $content);

   if ($affectedLines === false) {
       throw new Exception('Impossible de publier ce billet');
   }
   else {
        header('Location: index.php');
   }
}