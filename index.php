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
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    <title></title>
</head>

<body class="m-0">
    <header class="m-0 bg-blue-600 h-40 flex justify-center items-center">
        <h1 class="header-title text-4xl">The Rabbits Carrot</h1>
    </header>

    <main class="box-border container w-1/2 mx-auto">
        <!-- Put a function that creates the articles -->
        <article class="m-10 shadow-lg rounded">
            <section class="flex items-center">
                <h1 class="flex-1 text-4xl m-5">Title</h1>
                <div class="likes flex items-center space-x-5 m-5">
                    <p class="text-4xl">15</p>
                    <img src="/Thumb_up_icon_2.svg" alt="thumb-up" class="w-10 h-10">
                </div>
            </section>
            <img src="/keith-helfrich-vs-8TRV67mA-unsplash.jpg" alt="" class="object-cover">
            <p class="p-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ab recusandae, quis cum impedit pariatur neque magni officia odio vero voluptatum animi ratione rem assumenda voluptates cumque ex cupiditate itaque!</p>
            <div class="flex mx-5">
                <p class="flex-1">Author</p>
                <p>Published: 2020-10-25</p>
            </div>
        </article>

    </main>
</body>

</html>