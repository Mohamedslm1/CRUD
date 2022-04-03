<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Liste</title>
</head>

<body>
    <center>
        <table class="info">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Lieu de naissance</th>
                <th>Modifier</th>
                <th>Supprimer </th>
            </tr>
            <br>
            <?php
            include './db_connexion.php';
            $sql = "select * from etudiant";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?> </td>
                <td><?php echo $row['nom']; ?> </td>
                <td><?php echo $row['prenom']; ?> </td>
                <td><?php echo $row['date_naissance']; ?> </td>
                <td><?php echo $row['lieu_naissance']; ?> </td>
                <td ><?php echo '<a class="mod" href="modifier.php?id=' . $row['id'] . '">Modifier</a>' ?>
                </td>
                <td><?php echo '<a class ="sup" href="supprimer.php?id=' . $row['id'] . '">supprimer</a>' ?>
                </td>
            <tr>
                <?php }
            } else {
                echo " Aucun etudiant dans la table";
            }
                ?>
                <div class="etudiant">
                    <a class="etud" href=" ajouter.php" >Ajouter des étudiants</a>
                </div>
    </center>
</body>

</html>