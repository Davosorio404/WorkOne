<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Second Point</title>
</head>
<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">WORK ONE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link"href="index.php">Landing page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container text-center">

            <div class="row justify-content-center">

                <div class="col-4"><img class="img-fluid my-3" src="img/Bodytech.svg.png" alt="smart fit logo"></div>

            </div>

            <div class="row justify-content-center">
                <div class="col-8">

                    <hr class="text-warning">
                    
                    <form action="second.php" method="POST" class="mt-5">
                        
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="height" placeholder="Height">
                            </div>
                        </div>
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="weight" placeholder="Weight">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-outline-warning w-100 mt-5" name="operate">Calculate</button>
                        
                    </form>
                    
                </div>
            </div>

            <?php 
            
            if(isset($_POST["operate"])){

                $height = $_POST["height"];
                $weight = $_POST["weight"];
                  
                if($height && $weight != ""){
                    $classification = "";
                    $imc = $weight / ($height**2);

                    if($imc<18.5){
                        $classification = "Insufficient weight";
                    }
                    elseif($imc>=18.5 && $imc<25){
                        $classification = "Normal weight";
                    }
                    elseif($imc>=25 && $imc<27){
                        $classification = "Overweight grade I";
                    }
                    elseif($imc>=27 && $imc<30){
                        $classification = "Overweight grade II (pre-obesity)";
                    }
                    elseif($imc>=30 && $imc<35){
                        $classification = "Type obesity I";
                    }
                    elseif($imc>=35 && $imc<40){
                        $classification = "Type obesity II";
                    }
                    elseif($imc>=40 && $imc<50){
                        $classification = "Type obesity III (morbid)";
                    }
                    else{
                        $classification = "Type obesity IV (extreme)";
                    }
                }
            }

            ?>
            
            <div class="row justify-content-center text-center mt-5">
                <div class="col-5">
                    
                    <h4 class="text-warning mb-3">Your body mass index is</h4>

                    <h5><?php  if(isset($_POST["operate"])) {

                        if($height && $weight != ""){
                            echo(number_format($imc,2));
                        }
                        else{
                            echo("Please enter a valid value");
                        } 
                        
                    }?></h5>

                    <h5><?php  if(isset($_POST["operate"])) {

                        if($height && $weight != ""){
                            echo($classification);
                        }
                        else{
                            echo("Please enter a valid value");
                        } 
                        
                    }?></h5>
                    
                    <hr class="text-warning mt-4">

                </div>
            </div>

        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>