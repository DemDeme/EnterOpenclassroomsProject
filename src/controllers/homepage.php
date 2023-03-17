<?php

namespace Application\Controllers\Homepage;

require_once('src/model/active.php');
require_once('src/lib/database.php');
require_once('src/model/plant.php');

use Application\Model\Active\Active;
use Application\Lib\Database\DatabaseConnection;
use Application\Model\Plant\LastPosts;
use Application\Model\Plant\RandomTop;


//Generate "Homepage" Page
class Homepage
{

    public function execute($title)
    {
        $connection = new DatabaseConnection();
        
        $nav = new Active();
        $navig = $nav->getActive($title);

        $postRepository = new LastPosts();
        $postRepository->connection = $connection;
        $posts = $postRepository->lastPosts();

        $randomTop = new RandomTop();
        $randomTop->connection = $connection;
        $selected = $randomTop->getRandomTop();

        require('templates/homepage.php');
    }
}