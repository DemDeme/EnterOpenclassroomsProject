<?php

namespace Application\Controllers\Contact;

require_once('src/model/active.php');

use Application\Model\Active\Active;
//Generate "Contact" Page
class Contact
{
    public function execute($title)
    {
        $nav = new Active();
        $navig = $nav->getActive($title);

        require_once('templates/contact.php');
    }
}
