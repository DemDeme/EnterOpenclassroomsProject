<?php

namespace Application\Controllers\Homepage;

require_once('src/model/active.php');

use Application\Model\Active\Active;



class Homepage
{

    public function execute($title)
    {
        $nav = new Active();
        $navig = $nav->getActive($title);

        require('templates/homepage.php');
    }
}