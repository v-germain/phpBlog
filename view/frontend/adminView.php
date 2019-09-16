<?php $title = "Espace d'administration"; ?>

<?php ob_start(); ?>
    <h1>Menu d'administration</h1>

    <h2>Créer un billet</h2>
    <form action="index.php?action=createPost" method="post">
        <div>
            <label for="title">Titre</label><br />
            <input type="text" id="title" name="title" />
        </div>
        <div>
            <label for="content">Contenu</label><br />
            <textarea id="content" name="content"></textarea>
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>

    <h2>Commentaires signalés</h2>

<?php
    while ($data = $getReportedComment->fetch()) 
    {
        ?>
        
        <p><strong><?= htmlspecialchars($data['author']) ?></strong> publié le <?= $data['comment_date'] ?></p>
        <p><?= nl2br(htmlspecialchars($data['comment'])) ?></p>
        <?php $id = $data['id']; 
        echo("<a href=\"index.php?action=removeComment&idPost=$id\"> Supprimer</a>");
        echo("<a href=\"index.php?action=restoreComment&idPost=$id\"> Restaurer</a>");
        ?>

<?php
}
?>
<?php // $posts->closeCursor(); 
?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>