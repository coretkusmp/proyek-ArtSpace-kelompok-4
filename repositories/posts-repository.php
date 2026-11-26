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

function getPost($id){
   global $pdo;

   $query = "select * from posts where id = :id";
      $stmt = $pdo->prepare($query);
   $stmt->execute([
      "id" => $id
   ]);

   $post = $stmt->fetch();
   return $post;
}