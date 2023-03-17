<?php    
    ob_start();
?>

        <div class="plant-rand">
            <ul class="nav flex-column css-enc"> 
            <?php
                $i=0;
                while(isset($menu[$i]))
                {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=post&id=<?= $i ?> "><?= $menu[$i] ?></a>
                </li>
            <?php
                $i++;    
                }
            ?>
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
                        <?php
                            $i=0;
                            while($i<8)
                                {
                        ?>
                                    <a href="img/<?= $photo[$i] ?>" class="pic-hover">
                                        <img src="img/<?= $photo[$i] ?>">
                                        <div class="middle">Voir la photo</div>
                                    </a>
                        <?php
                            $i++;    
                            }
                        ?>
                    </div>
                </div>
            </main>
        </div>
<?php 
    $content = ob_get_clean();

    require('templates/layout.php');
?>