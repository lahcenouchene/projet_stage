<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Récapitulatif des commandes</title>
    <meta property="og:url" content="http://www.2sbm.fr/contact.html">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="2SBM">
    <meta property="og:title" content="2SBM">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="2SBM">
    <meta name="generator" content="Lauyan TOWeb 11.0.6.956">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link href="_script/bootstrap/css/bootstrap.flat.min.css" rel="stylesheet">
    <link href="_frame/stylee.css" rel="stylesheet">
    <link rel="stylesheet" href="_scripts/leaflet/leaflet.css" />
    <link href="_frame/print.css" rel="stylesheet" type="text/css" media="print">
    <link rel="stylesheet" href="_frame/profil.css">
    <style>
         body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      color: #333;
    }
        footer {
      background-color: #343a40;
      color: #fff;
      padding: 50px 0;
    }

    .footer-link {
      color: #fff;
      text-decoration: none;
    }

    .footer-link:hover {
      text-decoration: underline;
    }
        /* Votre CSS personnalisé ici */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
    <a href="commande.php">commande</a>
    <a href="ajout_admin.php">Ajout admin</a>
    <a href="materiel.php">Matériaux</a>
    <a href="fournisseur.php">Fournisseur</a>
    <a href="Recherche.php">Historique</a>
    <a href="index.php" id="logoutButton">Se Deconnecter</a>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require('connexion.php');
                        $stmt = $stage->query("SELECT * FROM command");
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
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <footer>
                <div class="container">
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
    <script src="_scripts/jquery/jquery.min.js"></script>
    <script src="_scripts/bootstrap/js/bootstrap.min.js"></script>
    <script src="_scripts/leaflet/leaflet.js"></script>
    <script>
        // Vos scripts JavaScript ici
    </script>
    <script>
        $(document).ready(function() {
            var lfmap_FIKmQ7Jh = L.map("lfmap_FIKmQ7Jh").setView([45.7369101, 4.9680924], 16);
            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: "&copy; <a class='tw-lflnk' href='https://www.openstreetmap.org/' target='_blank'>OpenStreetMap</a> © <a class='tw-lflnk' href='https://www.mapbox.com/' target='_blank'>Mapbox</a>",
                id: "mapbox/streets-v11"
            }).addTo(lfmap_FIKmQ7Jh);
            lfmap_FIKmQ7Jh.scrollWheelZoom.disable();
            var lfmkr_FIKmQ7Jh = L.marker([45.7369101, 4.9680924]).addTo(lfmap_FIKmQ7Jh);
            lfmkr_FIKmQ7Jh.bindPopup("<b>2SBM</b><br>12 avenue du Progrès 69680 Chassieu").openPopup();
            if (location.href.indexOf("?") > 0 && location.href.indexOf("twtheme=no") > 0) {
                $("#toolbar1,#toolbar2,#toolbar3,#footersmall,#footerfat").hide();
                var idbmk = location.href;
                idbmk = idbmk.substring(idbmk.lastIndexOf("#") + 1, idbmk.lastIndexOf("?"));
                if (idbmk != "") {
                    idbmk = idbmk.split("?")[0];
                    if ($("#" + idbmk + "_container").length)
                        idbmk += "_container";
                    $("html,body").animate({
                        scrollTop: $("#" + idbmk).offset().top
                    }, 0);
                }
            }
            $(".lfmap").each(function() {
                $(this).find("a").each(function() {
                    if ($(this).text() == "Leaflet") {
                        $(this).attr("target", "_blank");
                        $(this).addClass("tw-lflnk");
                        $(this).attr("title", "");
                    }
                });
            });
            if (typeof onTOWebPageLoaded == "function")
                onTOWebPageLoaded();
        });
    </script>
</body>

</html>
