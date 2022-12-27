<?php
require_once "modele/ProductManager.php";

class ProductController{
    private $productManager;

    public function __construct(){
        $this->productManager = new ProductManager;
        $this->productManager->loadProducts();
    }

    public function displayProducts(){
        $products = $this->productManager->getProducts();
        require_once "view/header.view.php";
    }
}