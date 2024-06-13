<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Historique des réalisations</title>
    <link href="_frame/stylee.css" rel="stylesheet">
    <link href="_script/bootstrap/css/bootstrap.flat.min.css" rel="stylesheet">
    <link rel="stylesheet" href="_frame/profil.css">
  

    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333; 
            margin: 0;
            padding: 0;
        }
  /* footer {
            background-color: #343a40;
            color: #fff;
            padding: 50px 0;
        } */

        .footer-link {
            color: #fff;
            text-decoration: none;
        }

        .footer-link:hover {
            text-decoration: underline;
        }
        .container {
            width: 95%;
            margin: 20px auto;
            background-color: #fff; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #343a40; 
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
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff; 
            color: white; 
            font-size: 14px;
            text-transform: uppercase;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        nav a {
            color: #333; 
            text-decoration: none;
            margin: 0 10px;
            padding: 10px;
            font-weight: bold;
        }

        nav a:hover {
          
            border-radius: 5px;
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
            <footer style="background-color: #343a40;">
                <div class="container" style="background-color: #343a40;">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="_media/img/small/3.png" srcset="_media/img/thumb/3.png 160w,_media/img/small/3.png 480w,_media/img/medium/3.png 768w,_media/img/large/3.png 1024w,_media/img/xlarge/3.png 1280w" style="max-width: 100%; width: 320px" alt="" loading="lazy" />
                        </div>
                        <div class="col-md-3">
                            <h3>Nos HORAIRES</h3>
                            <p style="color: white;">Du lundi au vendredi de 8H00 à 17H30.</p>
                        </div>
                        <div class="col-md-3">
                            <h3>Liens</h3>
                            <p><a href="index.php" class="footer-link">Accueil</a></p>
                            <p><a href="services.php" class="footer-link">Services</a></p>
                            <p><a href="secteurs-dintervention.php" class="footer-link">Secteurs D'intervention</a></p>
                            <p><a href="realisations.php" class="footer-link">Realisations</a></p>
                            <p><a href="contact.php" class="footer-link">Contact</a></p>
                        </div>
                        <div class="col-md-3">
                            <h3>Contactez Nous</h3>
                            <p style="color: white;"><i class="fas fa-phone"></i>06.61.77.35.70</p>
                            <p style="color: white;"><i class="fas fa-phone"></i>06.99.37.86.22</p>
                            <p style="color: white;"><i class="fas fa-envelope"></i>notre.equipe@2sbm.fr</p>
                            <p style="color: white;"><i class="fas fa-map-marker-alt"></i>12 avenue du progrès 69680 CHASSIEU.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
