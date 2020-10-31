<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    <title></title>
</head>

<body>
    <header>
        <h1 class="header-title">The Rabbits Carrot</h1>
    </header>


    <?php foreach (sortArticles($posts) as $post) :

        $title = $post['title'];
        $content = $post['content'];
        $author = getAuthorById($post['author_id'], $authors);
        $date = date('Y-m-d', $post['published_date']);
        $likes = $post['likes'];
        $img = $post['picture'];

    ?>
        <main>
            <article>
                <section>
                    <h1><?= $title ?></h1>
                    <div class="likes">
                        <p><?= $likes ?></p>
                        <img src="/Thumb_up_icon_2.svg" alt="thumb-up">
                    </div>
                </section>
                <img src="<?= $img ?>" alt="" class="main-picture">
                <p class="main-content"> <?= $content ?></p>
                <div class="main-footer">
                    <p><?= $author ?></p>
                    <p>Published: <?= $date ?></p>
                </div>
            </article>

        </main>
    <?php endforeach; ?>
</body>

</html>