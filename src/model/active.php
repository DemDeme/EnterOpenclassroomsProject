<?php

namespace Application\Model\Active;

class Nav
{
    public string $homepage;
    public string $encyclopedia;
    public string $contact;
}
class Active
{
    public function getActive(string $title) : Nav
    {
        $nav = new Nav();
        if($title == "Contact")
        {
            $nav->homepage = "";
            $nav->encyclopedia = "";
            $nav->contact = "active";
        }
    elseif($title == "Encyclopédie")
        {
            $nav->homepage = "";
            $nav->encyclopedia = "active";
            $nav->contact = "";
        }
    else
        {
            $nav->homepage = "active";
            $nav->encyclopedia = "";
            $nav->contact = "";
        }
        return $nav;
    }
}
