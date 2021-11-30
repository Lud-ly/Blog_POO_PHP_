<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title><?= \APP\App::getTitle(); ?></title>


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
    <div class="container">

        <header class="blog-header py-3 article">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="text-muted" href="index" target="_blank">Home</a>
                    <a class="text-muted" href="https://www.foxenews.ludovic-mouly.com" target="_blank">Infos</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">Large Blog</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <?php foreach (\App\Table\Categorie::getAll() as $category) : ?>
                    <a class="p-2 text-muted" href="<?= $category->url; ?>">
                        <?= $category->name; ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        </div>
    </div>

    <!-- Dynamic page content -->
    <?= $content; ?>



    <footer class="blog-footer">
        <p>Blog built for <a href="https://ludovic-mouly.com/">Cv</a> by <a href="https://github.com/Lud-Ly">github</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>



</body>

</html>