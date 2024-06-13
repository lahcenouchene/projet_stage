<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Historique des réalisations</title>
    <!-- Liens vers vos fichiers CSS -->
    <link href="_frame/stylee.css" rel="stylesheet">
    <link rel="stylesheet" href="_frame/profil.css">
    <style>
        /* Votre CSS personnalisé ici */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Couleur de fond général */
            color: #333; /* Couleur de texte principale */
            margin: 0;
            padding: 0;
        }

        .container {
            width: 95%;
            margin: 20px auto;
            background-color: #fff; /* Fond du contenu */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: black;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #343a40; /* Couleur de fond des entêtes de colonnes */
            color: white; /* Couleur de texte des entêtes de colonnes */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Couleur de fond des lignes paires */
        }

        tr:hover {
            background-color: #ddd; /* Couleur de fond au survol des lignes */
        }

        nav a {
            color: #333; /* Couleur des liens dans la barre de navigation */
            text-decoration: none;
            margin: 0 10px;
            padding: 10px;
        }

        nav a:hover {
            background-color: #007bff; /* Couleur de fond au survol des liens */
            color: white; /* Couleur de texte au survol des liens */
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
