<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<h1>Modifier un billet</h1>
<div class="news">
    <h3>
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['creation_date'] ?></em>
    </h3>
    <p>
        <?= nl2br(/*htmlspecialchars*/($post['content'])) ?>
    </p>
</div>

<form action="index.php?action=createPost" method="post">
    <div>
        <label for="title">Titre</label><br />
    </div>
    <input type="text" id="title" name="title" />

    <div>
        <label for="content">Contenu</label><br />
        <!--<textarea class="tinytextarea" id="content" name="content">
             //nl2br(htmlspecialchars($post['content'])) 
        </textarea>-->
        <?php echo '<textarea name="content" id="content" class="tinytextarea">'.($post['content']).'</textarea>'; ?>
    </div>
    <div>
        <input type="submit" />
        <?php $id = $post['id'];
        echo("<a href=\"index.php?action=removePost&idPost=$id\"> Supprimer</a>"); ?>
    </div>
</form>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>