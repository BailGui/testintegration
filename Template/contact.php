<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../Public/CSS/style.css" />
</head>
<body>
<header><?php include('../Template/inc/bannière.php'); ?></header>
<?php include('../Template/inc/menu.php'); ?>
<div class="accueil">
    <h2>Pour nous contacter</h2>
    <img class="contact" src="../Public/CSS/images/contacts.jpg" alt="Contacts">

    <p class="pcontact"> <strong>Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous: </strong> </p>

    <label for="nom">NOM:</label>
        <input
          type="text"
          placeholder="Entrez votre nom ici"
          name="nom"
          id="nom"
        />
        <br />
        <label for="prenom">PRENOM:</label>
        <input
          type="text"
          name="prenom"
          id="prenom"
          placeholder="Entrez votre prenom ici"
        />
        <br />
        <label for="ville">VILLE:</label>
        <input
          type="text"
          name="ville"
          id="ville"
          placeholder="Entrez votre ville ici"
        />
        <br />
        <label for="email">E-MAIL:</label>
        <input
          type="text"
          name="e-mail"
          id="e-mail"
          placeholder="Entrez votre e-mail ici"
        />
        <br />
        <label for="commentaires">COMMENTAIRES:</label>
        <textarea
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