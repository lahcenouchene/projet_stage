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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        .btn-back {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Liste des matériaux</h2>
        <table>
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
        <a href="materiel.php" class="btn-back">Retour</a>
    </div>
</body>
</html>
