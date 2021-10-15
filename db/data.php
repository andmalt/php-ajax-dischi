<?php 

$songs = [
    [
      'poster' => 'https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg',
      'title' => 'New Jersey',
      'author' => 'Bon Jovi',
      'genre' => 'Rock',
      'year' => '1988',
    ]
];

header('Content-Type: application/json');


$arr = json_encode($songs);

var_dump(json_decode($arr, true));
?>