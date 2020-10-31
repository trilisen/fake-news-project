<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.


function generateRandomDate(): int
{
    // 1577836800 == 01/01/2020 @ 12:00am (UTC)
    // 1604016000 == 30/10/2020 @ 12:00am (UTC) 

    $date = rand(1577836800, 1604016000);

    return $date;
};



function sortArticles(array $posts): array
{
    usort($posts, function ($a, $b) {
        return $a['published_date'] <=> $b['published_date'];
    });
    return $posts;
};

function getAuthorById(int $id, array $authors): string
{
    foreach ($authors as $author) {
        if ($author['id'] === $id) {
            return $author['full_name'];
        };
    };
};
