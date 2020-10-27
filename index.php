<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

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

    <main>
        <!-- Put a function that creates the articles -->
        <article>
            <section>
                <h1>Title</h1>
                <div class="likes">
                    <p>15</p>
                    <img src="/Thumb_up_icon_2.svg" alt="thumb-up">
                </div>
            </section>
            <img src="/keith-helfrich-vs-8TRV67mA-unsplash.jpg" alt="" class="main-picture">
            <p class="main-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ab recusandae, quis cum impedit pariatur neque magni officia odio vero voluptatum animi ratione rem assumenda voluptates cumque ex cupiditate itaque!</p>
            <div class="main-footer">
                <p>Author</p>
                <p>Published: 2020-10-25</p>
            </div>
        </article>

    </main>
</body>

</html>