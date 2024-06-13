<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Récapitulatif des commandes</title>
    <!-- Ajoutez ici vos métadonnées et styles -->
    <link href="_frame/stylee.css" rel="stylesheet">
    <link rel="stylesheet" href="_frame/profil.css">
    <style>
        /* Votre CSS personnalisé ici */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            width: 95%;
            margin: 20px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: black;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div id="site">
        <div id="page">
            <header>
                <div class="div1">
                    <h2>2SBM</h2>
                    <h4>Génie Climatique pour les particuliers et les industries</h4>
                </div>
                <div class="div2">
                    <nav>
                        <a href="commande.php">Commande</a>
                        <a href="ajout_admin.php">Ajout admin</a>
                        <a href="materiel.php">Matériaux</a>
                        <a href="fournisseur.php">Fournisseur</a>
                        <a href="historique.php">Historique</a>
                        <a href="profil.php" id="retourButton">Retour</a>
                    </nav>
                </div>
            </header>
            <div class="container">
                <h1>Récapitulatif des commandes</h1>
                <table>
                    <thead>
                        <tr>
                            <th>id_commande</th>
                            <th>Nom Complet</th>
                            <th>Objet</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Téléphone</th>
                            <th>Date</th>
                            <th>Autres Détails</th>
                            <th>Adresse</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require('connexion.php');
                        if (isset($_POST['marquer_realisee'])) {
                            $id_commande = $_POST['id_commande'];
                            $date_realisation = date('Y-m-d H:i:s');
                            $details = "Commande réalisée avec succès."; // Vous pouvez personnaliser ce message
                            
                            // Insérer dans la table `historique`
                            $insertHistorique = $stage->prepare("INSERT INTO historique (id_commande, date_realisation, details) VALUES (:id_commande, :date_realisation, :details)");
                            $insertHistorique->bindParam(':id_commande', $id_commande);
                            $insertHistorique->bindParam(':date_realisation', $date_realisation);
                            $insertHistorique->bindParam(':details', $details);
                            $insertHistorique->execute();
                        }

                        $stmt = $stage->query("SELECT * FROM commande");
                        while ($row = $stmt->fetch()) {
                            echo "<tr>";
                            echo "<td>" . $row['id_commande'] . "</td>";
                            echo "<td>" . $row['nom_complet'] . "</td>";
                            echo "<td>" . $row['objet'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['message'] . "</td>";
                            echo "<td>" . $row['tel'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['autre_details'] . "</td>";
                            echo "<td>" . $row['adresse'] . "</td>";
                            echo "<td>
                                <form method='post'>
                                    <input type='hidden' name='id_commande' value='" . $row['id_commande'] . "'>
                                    <button type='submit' name='marquer_realisee'>Marquer comme réalisée</button>
                                </form>
                            </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <footer>
                <!-- Votre footer ici -->
            </footer>
        </div>
    </div>
    <!-- Scripts -->
    <script src="_scripts/jquery/jquery.min.js"></script>
    <script src="_scripts/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
