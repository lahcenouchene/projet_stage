<?php
if (isset($_POST['valider'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];
    require('connexion.php');
    $stage->exec("INSERT INTO fournisseur(nom,prenom,email,tel,adresse)
    VALUES('" . $nom . "','" . $prenom . "','" . $email . "','" . $tel . "','" . $adresse . "')"); // Modification ici, retrait de $tel en trop
    echo "<script>alert('Administrateur ajouté avec succès!');</script>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un fournisseur</title>
    <style>
      body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      color: #333;
    }

        .container {
            width: 100%;
            max-width: 500px;
            margin: 100px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Media Queries pour la mise en page responsive */
        @media only screen and (max-width: 600px) {
            .container {
                padding: 20px;
            }
        }

        @media only screen and (max-width: 400px) {
            .container {
                margin-top: 50px;
                border-radius: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ajouter un fournisseur</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="tel">Téléphone:</label>
                <input type="tel" id="tel" name="tel" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse" required>
            </div>
            <button type="submit" name="valider">Ajouter</button>
        </form>
        <a href="profil.php" style="display: block; width: 96%; padding: 12px; background-color: #28a745; color: #fff; text-align: center; text-decoration: none; border-radius: 5px; font-size: 16px; transition: background-color 0.3s; margin-top: 10px;">Retour</a>
    </div>
</body>
</html>
