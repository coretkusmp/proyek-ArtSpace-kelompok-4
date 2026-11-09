<?php
require_once __DIR__ . "/../config/database.php";

$pictures = [
   "/../assets/posts/angle.jpg",
   "/../assets/posts/artRoom.jpeg",
   "/../assets/posts/axolotl.jpeg",
   "/../assets/posts/cat.jpeg",
   "/../assets/posts/fishes.jpeg",
   "/../assets/posts/person.jpg",
   "/../assets/posts/ships.jpeg",
   "/../assets/posts/spiderman.jpg",
   "/../assets/posts/sunflowers.jpeg",
   "/../assets/posts/trees.jpeg",
];

$c = 0;

$title = [
   "A spiderman staring at you",
   "A pretty sunflower",
   "A cat staring at the stars",
   "Fishes swing in the ocean",
   "A dramatic falling winged figure",
   "A person looking at butterfly",
   "A classic sailing ship at sea",
   "Cute floating axolotl underwater art",
   "Van Gogh's signature starry night sky",
   "A cozy artist's studio setup.",
];
while($c < 10){
   $query = "insert into posts (title, view, picture, upvote, downvote, description, posted_by) values(:title, :view, :picture, :upvote, :downvote, :description, :posted_by)";
   
   $stmt = $pdo->prepare($query);
   $stmt->execute([
      'title' => $title[$c],
      'view' => 0,
      'picture' => $pictures[$c],
      'upvote' => 0,
      'downvote' => 0,
      'description' => '',
      'posted_by' => ''
   ]);

};