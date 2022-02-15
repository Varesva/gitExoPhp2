<?php


$conn = new mysqli('localhost', 'root', 'root');
// var_dump($conn);

if ($conn->connect_error)
die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

include "SimpleOrm.class.php";

  SimpleOrm::useConnection($conn, 'exophp2');

  include "Exoutilisateurs.php";

  
  $entry = Exoutilisateurs::all();
  print_r($entry);
  
//   $i = Exoutilisateurs ();
//   for $affiche_user ($entry) {
      
// }
// echo $affiche_user;

// $entry->mail = 'doe22@gmail.com!';
// $entry->save();


// $entry->nom = 'Aziz';
// $entry->prenom = 'Hanan';
// $entry->motdepasse = "2334";
// $entry->age = "37";
// $entry->mail = 'Azizhanan@mail.com';
// $entry->save();

// $entry->delete();