<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Contacts</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <h1>Liste des Contacts</h1>
    <ul>
        <?php foreach ($contacts as $contact): ?>
            <li><?php echo htmlspecialchars($contact['name']); ?> - <?php echo htmlspecialchars($contact['email']); ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="/contacts/add">Ajouter un Contact</a>
</body>
</html>
