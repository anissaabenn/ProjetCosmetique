<?php
require_once "Manager.php";
require_once "Products.php";

class ProductManager extends Manager{

    private $products;

    public function addProduct($product){
        $this->products[] = $product;
    }

    public function getProducts(){
        return $this->products;
    }

    public function loadProducts(){
        $req = $this->getBdd()->prepare("SELECT * FROM products WHERE category = 'eyes' ");
        $req->execute();
        $myProducts = $req->fetchAll();
        $req->closeCursor();
        
        foreach($myProducts as $product){
            $p = new Product($product['id'], $product['name'], $product['price'], $product['photo1'], $product['photo2']);
            $this->addProduct($p);
        }
    }

    public function loadLipsProducts(){
        $req = $this->getBdd()->prepare("SELECT * FROM products WHERE category = 'lips' ");
        $req->execute();
        $myLipsProducts = $req->fetchAll();
        $req->closeCursor();
        
        foreach($myLipsProducts as $lipsproduct){
            $lp = new Product($lipsproduct['id'], $lipsproduct['name'], $lipsproduct['price'], $lipsproduct['photo1'], $lipsproduct['photo2']);
            $this->addProduct($lp);
        }
    }
}