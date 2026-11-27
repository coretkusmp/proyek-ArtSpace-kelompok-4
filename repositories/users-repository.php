<?php

require_once __DIR__ . "/../config/database.php";

function getUsers(){
   global $pdo;

   $query = "select * from users";
   $stmt = $pdo->prepare($query);
   $stmt->execute();

   $users = $stmt->fetchAll();
   return $users;
}

function getUser($id){
   global $pdo;

   $query = "select * from users where id = :id";
      $stmt = $pdo->prepare($query);
   $stmt->execute([
      "id" => $id
   ]);

   $user = $stmt->fetch();
   return $user;
}

function isEmailTaken($email, $excludeId = null)
{
    global $pdo;

    $query = "SELECT COUNT(id) FROM users WHERE email = :email";
    if ($excludeId) {
        $query .= " AND id != :id";
    }

    $stmt = $pdo->prepare($query);
    $params = ["email" => $email];
    if ($excludeId) {
        $params["id"] = $excludeId;
    }
    $stmt->execute($params);

    return $stmt->fetchColumn() > 0;
}