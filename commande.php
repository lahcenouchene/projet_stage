<?php
if (isset($_POST['marquer_realisee'])) {
    $id_commande = $_POST['id_commande'];
    $date_realisation = date('Y-m-d H:i:s');
    $details = "Commande réalisée avec succès."; // Vous pouvez personnaliser ce message
    
    // Insérer dans la table `historique`
    require('connexion.php');
    $insertHistorique = $stage->prepare("INSERT INTO historique (id_commande, date_realisation, details) VALUES (:id_commande, :date_realisation, :details)");
    $insertHistorique->bindParam(':id_commande', $id_commande);
    $insertHistorique->bindParam(':date_realisation', $date_realisation);
    $insertHistorique->bindParam(':details', $details);
    $insertHistorique->execute();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Récapitulatif des commandes</title>
    <!-- Ajoutez ici vos métadonnées et styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="_frame/stylee.css" rel="stylesheet">
    <link rel="stylesheet" href="_frame/profil.css">
    <style>
        /* Votre CSS personnalisé ici */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        header h2, header h4 {
            margin: 0;
        }

        header nav a {
            color: black;
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
        }

        header nav a:hover {
            text-decoration: underline;
        }
        .container {
            margin-top: 20px;
        }

        .table {
            margin-bottom: 20px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #218838;
        }

        footer {
            margin-top: 20px;
            padding: 20px;
            background-color: #343a40;
            color: white;
            text-align: center;
        }
        .footer-link {
            color: #fff;
            text-decoration: none;
        }

        .footer-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="site">
        <div id="page">
            <header class="d-flex justify-content-between align-items-center">
                <div>
                    <h2>2SBM</h2>
                    <h4>Génie Climatique pour les particuliers et les industries</h4>
                </div>
                <nav>
                    <a href="commande.php">Commande</a>
                    <a href="ajout_admin.php">Ajout admin</a>
                    <a href="materiel.php">Matériaux</a>
                    <a href="fournisseur.php">Fournisseur</a>
                    <a href="historique.php">Historique</a>
                    <a href="profil.php" id="retourButton">Retour</a>
                </nav>
            </header>
            <div class="container">
                <h1 class="text-center">Récapitulatif des commandes</h1>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr style="background-color: #007bff; ">
                                <th>ID Commande</th>
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
                            $stmt = $stage->query("SELECT * FROM commande");
                            while ($row = $stmt->fetch()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['id_commande']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['nom_complet']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['objet']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['message']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['tel']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['date']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['autre_details']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['adresse']) . "</td>";
                                echo "<td>
                                    <form method='post'>
                                        <input type='hidden' name='id_commande' value='" . htmlspecialchars($row['id_commande']) . "'>
                                        <button type='submit' name='marquer_realisee' class='btn btn-success btn-sm'><i class='fas fa-check'></i> Marquer</button>
                                    </form>
                                </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <footer style="background-color: #343a40;">
                <div class="container" >
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
