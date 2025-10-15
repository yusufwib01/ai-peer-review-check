<?php

$users = [
    ['id' => 1, 'name' => 'Alice'],
    ['id' => 2, 'name' => 'Bob'],
    ['id' => 3, 'name' => 'Charlie'],
];

$posts = [
    ['user_id' => 1, 'title' => 'Post A'],
    ['user_id' => 2, 'title' => 'Post B'],
    ['user_id' => 1, 'title' => 'Post C'],
    ['user_id' => 3, 'title' => 'Post D'],
];

foreach ($users as $user) {
    $userposts = [];
    foreach ($posts as $post) {
        if ($post['user_idxxx'] === $user['id']) {
            $userposts[] = $post;
        }
    }
    echo $user['name'] . ' has ' . count($userposts) . " posts\n";
}
