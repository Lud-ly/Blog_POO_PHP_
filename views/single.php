<?php

$post = App\App::getDb()->prepare('SELECT *,users.username FROM posts INNER JOIN users ON posts.user_id=users.id WHERE posts.id = ?', [$_GET['id']], 'App\Table\Article', true);

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
            <span>VUES :</span> <?= $post->views; ?>
        </div>
        <div class="col-md-6">
            <p class="text-center mt-5"><img src="../public/img/<?= $post->img; ?>" width="75%" alt="image de l'article" /></p>
        </div>
    </div>

</div>