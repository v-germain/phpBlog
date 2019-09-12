<?php $title = "Espace d'administration"; ?>

<?php ob_start(); ?>
<h1>Menu d'administration</h1>

<?php 
    while ($data = $getReportedComment->fetch())
    {
    ?>
        <p><strong><?= htmlspecialchars($data['author']) ?></strong> le <?= $data['comment_date'] ?></p>
        <p><?= nl2br(htmlspecialchars($data['comment'])) ?></p>
        
    <?php
    }
    ?>
<?php // $posts->closeCursor(); ?>
        
<?php $content = ob_get_clean(); ?>
<?php require ('template.php'); ?>