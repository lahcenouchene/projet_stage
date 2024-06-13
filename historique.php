<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Historique des réalisations</title>
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
                        <a href="Recherche.php">Historique</a>
                        <a href="profil.php" id="retourButton">Retour</a>
                    </nav>
                </div>
            </header>
            <div class="container">
                <h1>Historique des réalisations</h1>
                <table>
                    <thead>
                        <tr>
                            <th>ID Historique</th>
                            <th>ID Commande</th>
                            <th>Date Réalisation</th>
                            <th>Détails</th>
                            <th>Nom Complet</th>
                            <th>Objet</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Téléphone</th>
                            <th>Autres Détails</th>
                            <th>Adresse</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require('connexion.php');
                        $stmt = $stage->query("SELECT h.id_historique, h.id_commande, h.date_realisation, h.details, c.nom_complet, c.objet, c.email, c.message, c.tel, c.autre_details, c.adresse 
                                               FROM historique h 
                                               JOIN commande c ON h.id_commande = c.id_commande");
                        while ($row = $stmt->fetch()) {
                            echo "<tr>";
                            echo "<td>" . $row['id_historique'] . "</td>";
                            echo "<td>" . $row['id_commande'] . "</td>";
                            echo "<td>" . $row['date_realisation'] . "</td>";
                            echo "<td>" . $row['details'] . "</td>";
                            echo "<td>" . $row['nom_complet'] . "</td>";
                            echo "<td>" . $row['objet'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['message'] . "</td>";
                            echo "<td>" . $row['tel'] . "</td>";
                            echo "<td>" . $row['autre_details'] . "</td>";
                            echo "<td>" . $row['adresse'] . "</td>";
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
