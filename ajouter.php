<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Ajouter</title>
</head>
<body>
    <form action="#" method ="post">
    <fieldset>
       <legend>Ajouter un etudiant </legend>
        <div>
            <label for="name"> Nom : </label>
            <input type="text" id="nom" name="nom">
        </div>   
        <br/>
        <div>
            <label for="name"> Prenom  :</label>
            <input type="text" id="prenom" name="prenom">
        </div> 
        <br/>
        <div>
            <label for="name"> Date de naissance : </label>
            <input type="date" id="date_naissance" name="date_naissance">
        </div> 
        <br/>
        <div>
            <label for="name"> Lieu de naissance : </label>
            <input type="text" id="lieu_naissance" name="lieu_naissance">
            <br>
        </div> 
        <br/>
        <input type="submit" name="submit" value="Envoyer">
</fieldset>
</form>
 <?php
       include('db_connexion.php');
       if (isset($_POST['submit'])) { // j'ai cliqué sur le boutton
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $date_naissance = $_POST["date_naissance"];
        $lieu_naissance = $_POST["lieu_naissance"];
        $sql= " INSERT INTO etudiant(nom,prenom,date_naissance,lieu_naissance) values ('$nom','$prenom','$date_naissance','$lieu_naissance')";
        mysqli_query($conn, $sql);
        echo ' Vous avez saisie les données avec succès.' ;
        }
 ?>
</body>
</html>