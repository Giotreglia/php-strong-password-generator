<?php

$passwordLength = $_GET['password'];

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
    <title>Strong Password Generator</title>
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

                    <?php echo 'La tua password è : ' .  randomPassword($passwordLength, $passwordCarachters);?>

                </div>
            <?php } ?>
            

            <!-- Form -->            
            <div class="container bg-light rounded my-2 py-2">
                <form action="index.php" method="GET">
                    <!-- Password -->
                    <div class="row p-3">
                        <div class="col-6 flex-column">
                            <div>
                                <label for="password"><h5>Lunghezza Password:</h5></label>
                            </div>
                        </div>
                        <div class="col-6 flex-column">
                            <div>
                                <input type="number" id="password" name="password">
                            </div>
                            
                        </div>
                    </div>

                    <!-- Caratteri -->
                    <!-- <div class="row p-3">
                        <div class="col-6 flex-column">
                            <div>
                                <h5>Consenti ripetizioni di uno o più caratteri:</h5>
                            </div>
                        </div>
                        <div class="col-6 flex-column">
                            <div>
                                <div>
                                    <input type="radio" name="caratteriSi" id="caratteriSi">
                                    <label for="caratteriSi">Sì</label>
                                </div>
                                <div>
                                    <input type="radio" name="caratteriNo" id="caratteriNo">
                                    <label for="caratteriNo">No</label>
                                </div>
                            </div>      
                        </div>
                    </div> -->

                    <!-- Lettere - Numeri - Simboli -->
                    <!-- <div class="row p-3 justify-content-end">

                        <div class="col-6 flex-column ">
                            <div>
                                <div>
                                    <input type="checkbox" name="lettere" id="lettere">
                                    <label for="lettere">Lettere</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="numeri" id="numeri">
                                    <label for="numeri">Numeri</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="simboli" id="simboli">
                                    <label for="simboli">Simboli</label>
                                </div>
                            </div>      
                        </div>
                    </div> -->

                    <!-- Lettere - Numeri - Simboli -->
                    <div class="row p-3">

                        <div class="col-6 flex-column ">
                            <div>
                                <button type="submit" class="btn btn-primary">Invia</button>
                                <button type="reset" class="btn btn-secondary">Annulla</button>
                            </div>      
                        </div>
                    </div>
                </form>

            </div>


    </div>
    
</body>
</html>