<?php

session_start();

$letters = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","u","v","w","x","y","z"];
$CapLetters = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z"];
$numbers = ["0","1","2","3","4","5","6","7","8","9"];
$symbols = [".","!","?","$","%"];

$passwordCarachters = array_merge($letters, $CapLetters, $numbers, $symbols);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Result</title>
</head>
<body class="bg-dark py-5">

<?php require __DIR__ . '/functions.php'; ?>

<div class="container d-flex flex-column align-items-center my-5">

    <!-- Titolo -->
    <h1 class="text-light">Strong Password Generator</h1>
    <h3 class="text-warning">Genera una password sicura</h3>

    <!-- Risultato -->

    <?php if (isset($_GET['password'])) { ?>
        <div class="alert alert-info w-100 my-2 text-center" role="alert">

            <h3>
                <?php echo 'La tua password è : ' .  randomPassword($passwordLength, $passwordCarachters);?>
            </h3>

        </div>
    <?php } ?>

</div>
    
</body>
</html>