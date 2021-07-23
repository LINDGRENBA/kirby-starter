<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= css('assets/css/index.css') ?>
    <title><?= $site->title() ?></title>
</head>
<body>

<header class="header">
    <a href="<?= $site->url() ?>" class="logo"><?= $site->title() ?></a>

    <nav class="menu">
        <ul>
            <?php foreach ($site->children()->listed() as $item): ?>
                <li><a href="<?= $site->url() ?>"></a><?= $item->title() ?></li>
            <?php endforeach ?>
        </ul>
    </nav>
</header>

<main class="main">
    <h1><?= $page->title() ?></h1>
    <p><?= $page->text() ?></p>
</main>

<footer class="footer">
    <p>Check out my <a href="<?= $site->LinkedIn() ?>">LinkedIn</a></p>
    <p>Check out my <a href="<?= $site->GitHub() ?>">GitHub</a></p>
</footer>
    
</body>
</html>
