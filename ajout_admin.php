<?php
if (isset($_POST['valider'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // Hachage du mot de passe
    $tel = $_POST['tel'];
    require('connexion.php');
    $stage->exec("INSERT INTO administrateur(nom,prenom,email,mdp,tel)
    VALUES('" . $nom . "','" . $prenom . "','" . $email . "','" . $mdp . "','" . $tel . "')");
    echo "<script>alert('Administrateur ajouté avec succès!');</script>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un administrateur</title>
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

        button,
        .btn-back {
            display: block;
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .btn-back {
            background-color: #28a745;
            color: #fff;
            border: none;
            width: 95%;
        }

        .btn-back:hover {
            background-color: #5a6268;
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
        <h2>Ajouter un administrateur</h2>
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
                <label for="mdp">Mot de passe:</label>
                <input type="password" id="mdp" name="mdp" required>
            </div>
            <div class="form-group">
                <label for="tel">Téléphone:</label>
                <input type="tel" id="tel" name="tel" required>
            </div>
            <button type="submit" name="valider">Ajouter</button>
        </form>
        <a href="profil.php" class="btn-back">Retour</a>
    </div>
</body>
</html>
