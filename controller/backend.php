<?php

require_once(__DIR__ . '/../model/AdminManager.php');

function getAdminContent()
{
    $adminManager = new AdminManager();
    $getReportedComment = $adminManager->getReportedComment();
    $getAdminPosts = $adminManager->getAdminPosts();

    require(__DIR__ . '/../view/backend/adminView.php');
}

function removeComment($postid)
{
    $adminManager = new AdminManager();
    $removeComment = $adminManager->removeComment($postid);

    require(__DIR__ . '/../view/backend/adminView.php');
}

function restoreComment($postid)
{
    $adminManager = new AdminManager();
    $restoreComment = $adminManager->restoreComment($postid);

    require(__DIR__ . '/../view/backend/adminView.php');
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

function viewPost()
{
    $adminManager = new AdminManager();
    $post = $adminManager->getAdminPost($_GET['id']);

    require(__DIR__ . '/../view/backend/adminPostView.php');
}

function removePost($postid)
{
    $adminManager = new AdminManager();
    $removePost = $adminManager->removePost($postid);

    require(__DIR__ . '/../view/backend/adminPostView.php');
}

function editPost($postid, $newTitle, $newContent)
{
    $adminManager = new AdminManager();
    $editPost = $adminManager->editPost($postid, $newTitle, $newContent);

    require(__DIR__ . '/../view/backend/adminPostView.php');
}