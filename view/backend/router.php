<?php
require(__DIR__. '/../../controller/backend.php');
try {    
    if ($_GET['action'] == 'admin') {
            getAdminContent();    
        }
        elseif ($_GET['action'] == 'removeComment') {
            removeComment($_GET['idPost']);
        }
        elseif ($_GET['action'] == 'restoreComment') {
            restoreComment($_GET['idPost']);
        }
        elseif ($_GET['action'] == 'removePost') {
            removePost($_GET['idPost']);
        }
        elseif ($_GET['action'] == 'editPost') {
            editPost($_GET['idPost'], $_POST['title'] , $_POST['content']);
        }
        elseif ($_GET['action'] == 'createPost') {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                addPost($_POST['title'], $_POST['content']);
            }
            else {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        elseif ($_GET['action'] == 'adminPostView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
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