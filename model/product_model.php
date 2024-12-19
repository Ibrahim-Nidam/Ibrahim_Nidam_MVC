<?php
$STORAGE_FILE = 'data/products.json';

function initStorage() {
    global $STORAGE_FILE;
    if (!file_exists('data')) {
        mkdir('data');
    }
    if (!file_exists($STORAGE_FILE)) {
        file_put_contents($STORAGE_FILE, json_encode(['products' => [], 'nextId' => 1]));
    }
}

function loadData() {
    global $STORAGE_FILE;
    initStorage();
    $jsonData = file_get_contents($STORAGE_FILE);
    return json_decode($jsonData, true);
}

function saveData($data) {
    global $STORAGE_FILE;
    file_put_contents($STORAGE_FILE, json_encode($data));
}

function getAllProducts() {
    $data = loadData();
    return $data['products'];
}

function addProductToDb($name, $price, $description) {
    $data = loadData();
    $nextId = $data['nextId'];
    
    $product = [
        'id' => $nextId,
        'name' => $name,
        'price' => $price,
        'description' => $description
    ];
    
    $data['products'][$nextId] = $product;
    $data['nextId'] = $nextId + 1;
    
    saveData($data);
    return $product;
}

function deleteProductFromDb($id) {
    $data = loadData();
    
    if (isset($data['products'][$id])) {
        unset($data['products'][$id]);
        saveData($data);
        return true;
    }
    return false;
}
