<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Contact</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <h1>Ajouter un Contact</h1>
    <form method="POST" action="/contacts/add">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        
        <button type="submit">Ajouter</button>
    </form>
    <a href="/contacts">Retour à la liste des contacts</a>
</body>
</html>
