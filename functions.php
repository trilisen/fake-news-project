<?php

declare(strict_types=1);

require __DIR__ . '/data.php';


// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

function generateContent($title, $content, $author, $published, $likes, $howMany)
{
    require __DIR__ . '/data.php';
    foreach ($authors as $author) {
        echo $author['fullName'];
        echo $author['id'];
    };

    while ($howMany > 0) {
    }

    // Medan $howMany är mindre än noll ska den skapa arrayer som ska vara artiklarna, BESTÄM DIG om man ska välja author själv eller random.


    // $items[] = ['title' => $title, 'content' => $content, 'author' => $author, 'publishedDate' => $published, 'likes' => $likes];
};

generateContent(1, 1, 1, 1, 1, 1);
