<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>

<body>
        <form action="# " method="POST">
        <fieldset>
       <legend>Modifer l'etudiant qui a l'id =  <?php echo $_GET['id'];    ?></legend>
            <div>
                <label>Nom :</label>
                <input type="text" name="nom" required>
            </div>
           </br>
            <div>
                <label>Prenom :</label>
                <input type="text" name="prenom" required>
            </div>
            </br>
            <div >
                <label>Date de naissance :</label>
                <input type="date" name="date_naissance" required>
            </div>
            </br>
            <div >
                <label>Lieu de naissance :</label>
                <input type="text" name="lieu_naissance" required>
            </div>
            </br>
            <div>
                <input type="submit" name="submit" value="Envoyer">
            </div>
        </form>
</fieldset>


    <?php
    include 'db_connexion.php';
    if (isset($_POST['submit']) == "POST") {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $date_naissance = $_POST["date_naissance"];
        $lieu_naissance = $_POST["lieu_naissance"];
        $query = "UPDATE  etudiant set  nom = '$nom' , prenom= '$prenom',date_naissance='$date_naissance',lieu_naissance= '$lieu_naissance' where id=" . $_GET['id'] . " ";
        mysqli_query($conn, $query);
        echo 'La modification est effectuée avec succès. ' ;
    }

    ?>
</body>

</html>