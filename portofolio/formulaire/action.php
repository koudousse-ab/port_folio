
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>le php en question</title>
    <link rel="icon" href="./kimg-removebg-preview(1).png">
</head>
<body>
    <?php
        if(isset($_POST["valider"]))
        {
            if(isset($_POST["user_name"]) AND isset($_POST["user_email"]) AND isset($_POST["user_message"])) 
            {
            if(!empty($_POST["user_name"]) AND !empty($_POST["user_email"]) AND !empty($_POST["user_message"])) 
            {
                    $name=htmlspecialchars($_POST["user_name"]);
                    $email=htmlspecialchars($_POST["user_email"]);
                    $message=htmlspecialchars($_POST["user_message"]);

            } 
            }
        }
    ?>
    <fieldset>
        <legend><h2>nom: <?php echo $name ;?></h2></legend>
        <h1 style="color: blue;">emai: <?php echo $email ;?></h1>
    </fieldset>
    <textarea name="text" id="bien" style="font-size: 35px;"><?php echo $message ;?></textarea><br><br>
    <button type="submit" name="retour"><a href="index.php">retour</a></button>
</body>
</html>