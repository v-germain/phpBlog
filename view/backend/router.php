<?php
require(__DIR__. '/../../controller/backend.php');
try {    
    if ($_GET['action'] == 'admin') {
            //require('controller/backend.php');
            getAdminContent();    
        }
        elseif ($_GET['action'] == 'removeComment') {
            //require('controller/backend.php');
            removeComment($_GET['idPost']);
        }
        elseif ($_GET['action'] == 'restoreComment') {
            //require('controller/backend.php');
            restoreComment($_GET['idPost']);
        }
        elseif ($_GET['action'] == 'removePost') {
            //require('controller/backend.php');
            removePost($_GET['idPost']);
        }
        elseif ($_GET['action'] == 'editPost') {
            //require('controller/backend.php');
            editPost($_GET['idPost'], $_POST['title'] , $_POST['content']);
        }
        elseif ($_GET['action'] == 'createPost') {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                //require('controller/backend.php');
                addPost($_POST['title'], $_POST['content']);
            }
            else {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        elseif ($_GET['action'] == 'adminPostView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                //require('controller/backend.php');
                viewPost();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    else {
        getAdminContent();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}