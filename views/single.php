<?php

$post = $db->prepare('SELECT *,users.username FROM posts INNER JOIN users ON posts.user_id=users.id WHERE posts.id = ?', [$_GET['id']], 'App\Table\Article', true);

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Blog</title>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../public/css/blog.css" rel="stylesheet">

    <!-- ◘ JQuery ◘ -->
    <script type="text/javascript" src="../public/lib/jquery/jquery-3.6.0.min.js"></script>
    <!-- ◘ Bootstrap ◘ -->
    <link rel="stylesheet" href="../public/lib/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <!-- // <script src="assets/lib/popper_1-14-5.js"></script> -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="../public/lib/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>

</head>

<body>
    <a href="index">retour</a>
    <div class="container mt-5 blog-post">
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
                <p class="text-center mt-5"><img src="../public/img/<?= $post->img; ?>" width="50%" alt="image de l'article" /></p>
            </div>
        </div>

    </div>
</body>