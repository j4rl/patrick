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
    <label for="name">Namn:</label>
    <input type="text" name="name" id="name" required placeholder="Skriv ditt namn">
    <label for="num">Nummer:</label>
    <input type="number" name="num" id="num">
    <div class="checkboxes">
    <label for="check">Kryssa i här om du vill snubbla</label>
    <input type="checkbox" name="check" id="check"></div>
    <label for="text">Skriv din livshistoria:</label>
    <textarea name="text" id="text" cols="30" rows="10">
    </textarea>
    <input type="submit" value="Skicka" name="btn">
</form>
</body>
</html>