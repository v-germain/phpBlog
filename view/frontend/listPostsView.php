<?php $title = "Mon blog"; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>

<div class="post_container">

<?php
while ($data = $posts->fetch()) {
    ?>
    
    <div class="card" style="width: 18rem;">
        <img src="public/images/ch<?= $data['id'] ?>.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title"> <?= htmlspecialchars($data['title']) ?></h3>
            <p class="card-text"> <?= nl2br(/*htmlspecialchars*/($data['content'])) ?> <br />
            <em>le <?= $data['creation_date_fr'] ?></em></p>
            <a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class="btn btn-primary">Commentaires</a>
        </div>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

</div>

<?php require('template.php'); ?>