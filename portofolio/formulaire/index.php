<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="action.php" method="post">
        <h1 class="re">renseigner</h1>
        <ul>
            <li>
                <h1>Nom</h1>
                <input type="text" id="name" name="user_name" placeholder="nom" autocomplete="off">
            </li>
        </ul>
        <ul>
            <li>
                <h1>Email</h1>
                <input type="email" id="mail" name="user_email" placeholder="email" autocomplete="off">
            </li>
        </ul>
        <ul>
            <li>
                <h1>Commentaire</h1>
                <textarea name="user_message" placeholder="commentair" id="msg"></textarea>
            </li>
        </ul>
        <ul>
            <li>
                <button type="submit" name="valider">Envoyer</button>
            </li>
        </ul>
    </form>
</body>
</html>