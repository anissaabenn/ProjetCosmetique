<?php

require_once "controller/ProductController.php";
$productController = new ProductManager;

if (empty($_GET['page'])){
    require_once "view/home.view.php";
}else{
    switch($_GET['page']){
        case "accueil" : require_once "view/home.view.php";
        break;
        case "lips" : require_once "view/lips.view.php";
        break;
        case "eyes" : require_once "view/eyes.view.php";
        break;
        case "face" : require_once "view/face.view.php";
        break;
        case "cleaners" : require_once "view/cleaners.view.php";
        break;
        case "moisturizers" : require_once "view/moisturizers.view.php";
        break;
        case "serums" : require_once "view/serums.view.php";
        break;
    }
}