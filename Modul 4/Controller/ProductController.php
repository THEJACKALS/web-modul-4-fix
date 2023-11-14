<?php

namespace Controller;

include "Traits/ResponseFormatter.php"; 
include "Controller/Controller.php";

use Traits\ResponseFormatter;

// DISIMULASIKAN INI ADALAH CLASS CONTROLLER PRODUCT
class ProductController extends Controller
{
    use ResponseFormatter;
    
    public function _construct()
    {
        $this→controllerName = "Get All Product";
        $this→controllerMethod = "GET";
    }

    public function getAllProduct()
    {
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu"
        ];

        $response = [
            "controller_attribute" ⇒ $this → getControllerAttribute(),
            "product" ⇒ $dummyData
        ]
        return $this→responseFormatter(200, "success", $response);
    }
    
}