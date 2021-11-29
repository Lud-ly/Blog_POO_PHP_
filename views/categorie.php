<?php

use App\Table\Article;
use App\Table\Categorie;

$categorie = Categorie::find($_GET['id']);
// var_dump($categorie);
$articles =  Article::lastByCategory($_GET['id']);
$categories = Categorie::getAll();
?>
<h1 class="text-center"><?= $categorie->name; ?> </h1>
<div class="row">
    <div class="col-md-8 mb-5">
        <?php foreach ($articles as $post) : ?>
            <div class="article mb-3">
                <h2><a href=<?= $post->url; ?>"><?= $post->title; ?></a></h2>
                <p>categorie : <?= $post->name; ?></p>
                <p><?= $post->extrait; ?></p>
                <img src="../public/img/<?= $post->img; ?>" width="50%" alt="image de l'article" class="mb-5" />
            </div>
        <?php endforeach; ?>
    </div>

    <div class="p-4 col-md-4 text-center article mb-3">
        <h4 class="font-italic">Categories</h4>
        <ol class="list-unstyled mb-0">
            <?php foreach ($categories as $category) : ?>

                <li>
                    <a href="<?= $category->url; ?>">
                        <?= $category->name; ?>
                    </a>
                </li>

            <?php endforeach; ?>
        </ol>
    </div>
</div>