<?php

require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../../validations/user-validation.php";
require_once __DIR__ . "/../../repositories/users-repository.php";

if(isset($_POST['store']) && $_SERVER['REQUEST_METHOD'] === "POST"){
   try{
      $pdo->beginTransaction();
   
      $request = getUserRequest($_POST);
   
      $query = "INSERT INTO users (username, email, password) 
                VALUES (:username, :email, :password)";
   
      $stmt = $pdo->prepare($query);
      $stmt->execute([
         "username" => $request['username'],
         "email" => $request['email'],
         "password" => $request['password'],
      ]);
   
      $pdo->commit();
   } catch (PDOException $e) {
      throw $e;
   }
}