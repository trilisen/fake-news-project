<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';
require __DIR__ . '/header.php'
?>

<?php foreach (sortArticles($posts) as $post) :

    $title = $post['title'];
    $content = $post['content'];
    $author = getAuthorById($post['author_id'], $authors);
    $date = date('Y-m-d', $post['published_date']);
    $likes = $post['likes'];
    $img = $post['picture'];

?>
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
<?php endforeach; ?>
</main>
</body>

</html>