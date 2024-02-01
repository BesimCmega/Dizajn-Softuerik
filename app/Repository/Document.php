<?php

namespace App\Repository;

use App\Models\User;
use App\Models\Documents;
use App\Repository\UserInterface;
use App\Repository\IDocumentsManager;

class Document implements IDocumentsManager
{
    private String $description;
    
    public function __construct($description)
    {
        $this->setDescription($description);
    }


    public function getDescription()
    {
       return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

}