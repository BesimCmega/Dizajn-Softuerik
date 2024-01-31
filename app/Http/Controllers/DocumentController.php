<?php

namespace App\Http\Controllers;

use App\Repository\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
   
    public function addingDescription(){
        $description = "";

        // Instantiate the Document class with the description
        $document = new Document($description);

        // Call the getDescription method and echo the result
        echo $document->getDescription();
    }

}
