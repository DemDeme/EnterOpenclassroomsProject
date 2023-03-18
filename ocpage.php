<?php
    $title = "OpenClassroom Page";
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title><?= $title ?> - Passion Plante</title>
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="css/encyclopedia.css" type="text/css" rel="stylesheet">
        <link href="css/contact.css" type="text/css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="index.php"><img src="img/logo.jpg" alt="logo" title="Passion Plante"></a>
            </div>
            <div id="navbarh">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?action=post&id=1">Encyclopédie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?action=post">Contact</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="ocpage.php">OpenClassroom</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
            <div class="oc-box">
                <div class="video">
                <video controls width="1024px">
                    <source src="screencast.mkv" type="video/mp4">
                </video>
                </div>
                <div class="dl">
                    <a href="projetphpoc.zip" download="mehdi.passionplante.oc-project.rar"><img src="img/winrar.png" target="_blank" alt="Winrar" width="150px"><br>Télécharger l'archive</a>
                </div>
                <div class="oc-links">
                    <a href="https://www.linkedin.com/in/mehdi-ala-299930176/"><img src="img/linkedin.png" target="_blank" alt="Linkedin">My Linkedin</a>
                    <br><br>
                    <a href="https://github.com/DemDeme"><img src="img/github.png" target="_blank" alt="Github">My Github</a>
                </div>
            </div>
            
        
        <footer>
            <div class="logo">
                <a href="index.php"><img src="img/logo.jpg" alt="logo" title="Passion Plante"></a>
            </div>
            <div class="copyright"><u>Passion Plante</u> codé par Mehdi ALA</div>
            <div class="social">
                <a href="https://twitter.com/"><img src="img/twitter.png" target="_blank" alt="Twitter"></a>
                <a href="https://www.instagram.com/"><img src="img/instagram.png" target="_blank" alt="Instagram"></a>
                <a href="https://www.linkedin.com/in/mehdi-ala-299930176/"><img src="img/linkedin.png" target="_blank" alt="Linkedin"></a>
            </div>
        </footer>
    </body>
</html>