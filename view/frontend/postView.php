<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<div class="top">
    <h1>Billet simple pour l'Alaska : <?= $post['title'] ?></h1>
    <p><a href="index.php">Retour à la liste des billets</a></p>
</div>

<div class="card" style="width: auto!important; padding: 20px!important;">
    <h2> <?= htmlspecialchars($post['title']) ?> </h2>
    <p class="card-text"> <?= nl2br(($post['content'])) ?> </p>
</div>



<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <h2>Commentaires</h2>
    <div class="form-group">
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" class="form-control" />
    </div>
    <div class="form-group">
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="form-control" rows="3" />
    </div>
</form>

<div class="comments">
    <?php
    while ($comment = $comments->fetch()) {
        ?>
        <div class="comment">
        <p><strong>De <?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        <p class="alert alert-light"><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <?php $id = $comment['id'];
            echo ("<a href=\"index.php?action=reportComment&idPost=$id\" class=\"btn btn-danger\"> Signaler</a>");
            ?>
        </div>
    <?php
    }
    ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>