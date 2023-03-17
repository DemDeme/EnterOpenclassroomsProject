<?php

require_once('src/controllers/homepage.php');
require_once('src/controllers/encyclopedia.php');
require_once('src/controllers/contact.php');

use Application\Controllers\Homepage\Homepage;
use Application\Controllers\Encyclopedia\Encyclopedia;
use Application\Controllers\Contact\Contact;

try
{
    if(isset($_GET['action']))
        {
            if(isset($_GET['action']) && !isset($_GET['id']))
            {
                $title = "Contact";
                (new Contact())->execute($title);
            }
            else {
                $title = "Encyclopédie";
                (new Encyclopedia())->execute($title, $_GET['id']);
            }
        }
    else {
            $title = "Accueil";
            (new Homepage())->execute($title);
}
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}
