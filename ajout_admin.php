<?php
if (isset($_POST['valider'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // Hachage du mot de passe
    $tel = $_POST['tel'];
    require('connexion.php');
    $stage->exec("INSERT INTO administrateur(nom,prenom,email,mdp,tel)
    VALUES('$nom', '$prenom', '$email', '$mdp', '$tel')");
    echo "<script>alert('Administrateur ajouté avec succès!');</script>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un administrateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 500px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
            font-weight: bold;
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            padding: 10px 10px 10px 40px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            width: 100%;
        }
        .form-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s;
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-back {
            background-color: #28a745;
            color: #fff;
            transition: background-color 0.3s;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
        }
        .btn-back:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><i class="fas fa-user-plus icon"></i> Ajouter un administrateur</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="nom"><i class="fas fa-user"></i> Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="prenom"><i class="fas fa-user"></i> Prénom:</label>
                <input type="text" id="prenom" name="prenom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mdp"><i class="fas fa-lock"></i> Mot de passe:</label>
                <input type="password" id="mdp" name="mdp" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tel"><i class="fas fa-phone"></i> Téléphone:</label>
                <input type="tel" id="tel" name="tel" class="form-control" required>
            </div>
            <button type="submit" name="valider" class="btn btn-primary"><i class="fas fa-user-plus"></i> Ajouter</button>
        </form>
        <a href="profil.php" class="btn btn-back"><i class="fas fa-arrow-left"></i> Retour</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
