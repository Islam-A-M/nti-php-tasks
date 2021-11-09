<?php

// event if the form has been submitted
if ($_POST) {
   //var_dump($_POST);
    $firstNumber = $_POST['firstNumber'];
    $secondNumber = $_POST['secondNumber'];
    $thirdNumber = $_POST['thirdNumber'];

    $maxNumber = $firstNumber;
    $minnumber=$firstNumber;
    $maxNumber= $secondNumber > $maxNumber ? $secondNumber :$maxNumber;
    $maxNumber= $thirdNumber > $maxNumber ? $thirdNumber :$maxNumber;

    $minnumber= $secondNumber < $minnumber ? $secondNumber :$minnumber;
    $minnumber= $thirdNumber < $minnumber ? $thirdNumber :$minnumber;


}


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 offset-4">
                <div class="card ">
                    <div class="card-header text-center">
                        <h4> Enter Your Numbers</h1>
                    </div>
                    <div class="card-body">
                        <form method="post">
                      
                            <br>
                            <label for="firstNumber">First number:</label>

                            <input name="firstNumber" id="firstNumber" type="number">
                            <br>
                            <label for="secondNumber">Second number:</label>

                            <input name="secondNumber" id="secondNumber" type="number">
                            <br>
                            <label for="thirdNumber">Third number:</label>

                            <input name="thirdNumber" id="thirdNumber" type="number">
                            <br>

                            <button class="btn btn-success" name="submit">Get the result</button>
                        </form>
                        
                   
                        <div class="alert alert-success">
                            <h1 class="alert-heading text-center"> Result </h1>
                             <ul>
                                <li>
                                    Min Number : <?= isset($minnumber) ? $minnumber : '' ?>
                                </li>
                                <li>
                                    Max Number : <?php if (isset($maxNumber)) {
                                                echo $maxNumber ;
                                            } ?>
                                </li>
                            
                            </ul> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>