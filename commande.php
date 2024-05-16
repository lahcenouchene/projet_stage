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
    <style>
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
                <div id="toolbar1" class="navbar">
                    <div class="navbar-inner">
                        <div class="container-fluid">
                            <ul id="toolbar1_l" class="nav">
                                <li>
                                    <a id="logo" href="index.html" aria-label="logo">
                                        <span id="logo-lt">2SBM</span>
                                        <span id="logo-rt"></span>
                                        <br>
                                        <span id="logo-sl">Génie Climatique pour les particuliers et les industries</span>
                                    </a>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-navbar" aria-label="Menu" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="nav-collapse collapse">
                                <ul id="toolbar1_r" class="nav pull-right">
                                    <li>
                                        <ul id="mainmenu" class="nav">
                                            <li class="active">
                                                <a href="index.php">ACCUEIL</a>
                                            </li>
                                            <li>
                                                <a href="services.php">SERVICES</a>
                                            </li>
                                            <li>
                                                <a href="secteurs-dintervention.php">SECTEURS D'INTERVENTION</a>
                                            </li>
                                            <li>
                                                <a href="realisations.php">REALISATIONS</a>
                                            </li>
                                            <li>
                                                <a href="contact.php">CONTACT</a>
                                            </li>
                                            <li>
                                                <a href="#" id="loginLink" data-toggle="modal" data-target="#loginModal">CONNEXION</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <footer style="margin-top: 100px; ">
                <section class="footer bg-dark text-white " style="width: 100%;">
                    <div id="footer" style="margin-top: -50px">
                        <div class="box-container" style="padding-top: 20px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="boxx">
                                            <div class="pobj flexobj">
                                                <img src="_media/img/small/3.png" srcset="_media/img/thumb/3.png 160w,_media/img/small/3.png 480w,_media/img/medium/3.png 768w,_media/img/large/3.png 1024w,_media/img/xlarge/3.png 1280w" style="max-width:100%;width:320px;" alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="boxx">
                                            <h3>Nos HORAIRES</h3>
                                            <a href="#"><i class="fas fa-arrow-right"></i> Du lundi au vendredi de
                                                8H00 à 17H30.
                                            </a>

                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="boxx">
                                            <h3>Liens</h3>
                                            <a href="index.tml"> <i class="fas fa-arrow-right"></i> Accueil </a>
                                            <a href="services.html"> <i class="fas fa-arrow-right"></i> Services </a>
                                            <a href="secteurs-dintervention.html"> <i class="fas fa-arrow-right"></i>
                                                Secteurs D'intervention </a>
                                            <a href="realisations.html"> <i class="fas fa-arrow-right"></i> Realisation
                                            </a>
                                            <a href="contact.html"> <i class="fas fa-arrow-right"></i> Contact </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="boxx">
                                            <h3>Contactez Nous</h3>
                                            <a href="#"> <i class="fas fa-phone"></i>06.61.77.35.70</a>
                                            <a href="#"> <i class="fas fa-phone"></i>06.99.37.86.22</a>
                                            <a href="#"> <i class="fas fa-envelope"></i> notre.equipe@2sbm.fr </a>
                                            <a href="#"> <i class="fas fa-map-marker-alt"></i>12 avenue du progrès
                                                69680 CHASSIEU.</a>
                                            <div id="toolbar3" class="navbar" style="display: flex; flex-direction: column;">
                                                <div class="navbar-inner">
                                                    <div class="container-fluid">
                                                        <ul id="toolbar3_r" class="nav pull-right">
                                                            <li>
                                                                <div id="sharebox" style=" display: inline-block;">
                                                                    <a target="_blank" href="https://twitter.com/yannougui" rel="noopener">
                                                                        <img style="width:1.5rem" src="_frame/tw-share-twitter.svg" alt="twitter">
                                                                    </a>
                                                                    <a target="_blank" href="https://www.linkedin.com/company/lauyan-software/" rel="noopener">
                                                                        <img style="width:1.5rem" src="_frame/tw-share-linkedin.svg" alt="linkedin">
                                                                    </a>
                                                                    <a target="_blank" href="https://www.youtube.com/user/LauyanSoftwareEN" rel="noopener">
                                                                        <img style="width:1.5rem" src="_frame/tw-share-youtube.svg" alt="youtube">
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="credit text-center text-white py-3">
                                <p style="color: #fffbfb;">2SBM 12 avenue du Progrès .SIREN 809097579 &nbsp;&nbsp;</p>
                            </div>
                            <div style="text-align: right;  ">
                                <a href="_tos.html" id="lnkdfc5e39d">Termes &amp;Conditions</a>
                            </div>
                        </div>
                    </div>

                </div>
                </section>
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
