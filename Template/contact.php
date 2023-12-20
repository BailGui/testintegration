<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="../Public/CSS/style.css" />
</head>
<body>
<header><?php include('../Template/inc/bannière.php'); ?></header>
<nav><?php include('../Template/inc/menu.php'); ?></nav>
<div class="accueil">
    <h2>Pour nous contacter</h2>
    <img class="contact" src="../Public/CSS/images/contacts.jpg" alt="Contacts">

    <p class="pcontact"> <strong>Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous: </strong> </p>

    <label class="nom" for="nom">NOM:</label>
        <input class="formulaire"
          type="text"
          placeholder="Entrez votre nom ici"
          name="nom"
          id="nom"
        />
        <br />
        <label class="prenom" for="prenom">PRENOM:</label>
        <input class="formulaire1"
          type="text"
          name="prenom"
          id="prenom"
          placeholder="Entrez votre prenom ici"
        />
        <br />
        <label class="villecon" for="ville">VILLE:</label>
        <input class="formulaire2"
          type="text"
          name="ville"
          id="ville"
          placeholder="Entrez votre ville ici"
        />
        <br />
        <label class="email" for="email">E-MAIL:</label>
        <input class="formulaire3"
          type="text"
          name="e-mail"
          id="e-mail"
          placeholder="Entrez votre e-mail ici"
        />
        <br />
        <label class="com" for="commentaires">COMMENTAIRES:</label>
        <textarea 
        class="formulaire4"
          name="commentaires"
          id="commentaires"
          placeholder="Entrez vos commentaires ici">
    </textarea>

        <br>
        <br>
      

        <input class="envoyer" type="submit" value="Envoyer votre message" />

        <br>
        <br>

</div>

   
</body>
</html>