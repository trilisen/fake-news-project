<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [
    ['fullName' => 'William Shakespeare', 'id' => 0],
    ['fullName' => 'Emily Dickinson', 'id' => 1],
    ['fullName' => 'Isaac Asimov', 'id' => 2],
    ['fullName' => 'John Steinbeck', 'id' => 3],
    ['fullName' => 'Alexandre Dumas', 'id' => 4]
];

$items = [
    ['title' => 'Title 1', 'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum esse enim mollitia odit dolorem, possimus, deserunt, deleniti molestias ullam voluptatum temporibus provident repudiandae ipsa amet reprehenderit error sit qui harum.', 'author' => $authors[0]['fullName'], 'publishedDate' => date('Y-m-d'), 'likes' => rand(0, 100)],
    ['title' => 'Title 2', 'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab animi cupiditate magnam alias labore quae, deleniti officia aut repudiandae nesciunt et sit, ipsam, quibusdam quaerat molestias beatae itaque incidunt. Voluptates?', 'author' => $authors[1]['fullName'], 'publishedDate' => date('Y-m-d'), 'likes' => rand(0, 100)],
    ['title' => 'Title 3', 'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus ratione rerum reprehenderit laboriosam dicta! Nisi sit facere, at temporibus, quas illo fugit autem aliquam soluta optio fuga dolor obcaecati fugiat.', 'author' => $authors[2]['fullName'], 'publishedDate' => date('Y-m-d'), 'likes' => rand(0, 100)],
    ['title' => 'Title 4', 'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, reprehenderit pariatur! Commodi atque unde fugiat ratione a? Eveniet cumque libero inventore. Eveniet iure similique deserunt tenetur quaerat libero itaque modi.', 'author' => $authors[3]['fullName'], 'publishedDate' => date('Y-m-d'), 'likes' => rand(0, 100)],
    ['title' => 'Title 5', 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, rem. Sequi, neque facere aliquid labore velit officiis rerum consequatur amet tempora vel ut, quod ipsa. Provident maiores quasi saepe sint!', 'author' => $authors[4]['fullName'], 'publishedDate' => date('Y-m-d'), 'likes' => rand(0, 100)]
];
