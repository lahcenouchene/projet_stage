<?php
if (isset($_POST['valider'])) {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];
    $fournisseur = $_POST['fournisseur'];
    require('connexion.php');

    // Préparez et exécutez la requête pour insérer les données dans la base de données
    $query = $stage->prepare("INSERT INTO materiel (nom, prix, quantite, fournisseur) VALUES (:nom, :prix, :quantite, :fournisseur)");
    $query->bindParam(':nom', $nom);
    $query->bindParam(':prix', $prix);
    $query->bindParam(':quantite', $quantite);
    $query->bindParam(':fournisseur', $fournisseur);

    if ($query->execute()) {
        // Si l'insertion a réussi, affichez un message de succès
        echo "<script>alert('Matériel ajouté avec succès!');</script>";
    } else {
        // Si l'insertion a échoué, affichez un message d'erreur
        echo "<script>alert('Erreur lors de l\'ajout du matériel');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un matériel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

        .btn-view {
            display: block;
            width: 95%;
            padding: 12px;
            background-color: #28a745;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .btn-view:hover {
            background-color: #218838;
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
        <h2>Ajouter un matériel</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="prix">Prix:</label>
                <input type="text" id="prix" name="prix" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="quantite">Quantité:</label>
                <input type="text" id="quantite" name="quantite" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fournisseur">Fournisseur:</label>
                <input type="text" id="fournisseur" name="fournisseur" class="form-control" required>
            </div>
            <button type="submit" name="valider" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Ajouter</button>
        </form>
        <a href="liste_materiaux.php" class="btn btn-success btn-block mt-3"><i class="fas fa-list"></i> Voir la liste des matériaux</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
