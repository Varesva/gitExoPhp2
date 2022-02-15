<?php

// Afficher dans votre page votre nom prenom age mail date de naissance
// votre vie
// ...
// issue de l'url

// $user["nom"] = "TVS";
// $user["prenom"] = "Justine";
// $user["age"] = "24";
// $user["mail"] = "TVS@gmail.com";
// $user["birth"] = "06.09.1997";
// $user["ville"] = "Paris";

var_dump($_GET);?>
<br> <br> <br> 
<?php print_r($_GET);
?>
<br>
<hr>
<form method="post" action="user_form.php">
    <h2>Formulaire d'inscription :</h2>
    <label for="name"> Entrez votre nom: </label>
    <br> <input type="text" name="nom" value="" required>
<br>
    <label for="surname"> Entrez votre prénom: </label> 
    <br> <input type="text" name="prénom" value="" required>
<br>
    <label for="age"> Entrez votre age: </label>
    <br> <input type="text" name="age" value="">
<br>
    <label for="password"> Entrez votre mot de passe: </label>
    <br> <input type="password" name="pwd" value="" required>
<br>
<!-- bouton d'envoi -->
    <input type="submit" value="Envoyer le formulaire">

</form>