<?php

namespace Application\Controllers\Encyclopedia;

require_once('src/model/active.php');

use Application\Model\Active\Active;

class Encyclopedia
{
    public function execute($title, $identifier)
    {
        $nav = new Active();
        $navig = $nav->getActive($title);

        require_once('templates/encyclopedia.php');
    }
}
