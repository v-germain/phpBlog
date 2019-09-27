<?php $title = "L'Ecrivain"; ?>

<?php ob_start(); ?>

<div class="head">
    <h3>Suivez l'écriture du livre au rythme de l'écrivain!</h1>
    <p>Les chapitres :</p>
</div>

<div class="post_container">

    <?php
    while ($data = $posts->fetch()) {
        ?>

        <div class="card" style="width: 35rem;">
            <img src="public/images/ch<?= $data['id'] ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class="title" > <?= htmlspecialchars($data['title']) ?> </a>
                <p class="card-text"> <?= substr($data['content'], 0, 400) ?> (...) <br />
                    <em>le <?= $data['creation_date_fr'] ?></em></p>
                <a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    <?php
    }
    $posts->closeCursor();
    ?>
    <?php $content = ob_get_clean(); ?>

</div>

<?php require('template.php'); ?>