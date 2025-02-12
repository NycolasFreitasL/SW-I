<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = "fulano";
    ?>
    <p>oi meu nome é: <?php echo $nome; ?></p>
    <p>oi meu nome é: <?php echo "$nome"; ?></p>
    <?php "<p>oi meu nome é: $nome</p>";?>
</body>
</html>