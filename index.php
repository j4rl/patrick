<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="index.php" method="post">
    <label for="rub">Rubrik:</label>
    <input type="text" name="rub" id="rub" required placeholder="Rubrik">
    <label for="ing">Ingress:</label>
    <textarea name="ing" id="ing" cols="30" rows="5"></textarea>
    <label for="text">Text:</label>
    <textarea name="text" id="text" cols="30" rows="10">
    </textarea>
    <label for="by">Den som skrivit:</label>
    <input type="text" name="by" id="by">
    <input type="submit" value="Skicka" name="btn">
</form>
<?php
if(isset($_POST['btn'])){
    echo "<article><h1>".$_POST['rub']."</h1><b>".$_POST['ing']."</b><br>".$_POST['text']."<br><i>".$_POST['by']."</i>";
}
    
?>
</body>
</html>