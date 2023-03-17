<?php

namespace Application\Controllers\Encyclopedia;

require_once('src/model/active.php');
require_once('src/lib/database.php');
require_once('src/model/plant.php');

use Application\Model\Active\Active;
use Application\Lib\Database\DatabaseConnection;
use Application\Model\Plant\PlantSheet;

class Encyclopedia
{
    public function execute($title, $identifier)
    {
        $connection = new DatabaseConnection();

        $nav = new Active();
        $navig = $nav->getActive($title);

        $sheetRepository = new PlantSheet();
        $sheetRepository->connection = $connection;
        $sheet = $sheetRepository->plantSheet($identifier);
        $photo = $sheetRepository->photos($identifier);
        $menu = $sheetRepository->menu();

        require_once('templates/encyclopedia.php');
    }
}