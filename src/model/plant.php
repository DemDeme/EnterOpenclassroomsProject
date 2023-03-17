<?php

namespace Application\Model\Plant;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class Plant
{
    public int $id;
    public string $name;
    public string $scientist;
    public string $common;
    public string $family;
    public string $origin;
    public string $localization;
    public string $desc1;
    public string $desc2;
    public string $desc3;
    public string $desc4;
    public string $exposition;
    public string $watering;
    public string $repotting;
    // public string $rank;
    // public string $date;
    public string $url;
}
class TopPlant
{
    public int $id;
    public string $name;
    public string $desc1;
    public string $desc2;
    public string $url;
}
//Generate 3 tables for 3 last posts
class LastPosts
{
    public DatabaseConnection $connection;
    public function lastPosts() : array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT id, name_website, rep FROM plants ORDER BY date_add DESC LIMIT 0,3"
        );

        $plants = [];
        while ($row = $statement->fetch()) {
            $plant = new TopPlant();
            $plant->id = $row['id'];
            $plant->name = $row['name_website'];
            $plant->url = $row['rep'];
            
            $plants[] = $plant;
        }
        return $plants;
    }
}

//Generate Sheet for each plant with own "id", complete menu and list all photos
class PlantSheet
{
    public DatabaseConnection $connection;

    //Function for sheet
    public function plantSheet(int $identifier) : Plant
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT id, name_website, name_scientist, name_common, family, origin, localization, desc1, desc2, desc3, desc4, exposition, watering, repotting, 
            rep FROM plants WHERE id = ?"
        );
        $statement->execute([$identifier]);
        $row = $statement->fetch();

            $plant = new Plant();
            $plant->id = $row['id'];
            $plant->name = $row['name_website'];
            $plant->scientist = $row['name_scientist'];
            $plant->common = $row['name_common'];
            $plant->family = $row['family'];
            $plant->origin = $row['origin'];
            $plant->localization = $row['localization'];
            $plant->desc1 = $row['desc1'];
            $plant->desc2 = $row['desc2'];
            $plant->desc3 = $row['desc3'];
            $plant->desc4 = $row['desc4'];
            $plant->exposition = $row['exposition'];
            $plant->watering = $row['watering'];
            $plant->repotting = $row['repotting'];
            $plant->url = $row['rep'];
                
        return $plant;
    }
    //Function for photos list
    public function photos(int $identifier) : array
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT name FROM photos WHERE id_plant = ?"
        );
        $statement->execute([$identifier]);
        
        $photos = [];
        while($row = $statement->fetch())
        {
            $photos[] = $row['name'];
        }
        return $photos;
    }
    //Function for complete menu
    public function menu() : array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT id, name_website FROM plants"
        );
        // $statement->execute([$identifier]);
        
        $menu = [];
        while($row = $statement->fetch())
        {
            $menu[] = $row['name_website'];
        }
        return $menu;
    }
}

//Function who choose randomly a plant whith high rank (7<rank<10) and complete homepage "Le Choix de la Redac' ?"
class RandomTop
{
    public DatabaseConnection $connection;
    public function getRandomTop() : TopPlant
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT id, name_website, desc1, desc2, rep FROM plants WHERE rank >= 7"
        );
        
        $plants = [];
        while($row = $statement->fetch())
        {
            $plant = new TopPlant;
            $plant->id = $row['id'];
            $plant->name = $row['name_website'];
            $plant->desc1 = $row['desc1'];
            $plant->desc2 = $row['desc2'];
            $plant->url = $row['rep'];

            $plants[] = $plant;
        }
        $rand = rand(0,count($plants)-1);
        $selected = $plants[$rand];
        return $selected;
        
    }
}