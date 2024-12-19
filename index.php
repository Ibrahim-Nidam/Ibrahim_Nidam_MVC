<?php
require_once 'controller/product_controller.php';

$action = $_GET['action'] ?? 'list';

switch($action) {
    case 'list':
        listProducts();
        break;
    case 'add':
        addProduct();
        break;
    case 'delete':
        deleteProduct($_GET['id'] ?? null);
        break;
    default:
        listProducts();
}
