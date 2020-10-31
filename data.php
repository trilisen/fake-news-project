<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.

require_once __DIR__ . '/functions.php';


$authors = [
    ['full_name' => 'William Shakespeare', 'id' => 0],
    ['full_name' => 'Emily Dickinson', 'id' => 1],
    ['full_name' => 'Isaac Asimov', 'id' => 2],
    ['full_name' => 'John Steinbeck', 'id' => 3],
    ['full_name' => 'Alexandre Dumas', 'id' => 4]
];

$posts = [
    [
        'title' => 'Title 1',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum esse enim mollitia odit dolorem, possimus, deserunt, deleniti molestias ullam voluptatum temporibus provident repudiandae ipsa amet reprehenderit error sit qui harum.',
        'author_id' => 0,
        'published_date' => generateRandomDate(),
        'likes' => rand(0, 100),
        'picture' => '/keith-helfrich-vs-8TRV67mA-unsplash.jpg'
    ],

    [
        'title' => 'Title 2',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab animi cupiditate magnam alias labore quae, deleniti officia aut repudiandae nesciunt et sit, ipsam, quibusdam quaerat molestias beatae itaque incidunt. Voluptates?',
        'author_id' => 1,
        'published_date' => generateRandomDate(),
        'likes' => rand(0, 100),
        'picture' => '/keith-helfrich-vs-8TRV67mA-unsplash.jpg'
    ],

    [
        'title' => 'Title 3',
        'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus ratione rerum reprehenderit laboriosam dicta! Nisi sit facere, at temporibus, quas illo fugit autem aliquam soluta optio fuga dolor obcaecati fugiat.',
        'author_id' => 2,
        'published_date' => generateRandomDate(),
        'likes' => rand(0, 100),
        'picture' => '/keith-helfrich-vs-8TRV67mA-unsplash.jpg'
    ],

    [
        'title' => 'Title 4',
        'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, reprehenderit pariatur! Commodi atque unde fugiat ratione a? Eveniet cumque libero inventore. Eveniet iure similique deserunt tenetur quaerat libero itaque modi.',
        'author_id' => 3,
        'published_date' => generateRandomDate(),
        'likes' => rand(0, 100),
        'picture' => '/keith-helfrich-vs-8TRV67mA-unsplash.jpg'
    ],

    [
        'title' => 'Title 5',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, rem. Sequi, neque facere aliquid labore velit officiis rerum consequatur amet tempora vel ut, quod ipsa. Provident maiores quasi saepe sint!',
        'author_id' => 4,
        'published_date' => generateRandomDate(),
        'likes' => rand(0, 100),
        'picture' => '/keith-helfrich-vs-8TRV67mA-unsplash.jpg'
    ],

    [
        'title' => 'Title 6',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum esse enim mollitia odit dolorem, possimus, deserunt, deleniti molestias ullam voluptatum temporibus provident repudiandae ipsa amet reprehenderit error sit qui harum.',
        'author_id' => 0,
        'published_date' => generateRandomDate(),
        'likes' => rand(0, 100),
        'picture' => '/keith-helfrich-vs-8TRV67mA-unsplash.jpg'
    ],

    [
        'title' => 'Title 7',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab animi cupiditate magnam alias labore quae, deleniti officia aut repudiandae nesciunt et sit, ipsam, quibusdam quaerat molestias beatae itaque incidunt. Voluptates?',
        'author_id' => 1,
        'published_date' => generateRandomDate(),
        'likes' => rand(0, 100),
        'picture' => '/keith-helfrich-vs-8TRV67mA-unsplash.jpg'
    ],

    [
        'title' => 'Title 8',
        'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus ratione rerum reprehenderit laboriosam dicta! Nisi sit facere, at temporibus, quas illo fugit autem aliquam soluta optio fuga dolor obcaecati fugiat.',
        'author_id' => 2,
        'published_date' => generateRandomDate(),
        'likes' => rand(0, 100),
        'picture' => '/keith-helfrich-vs-8TRV67mA-unsplash.jpg'
    ],

    [
        'title' => 'Title 9',
        'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, reprehenderit pariatur! Commodi atque unde fugiat ratione a? Eveniet cumque libero inventore. Eveniet iure similique deserunt tenetur quaerat libero itaque modi.',
        'author_id' => 3,
        'published_date' => generateRandomDate(),
        'likes' => rand(0, 100),
        'picture' => '/keith-helfrich-vs-8TRV67mA-unsplash.jpg'
    ],

    [
        'title' => 'Title 10',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, rem. Sequi, neque facere aliquid labore velit officiis rerum consequatur amet tempora vel ut, quod ipsa. Provident maiores quasi saepe sint!',
        'author_id' => 4,
        'published_date' => generateRandomDate(),
        'likes' => rand(0, 100),
        'picture' => '/keith-helfrich-vs-8TRV67mA-unsplash.jpg'
    ]
];
