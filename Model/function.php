<?php

function getUsers() {
  return [
    ["name" => "Jean-luc", "password" => "Simplon1478963", "status" => "admin", "sexe" => "homme"],
    ["name" => "Claire45", "password" => "toutlesmatINS", "status" => "admin", "sexe" => "femme"],
    ["name" => "Doudou", "password" => "password", "status" => "user", "sexe" => "homme"],
    ["name" => "ReneGard", "password" => "mai68", "status" => "writer", "sexe" => "homme"],
  ];
}

function getErrors() {
  return [
    [
      "id" => 0,
      "name" => "pas assez de caracteres (3)",
    ],
    [
      "id" => 1,
      "name" => "mot de passe different",
    ],
    [
      "id" => 2,
      "name" => "pas assez de caracteres (6)",
    ],
    [
      "id" => 3,
      "name" => "pas de majuscule (1)",
    ],
    [
      "id" => 4,
      "name" => "pas de chiffre (1)",
    ],
    [
      "id" => 5,
      "name" => "Tous les champs ne sont pas remplis",
    ],
  ];
}

function getProducts() {
  return [
    [
      "id" => 0,
      "name" => "Chevrolet Impala",
      "price" => 35000,
      "stock" => false,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "car",
      "made_in"=> "USA"
    ],
    [
      "id" => 1,
      "name" => "Xbox",
      "price" => 500,
      "stock" => true,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "video games",
      "made_in"=> "China"
    ],
    [
      "id" => 2,
      "name" => "MacBook Pro",
      "price" => 2000,
      "stock" => true,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "computer",
      "made_in"=> "China"
    ],
    [
      "id" => 3,
      "name" => "VTT randonnée",
      "price" => 450,
      "stock" => true,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "sport",
      "made_in"=> "France"
    ],
    [
      "id" =>4,
      "name" => "Rolex 1968",
      "price" => 15000,
      "stock" => true,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "watch",
      "made_in"=> "Switzerland"
    ],
    [
      "id" =>5,
      "name" => "A blue dress",
      "price" => 150,
      "stock" => false,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "clothes",
      "made_in"=> "Britain"
    ]
  ];
}

 ?>
