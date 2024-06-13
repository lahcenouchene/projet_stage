<?php
require('connexion.php');

// Préparer et exécuter la requête pour récupérer les matériaux
$query = $stage->prepare("SELECT * FROM materiel");
$query->execute();
$materiaux = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des matériaux</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Couleur de fond */
            color: #333; /* Couleur du texte */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 80%;
            background-color: #fff; /* Couleur de fond du container */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #343a40; /* Couleur de fond des cellules d'en-tête */
            color: white; /* Couleur du texte des cellules d'en-tête */
        }

        .btn-back {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007bff; /* Couleur de fond du bouton */
            color: #fff; /* Couleur du texte du bouton */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #0056b3; /* Couleur de fond du bouton au survol */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Liste des matériaux</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Fournisseur</th>
                        <th>Prix Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($materiaux as $materiel) : ?>
                        <tr>
                            <td><?php echo isset($materiel['id_materiel']) ? htmlspecialchars($materiel['id_materiel']) : 'N/A'; ?></td>
                            <td><?php echo htmlspecialchars($materiel['nom']); ?></td>
                            <td><?php echo htmlspecialchars($materiel['prix']); ?></td>
                            <td><?php echo htmlspecialchars($materiel['quantite']); ?></td>
                            <td><?php echo htmlspecialchars($materiel['fournisseur']); ?></td>
                            <td><?php echo htmlspecialchars($materiel['prix_total']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <a href="materiel.php" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Retour</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
