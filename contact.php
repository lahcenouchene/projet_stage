<?php
// Inclusion du fichier de connexion
require('connexion.php');

if (isset($_POST['envoyer'])) {
    $nom_complet = $_POST['nom_complet'];
    $objet = $_POST['objet'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $tel = $_POST['tel'];
    $date = $_POST['date'];
    $autre_details = $_POST['autre_details'];
    $adresse = $_POST['adresse'];

    // Utilisation de requêtes préparées pour éviter les injections SQL
    $stmt = $stage->prepare("INSERT INTO commande(nom_complet, objet, email, message, tel, date, autre_details,adresse) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
    $stmt->execute([$nom_complet, $objet, $email, $message, $tel, $date, $autre_details, $adresse]);

    // Facultatif : Affichage d'un message de succès
    //echo "Données insérées avec succès!";
    echo "<script>alert('Commande envoyée avec succès!');</script>";
}
?>
















<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta property="og:url" content="http://www.2sbm.fr/contact.html">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="2SBM">
    <meta property="og:title" content="2SBM">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="2SBM">
    <meta name="generator" content="Lauyan TOWeb 11.0.6.956">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <link href="_script/bootstrap/css/bootstrap.flat.min.css" rel="stylesheet">
    <link href="_frame/style.css" rel="stylesheet">
    <link rel="stylesheet" href="_scripts/leaflet/leaflet.css" />
    <style>
        .raty-comp {
            padding: 8px 0;
            font-size: 10px;
            color: #FD9317
        }

        .tw-blogbar {
            display: flex;
            align-items: center
        }

        @media (max-width: 767px) {
            .tw-blogbar {
                flex-direction: column;
            }
        }

        .alert a {
            color: #003399
        }

        .ta-left {
            text-align: left
        }

        .ta-center {
            text-align: center
        }

        .ta-justify {
            text-align: justify
        }

        .ta-right {
            text-align: right
        }

        .float-l {
            float: left
        }

        .float-r {
            float: right
        }

        .flexobj {
            flex-grow: 0;
            flex-shrink: 0;
            margin-right: 1em;
            margin-left: 1em
        }

        .flexrow {
            display: flex !important;
            align-items: center
        }

        .flexrow-align-start {
            align-items: start
        }

        @media (max-width: 767px) {
            .flexrow {
                flex-direction: column
            }

            .flexrow-align-start {
                align-items: center
            }
        }

        .tw-para a.tw-lflnk:not(.btn) {
            color: #000
        }

        .tw-para a.tw-lflnk:not(.btn):hover {
            text-decoration: none
        }

        .tw-bkgimg-fE9JnvHd {
            z-index: 0;
            position: relative;
            overflow-y: hidden;
            overflow-x: hidden;
            background-color: #000;
        }

        .tw-bkgimg-fE9JnvHd::before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: url("_media/img/large/pod-laura-the-unscheduled-conversations-and-chance-encounters-t-075efc97-10ca-4092-8fa6-d4bbee70b5c3.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.6;
        }
    </style>
    <link href="_frame/print.css" rel="stylesheet" type="text/css" media="print">
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
            <div id="content" class="container-fluid">
                <div class="row-fluid">
                    <div class="span12"></div>
                </div>
                <div id="topic" class="row-fluid">
                    <div id="topic-inner">
                        <div id="top-content" class="span12">
                            <div class="twpara-row row-fluid">
                                <div id="fE9JnvHd" class="span12 tw-para tw-parallax tw-bkgimg-fE9JnvHd tw-wtxt">
                                    <h2 style="text-align:center">
                                        <div>
                                            <br>
                                        </div>
                                        <div>
                                            <br>
                                        </div>
                                        <div>
                                            <br>
                                        </div>
                                        <div>
                                            <br>
                                        </div>
                                        <div>
                                            <span style="font-size:54px;">Contactez nous</span>
                                        </div>
                                        <div>
                                            <br>
                                        </div>
                                        <div>
                                            <br>
                                        </div>
                                        <div>
                                            <br>
                                        </div>
                                    </h2>
                                </div>
                            </div>
                            <div class="twpara-row row-fluid">
                                <div id="dpzMMeJ4" class="span12 tw-para flexrow flexrow-align-start ">
                                    <div class="pobj flexobj">
                                        <img src="_media/img/small/3.png" srcset="_media/img/thumb/3.png 160w,_media/img/small/3.png 480w,_media/img/medium/3.png 768w,_media/img/large/3.png 1024w,_media/img/xlarge/3.png 1280w" style="max-width:100%;width:320px;" alt="" loading="lazy">
                                    </div>
                                    <div>
                                        <h2 style="text-align:center">Contactez-nous</h2>
                                        <div class="ptext">
                                            <div style="text-align: center;">Pour toute demande de devis, de rendez-vous
                                                ou de renseignements
                                                supplémentaires, n'hésitez pas à nous contacter.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section id="contact">
                                <h1 class="title">Contact</h1>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="left-right">
                                        <div class="left">
                                            <label>Nom Complet</label>
                                            <input type="text" id="nom_complet" name="nom_complet">
                                            <label>Objet</label>
                                            <input type="text" id="objet" name="objet">
                                            <label>Email</label>
                                            <input type="text" id="email" name="email">
                                            <label>Message</label>
                                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="right">
                                            <label>Teléphone</label>
                                            <input type="text" id="tel" name="tel">
                                            <label>Date</label>
                                            <input type="date" id="date" name="date">
                                            <label>Autres Details</label>
                                            <input type="text" id="autre_details" name="autre_details">
                                            <label>Adresse</label>
                                            <input type="text" id="adresse" name="adresse">
                                        </div>
                                    </div>
                                    <button type="submit" name="envoyer">Envoyer</button>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <footer style="  margin-top: 100px;">
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
                                        </div>
                                        </a>

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
    <script src="_scripts/jquery/jquery.min.js"></script>
    <script src="_scripts/bootstrap/js/bootstrap.min.js"></script>
    <script src="_scripts/leaflet/leaflet.js"></script>
    <script>
        function decMail2(e) {
            var s = "" + e.href,
                n = s.lastIndexOf("/"),
                w;
            if (s.substr(0, 7) == "mailto:")
                return (true);
            if (n > 0)
                s = s.substr(n + 1);
            s = s.replace("?", ":").replace("#", "@").replace(/[a-z]/gi, function(t) {
                return String.fromCharCode(t.charCodeAt(0) + (t.toLowerCase() < "n" ? 13 : -13));
            });
            e.href = s;
            return (true);
        }

        function onChangeSiteLang(href) {
            var i = location.href.indexOf("?");
            if (i > 0)
                href += location.href.substr(i);
            document.location.href = href;
        }
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