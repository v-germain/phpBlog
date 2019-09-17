<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
    <h1>Modifier un billet</h1>
            <div class="news">
                <h3>
                    <?= htmlspecialchars($post['title']) ?>
                    <em>le <?= $post['creation_date'] ?></em>
                </h3>         
                <p>
                    <?= nl2br(htmlspecialchars($post['content'])) ?>
                </p>
            </div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>