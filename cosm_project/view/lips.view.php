<?php 
require_once "header.view.php";
$productManager = new ProductManager;
$productManager->loadLipsProducts();
$lipsproducts = $productManager->getProducts();
?>

<div class="favproducts">
            <?php foreach($lipsproducts as $product) : ?>
            <div class="article">
                <img src="<?= $product->getPhoto1() ?>" width="380px" height="380px" onmouseover="this.src='<?= $product->getPhoto2() ?>';" onmouseout="this.src='<?= $product->getPhoto1() ?>';">
                <h3><?= $product->getName() ?></h3>
                <h4><?= $product->getPrice() ?> €</h4>
            </div>
            <?php endforeach; ?>
        </div>

<?php 
require_once "footer.view.php";
?>