<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Produit</title>
</head>
<body>
    <h1>Ajouter un Produit</h1>
    
    <form method="post" action="index.php?action=add">
        <div>
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div>
            <label for="price">Prix:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        
        <button type="submit">Ajouter</button>
        <a href="index.php">Retour à la liste</a>
    </div>
</body>
</html>