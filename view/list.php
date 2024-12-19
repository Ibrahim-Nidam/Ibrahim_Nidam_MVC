<!DOCTYPE html>
<html>
<head>
    <title>Liste des Produits</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        .actions { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Liste des Produits</h1>
    
    <div class="actions">
        <a href="index.php?action=add">Ajouter un produit</a>
    </div>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php foreach($products as $product): ?>
        <tr>
            <td><?= htmlspecialchars($product['name']) ?></td>
            <td><?= htmlspecialchars($product['price']) ?> €</td>
            <td><?= htmlspecialchars($product['description']) ?></td>
            <td>
                <a href="index.php?action=delete&id=<?= $product['id'] ?>" 
                   onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">
                    Supprimer
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>