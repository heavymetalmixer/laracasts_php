<?php

// $books = [
//     [
//         "name" => "Do Androids Dream of Electric Sheep",
//         "author" => "Philip K. Dick",
//         "releaseYear" => "1968",
//         "purchaseURL" => "http://example.com"
//     ],
//     [
//         "name" => "Project Hail Mary",
//         "author" => "Andy Weir",
//         "releaseYear" => "2021",
//         "purchaseURL" => "http://example.com"
//     ],
//     [
//         "name" => "The Martian",
//         "author" => "Andy Weir",
//         "releaseYear" => "2011",
//         "purchaseURL" => "http://example.com"
//     ]
// ];

// function filter($items, $fn) {
//     $filteredItems = [];

//     foreach ($items as $item) {
//         if ($fn($item)) {
//             $filteredItems[] = $item;
//         }
//     }

//     return $filteredItems;
// }

// $filteredBooks = array_filter($books, function($book) {
//     return $book["author"] === "Andy Weir";
// });

// require "index.view.php";

// $name = "Laracasts";
// $cost = 15;

// $bussiness = [
//     "name" => "Laracasts",
//     "cost" => 15,
//     "categories" => ["Testing", "PHP", "Javascript"]
// ];

// if ($bussiness["cost"] > 99) {
//     echo "Not interested<br>";
// }

// foreach ($bussiness["categories"] as $category) {
//     echo $category . "<br>";
// }

// function register($user) {
//     // Create the user record in the db
//     // Log them in
//     // Send a welcome email
//     // Redirect their new dashboard
// }

// require "functions.php";

$heading = "Home";



require "views/index.view.php";

?>


