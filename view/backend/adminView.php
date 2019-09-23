<?php $title = "Espace d'administration"; ?>

<?php ob_start(); ?>
<h1>Menu d'administration</h1>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="true" id="toggleList" >Liste des Billets</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#" role="tab" aria-controls="profile" aria-selected="false" id="toggleNew" >Créer un billet</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#" role="tab" aria-con&trols="contact" aria-selected="false" id="toggleComment" >Commentaires signalés</a>
    </li>
</ul>

<section id="postView" style = 'display : block'>

<?php
while ($data2 = $getAdminPosts->fetch()) {
    ?>
    <div class="news">
        <h4>
            <?= htmlspecialchars($data2['title']) ?>
            <em>le <?= $data2['creation_date'] ?></em>
        </h4>
        <p>
            <?= nl2br(/*htmlspecialchars*/($data2['content'])) ?><br />
            <em><a class="btn btn-primary" href="index.php?action=adminPostView&amp;id=<?= $data2['id'] ?>">Editer</a></em>
        </p>
    </div>
<?php
}
$getAdminPosts->closeCursor();
?>

</section>

<section id="createPost" style = 'display : none'>

<h2>Créer un billet</h2>
<form action="index.php?action=createPost" method="post">
    <div>
        <label for="title">Titre</label><br />
    </div>
    <input type="text" id="title" name="title" />

    <div>
        <label for="content">Contenu</label><br />
        <textarea class="tinytextarea" id="content" name="content"></textarea>
    </div>
    <div>
        <input type="submit" class="btn btn-primary" />
    </div>
</form>

</section>

<section id="commentMod" style = 'display : none'>

<h2>Commentaires signalés</h2>

<?php
while ($data = $getReportedComment->fetch()) {
    ?>
    <p><strong><?= htmlspecialchars($data['author']) ?></strong> publié le <?= $data['comment_date'] ?></p>
    <p><?= nl2br(htmlspecialchars($data['comment'])) ?></p>
<?php $id = $data['id'];
    echo ("<a class='btn btn-primary' href=\"index.php?action=removeComment&idPost=$id\"> Supprimer</a>");
    echo ("<a class='btn btn-primary' href=\"index.php?action=restoreComment&idPost=$id\"> Restaurer</a>");
}
$getReportedComment->closeCursor();
?>

</section>

<script type="application/JavaScript" src="./public/js/admin.js"></script>
<script type="application/JavaScript" src="./public/js/init.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require('adminTemplate.php'); ?>