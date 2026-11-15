<?php

require_once __DIR__ . "/../config/database.php";

function getPosts(){
   global $pdo;

   $query = "select * from posts";
   $stmt = $pdo->prepare($query);
   $stmt->execute();

   $posts = $stmt->fetchAll();
   return $posts;
}