<?php
    $title = "Encyclopédie";
    
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
                    <h1>White Princess<!--Dénomination--></h1>
                    <div id="desc">
                        <p>
                            <strong>Nom scientifique :</strong> Philodendron 'white princess'<br>
                            <strong>Nom commun :</strong> Philodendron<br>
                            <strong>Famille :</strong> Araceae (Aracées)<br>
                            <strong>Origine :</strong> Amérique central, Amérique du Sud<br>
                            <strong>Emplacement :</strong> intérieur<br>
                        </p>
                        <p>
                            C'est une vraie warrior : elle n'est ni gourmande en eau, ni en lumière, et développe quand même de grandes 
                            feuilles brillantes verte claire avec des variégations.
                        </p>
                        <p>
                            Bon à savoir : tu peux le tuteurer ou alors le laisser en port libre, il retombera légèrement. Les Philodendron 
                            sont des plantes épiphytes, de vraies grimpeuses d'arbres, c'est donc naturel pour elles. Et d'ailleurs, plus elles 
                            tombent, plus les feuilles sont petites (ce n'est pas systématique mais ça arrive très souvent). Pourquoi ? Parce 
                            qu'elles dépensent une énergie folle en cherchant continuellement un support où s'accrocher pour grimper. Une 
                            énergie qu'elles utilisent habituellement pour développer leurs feuilles. Il faut alors choisir : une belle cascade 
                            et potentiellement des petites feuilles, ou un tuteur et de larges feuilles à coup sûr.
                        </p>
                        <p>
                            Le philodendron 'white princess' aura besoin d'une lumière vive bien qu'indirecte. Elle possède de la chlorophylle 
                            uniquement sur les parties vertes des feuilles, par conséquent elle boit moins bien la lumière qu'un philodendron 
                            classique.
                        </p>
                        <p>
                            Et surtout, évite à tout prix le soleil direct, les variégations ont tendance à brûler puis noircir, assez rapidement.
                        </p>
                    </div>
                    <div class="need">
                        <div>
                            <h3>Exposition</h3>
                            <p>
                                A la lumière ou à la mi ombre, mais jamais de soleil direct
                            </p>
                            <h3>Arrosage</h3>
                            <p>
                                Une fois par semaine au printemps / été, et une fois tous les 10 à 14 jours en automne/ hiver
                            </p>
                            <h3>Rempotage</h3>
                            <p>
                                Dès qu'il y a plus de racines que de terreau, il faut rempoter ! La taille du pot ? 3 à 5 cm maximum de plus que le pot initial.
                            </p>
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

    require('src/model/active.php');
    require('templates/layout.php');
?>