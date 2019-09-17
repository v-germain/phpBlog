<?php $title = "Espace d'administration"; ?>

<?php ob_start(); ?>
    <h1>Menu d'administration</h1>
    <?php
    while ($data2 = $getAdminPosts->fetch())
    {
        ?>
        <div class="news">
                <h4>
                    <?= htmlspecialchars($data2['title']) ?>
                    <em>le <?= $data2['creation_date'] ?></em>
                </h4>
                <p>
                    <?= nl2br(htmlspecialchars($data2['content'])) ?>
                    <em><a href="index.php?action=adminPostView&amp;id=<?= $data2['id'] ?>">Editer</a></em>
                </p>
            </div>
    <?php
    }
    $getAdminPosts->closeCursor();
    ?>
    <h2>Créer un billet</h2>
    <form action="index.php?action=createPost" method="post">
        <div>
            <label for="title">Titre</label><br />
        </div>
            <input type="text" id="title" name="title" />
        
        <div>
            <label for="content">Contenu</label><br />
            <textarea id="content" name="content" ></textarea>
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
    }
$getReportedComment->closeCursor();    
?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>