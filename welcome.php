<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1> Bienvenue Mme/Mr  " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Se déconnecter</a>
<hr>

<h1> Formulaire pour ajouter une carte visite </h1>

<form method="post">
<fieldset>
         <legend>Vos coordonnées</legend> <br> <!-- Titre du fieldset -->

        <label for="nom">Name</label>
        <input type="text" name="nom" id="nom" /> <br> <br>

        <label for="prenom">Company</label>
        <input type="text" name="Company" id="prenom" /><br> <br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" /><br> <br>

        <label for="email">tel</label>
        <input type="text" name="tel" id="tel" /> <br> <br>

        <button name="submit" class="btn">S'enregistrer</button>
</fieldset>

</body>
</html>