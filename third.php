<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Third Point</title>
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

                <div class="col-4"><img class="img-fluid my-3" src="img/spring-step.png" alt="spring step logo"></div>

            </div>

            <div class="row justify-content-center">

                <div class="col-8">

                    <hr class="text-primary">
                    
                    <form action="third.php" method="POST" class="mt-5">
                        
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="pairs" placeholder="Number of pairs">
                            </div>
                        </div>
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="pricePair" placeholder="Price per pair">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-outline-primary w-100 mt-4" name="operate">Calculate</button>
                        
                    </form>
                    
                </div>
            </div>

            <?php 

            if(isset($_POST["operate"])){

                $pairs = $_POST["pairs"];
                $pricePerPair = $_POST["pricePair"];
                $subTotal = $pairs * $pricePerPair;
                $discount = 0;

                if ($pairs==1) {
                    $discount = 0;
                }
                elseif($pairs==2){
                    $discount = $subTotal * 0.1;
                }
                elseif($pairs>=3 && $pairs<=4){
                    $discount = $subTotal * 0.2;
                }
                elseif($pairs>=5){
                    $discount = $subTotal * 0.5;
                }
                else{
                    $discount = 0;
                    $total = "Enter a valid value";
                }

                $total = $subTotal - $discount ;
            }

            ?>

            <div class="row justify-content-center text-center mt-5">
                <div class="col-4">
                    
                    <h4 class="text-primary mb-3">Discount made</h4>

                    <h5><?php  if(isset($_POST["operate"])) echo($discount)?></h5>
                    
                    <hr class="text-primary mt-4">

                </div>
                <div class="col-4">
                    
                    <h4 class="text-primary mb-3">Total to paid</h4>

                    <h5><?php  if(isset($_POST["operate"])) echo($total)?></h5>
                    
                    <hr class="text-primary mt-4">

                </div>
            </div>
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>