<?php

use App\Table\Categorie;
use APP\App;
use App\Table\Article;

$post = Article::findByUser($_GET['id']);
if ($post === false) {
    App::notfound();
}
$categorie = Categorie::find($post->category_id);
App::setTitle($post->title);
?>


<div class="container mt-5 blog-post">
    <div class="blog-pagination">
        <a class="btn btn-outline-primary" href="index">retour</a>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2 class="pb-4 mb-4 text-center font-italic border-bottom">
                <?= $post->title ?>
            </h2>
            <h3 class="blog-post-title"><?= $post->username; ?></h3>
            <a href="#"><?= $post->created_at; ?></a>
            <p><?= $post->body; ?></p>
            <span>VUES :</span> <?= $post->views; ?><br>
            <span>CATEGORIE :</span> <?= $categorie->name; ?>
        </div>
        <div class="col-md-6">
            <p class="text-center mt-5"><img src="../public/img/<?= $post->img; ?>" width="75%" alt="image de l'article" /></p>
        </div>
    </div>

</div>