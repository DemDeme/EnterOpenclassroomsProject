<?php
    ob_start();
    //Template Homepage
?>

        <div id="presentation">
            <div id="pres-bloc">
                <div class="pres-txt">
                    <h1>Passion Plante</h1>
                    <p>
                        Bienvenue à toi, Ô fan de plantes, sur ce fabuleux site fait par un passionné pour des passionnés !
                    </p>
                    <p>
                        A l'ère d'une planète de plus en plus polluée, les plantes sont devenues le moyen parfait alliant décoration pour 
                        tous les gouts et un intérieur purifié !
                    </p>
                    <p>
                        Cependant, tout comme l'humain, l'animal ou presque tout ce qui fait que le monde est monde, les plantes sont
                        toutes différentes les unes des autres. Eh oui, même chez deux plantes cousines, l'une et l'autre peuvent avoir 
                        des besoins différents.
                    </p>
                    <p>
                        Ici, tu trouveras la réponse à toutes tes questions. Alors prends un siège, installe toi bien confortablement 
                        et toi aussi apprend à bichonné tes bébés ! 
                    </p>
                </div>
                <div class="pres-img">
                    <img src="img/pres-pic.jpg">
                </div>
            </div>
        </div>
        <div id="posts-div">
            <h1>Derniers posts</h1>
            <div class="posts">
<?php 
    $i=0;
    while($i<=2) {
?>
        <a href="index.php?action=post&id=<?= $posts[$i]->id?>#spec" class="link-hover">
            <img src="img/<?= $posts[$i]->url?>">
            <div class="middle"><?= $posts[$i]->name?></div>
        </a>
<?php
        $i++;
    }
?>
            </div>
        </div>
        <div id="redac">
            <div class="redac-bloc">
                <div class="redac-img">
                    <img id="redac-rand-img" src="img/<?= $selected->url?>">
                    <h2><?= $selected->name?></h2>
                </div>
                <div class="redac-txt">
                    <div class="redac-stand">
                        <h1>Le Choix de la Rédac' ?</h1>
                        <p>
                            En panne d'inspiration ? Des doutes quant à l'association de tes plantes ?
                        </p>
                        <p>
                            Pourquoi ne pas te laisser inspiré par notre talentueuse rédaction ? Qui sait ce que tu y découvriras !
                        </p>
                    </div>
                    <div class="redac-rand">
                        <p><?= $selected->desc1?></p>
                        <a href="index.php?action=post&id=<?= $selected->id?>#spec" alt="Choix de la Rédac"><button type="button" class="btn btn-success">Venez la découvrir</button></a>
                    </div>
                </div>

            </div>
        </div>
<?php 
    $content = ob_get_clean();

    require('templates/layout.php');
?>