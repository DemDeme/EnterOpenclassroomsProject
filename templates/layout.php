<!-- Layout page
     Used by each main page -->

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
                            <li class="nav-item <?= $navig->homepage ?>">
                                <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item <?= $navig->encyclopedia ?>">
                                <a class="nav-link" href="index.php?action=post&id=0">Encyclopédie</a>
                            </li>
                            <li class="nav-item <?= $navig->contact ?>">
                                <a class="nav-link" href="index.php?action=post">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <?= $content ?>
        
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