<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <script src="https://cdn.tiny.cloud/1/1bza98ffskffe142dp16vqn1woxq2oya7lzjhv3svrqi3is1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'.tinytextarea'});</script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="public/css/style.css" rel="stylesheet" />
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="view/backend/router.php?action=admin">Administration</a>
            </div>
        </div>
    </nav>
    <div class='banner'>
        <h1>Billet simple pour l'Alaska</h1>
        <h2>Ne ratez pas le nouveau roman choc de Jean Forteroche!</h2>
    </div>
</header>

<body>
    <?= $content ?>
</body>
<footer>
    <div class="desc">
    <div id="portrait"><p id="credits">Image par <a href="https://pixabay.com/fr/users/omaralnahi-891511/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=696884">omer yousief</a> de <a href="https://pixabay.com/fr/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=696884">Pixabay</a></p></div>
    <p class="desc">Qui est Jean Forteroche? Né en 1941 à Montferrer, Jean Forteroche va très vite parcourir le monde avec sa plume et s'imposer comme un des grands noms de la littérature française. Après "le Naufrage du Beyle", "le Noir et le Rouge" ou encore "la Revue des Quatres Mondes", vous allez décourvir le dernier ouvrage de Jean Forteroche, "Billet simple pour l'Alaska". Vous pourrez suivre et apprécier ici la publication du livre chapitre par chapitre, au rythme de la plume de Jean!</p>
    </div>
    
</footer>

</html>