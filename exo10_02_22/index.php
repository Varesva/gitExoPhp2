<?php include("header.php"); ?> 


<!-- <form method="post" action="user_form.php">
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
bouton d'envoi
    <input type="submit" value="Envoyer le formulaire">
</form>  -->

<form action="log_in.php" method="post">
    <h2> Connexion</h2>
    <input type="text" placeholder="Veuillez entrez votre prénom" name="prenom">
    <br>
    <input type="password"  placeholder="Veuillez entrez votre mot de passe" name="mdp">
    <br>
    <input type="submit" value="Se connecter">
</form>


<?php include("footer.php"); ?> 
