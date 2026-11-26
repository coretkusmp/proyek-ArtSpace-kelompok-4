<?php

require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../repositories/users-repository.php" ;

function getUserRequest($request){
   return [
   "id" => $request['id'] ?? [],
   "category_name" => $request['category_name'],
   "email" => $request['email'],
   "password" => $request['password'],
   ];
}