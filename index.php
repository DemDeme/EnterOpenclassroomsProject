<?php

require('src/controllers/homepage.php');

$title = "Accueil";

use Application\Controllers\Homepage\Homepage;

try
{
    (new Homepage())->execute($title);
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}