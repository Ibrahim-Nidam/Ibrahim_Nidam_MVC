<?php
require_once 'model/product_model.php';

function listProducts() {
    $products = getAllProducts();
    require 'view/list.php';
}

function addProduct() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'] ?? '';
        $price = $_POST['price'] ?? 0;
        $description = $_POST['description'] ?? '';
        
        if ($name && $price) {
            addProductToDb($name, $price, $description);
            header('Location: index.php');
            return;
        }
    }
    require 'view/add.php';
}

function deleteProduct($id) {
    if ($id !== null) {
        deleteProductFromDb($id);
    }
    header('Location: index.php');
}