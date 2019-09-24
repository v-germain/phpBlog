<?php $title = "Espace d'administration"; ?>

<?php ob_start(); ?>
<div class="top">
    <h1>Menu d'administration</h1>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="toggleList" data-toggle="tab" href="postView" role="tab" aria-controls="home" aria-selected="true">Liste des Billets</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="toggleNew" data-toggle="tab" href="createPost" role="tab" aria-controls="profile" aria-selected="false">Créer un billet</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="toggleComment" data-toggle="tab" href="commentMod" role="tab" aria-con&trols="contact" aria-selected="false">Commentaires signalés</a>
        </li>
    </ul>
</div>

<section id="postView" style = 'display : block'>

    <?php
    while ($data2 = $getAdminPosts->fetch()) {
        ?>
        <div class="card" style="width: auto!important;">
            <h4>
                <?= htmlspecialchars($data2['title']) ?>
                <em>le <?= $data2['creation_date'] ?></em>
            </h4>
            <p class="card-text">
                <?= substr($data2['content'], 0, 600) ?><br />
                <em><a class="btn btn-primary" href="index.php?action=adminPostView&amp;id=<?= $data2['id'] ?>">Editer</a></em>
            </p>
        </div>
    <?php
    }
    $getAdminPosts->closeCursor();
    ?>

</section>

<section id="createPost" style = 'display : none'>

    <form action="index.php?action=createPost" method="post">
        <h2>Créer un billet</h2>
        <div>
            <label for="title">Titre</label><br />
        </div>
        <input type="text" id="title" name="title" />

        <div id="content">
            <label for="content">Contenu</label><br />
            <textarea class="tinytextarea" id="content" name="content"></textarea>
        </div>
        <div>
            <input type="submit" class="btn btn-primary submitBtn"/>
        </div>
    </form>

</section>

<section id="commentMod" style = 'display : none' >

    <h2>Commentaires signalés</h2>

    <?php
    while ($data = $getReportedComment->fetch()) {
        ?>
        <div class="comment">
            <p><strong><?= htmlspecialchars($data['author']) ?></strong> publié le <?= $data['comment_date'] ?></p>
            <p class="alert alert-light"><?= nl2br(htmlspecialchars($data['comment'])) ?></p>
        <?php $id = $data['id'];
            echo ("<a class='btn btn-primary' href=\"index.php?action=restoreComment&idPost=$id\"> Restaurer</a>");
            echo ("<a class='btn btn-danger' href=\"index.php?action=removeComment&idPost=$id\"> Supprimer</a>");
        ?>
        </div>
        <?php
        }
        $getReportedComment->closeCursor();
        ?>
        

</section>

<script src="../../public/js/admin.js"></script>
<script src="../../public/js/init.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require('adminTemplate.php'); ?>