<?php

use App\Table\Author;
use APP\App;



$posts = Author::getPostsByAuthor($_GET['id']);
if ($posts === false) {
    App::notfound();
}
App::setTitle($posts[0]->firstname . " " . $posts[0]->lastname);
?>
<div class="row">
    <div class="col-md-4 mb-5 text-center">
        depuis le <p><?= $posts[0]->created_at; ?></p>
        <h3><?= $posts[0]->firstname; ?></h3>
        <h3><?= $posts[0]->lastname; ?></h3>
        <p><?= $posts[0]->email; ?></p>
    </div>
    <div class="col-md-8 mb-5">
        <?php foreach ($posts as $post) : ?>
            <div class="article mb-3">
                <h2><a href=<?= $post->url; ?>"><?= $post->title; ?></a></h2>
                <p><?= $post->body; ?></p>
                <img src="../public/img/<?= $post->img; ?>" width="50%" alt="image de l'article" class="mb-5" />
            </div>
        <?php endforeach; ?>
    </div>


</div>