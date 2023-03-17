<?php    
    ob_start();
?>

        <div class="plant-rand">
            <ul class="nav flex-column css-enc">
                <li class="nav-item">
                    <a class="nav-link" href="#">Sansevieria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">White Princess</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <main>
                <div id="spec">
                    <h1><?= $sheet->name ?></h1>
                    <div id="desc">
                        <p>
                            <strong>Nom scientifique : </strong><?= $sheet->scientist ?><br>
                            <strong>Nom commun : </strong><?= $sheet->common ?><br>
                            <strong>Famille : </strong><?= $sheet->family ?><br>
                            <strong>Origine : </strong><?= $sheet->origin ?><br>
                            <strong>Emplacement : </strong><?= $sheet->localization ?><br>
                        </p>
                        <p><?= $sheet->desc1 ?></p>
                        <p><?= $sheet->desc2 ?></p>
                        <p><?= $sheet->desc3 ?></p>
                        <p><?= $sheet->desc4 ?></p>
                    </div>
                    <div class="need">
                        <div>
                            <h3>Exposition</h3>
                            <p><?= $sheet->exposition ?></p>

                            <h3>Arrosage</h3>
                            <p><?= $sheet->watering ?></p>

                            <h3>Rempotage</h3>
                            <p><?= $sheet->repotting ?></p>
                        </div>
                    </div>
                </div>
                <div class="some-pictures">
                    <h2>En image</h2>
                    <div class="pictures">
                        <a href="img/wp1.jpg" class="pic-hover">
                            <img src="img/wp1.jpg">
                            <div class="middle">Voir la photo</div>
                        </a>
                        <a href="img/wp2.jpg" class="pic-hover">
                            <img src="img/wp2.jpg">
                            <div class="middle">Voir la photo</div>
                        </a>
                        <a href="img/wp3.jpg" class="pic-hover">
                            <img src="img/wp3.jpg">
                            <div class="middle">Voir la photo</div>
                        </a>
                        <a href="img/wp4.jpg" class="pic-hover">
                            <img src="img/wp4.jpg">
                            <div class="middle">Voir la photo</div>
                        </a>
                        <a href="img/wp3.jpg" class="pic-hover">
                            <img src="img/wp3.jpg">
                            <div class="middle">Voir la photo</div>
                        </a>
                        <a href="img/wp4.jpg" class="pic-hover">
                            <img src="img/wp4.jpg">
                            <div class="middle">Voir la photo</div>
                        </a>
                        <a href="img/wp1.jpg" class="pic-hover">
                            <img src="img/wp1.jpg">
                            <div class="middle">Voir la photo</div>
                        </a>
                        <a href="img/wp2.jpg" class="pic-hover">
                            <img src="img/wp2.jpg">
                            <div class="middle">Voir la photo</div>
                        </a>
                    </div>
                </div>
            </main>
        </div>
<?php 
    $content = ob_get_clean();

    require('templates/layout.php');
?>