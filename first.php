<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>First Point</title>
</head>
<body class="bg-dark text-white">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-6 text-center">

                    <h1 class="mb-5 text-primary">First Point</h1>
                    <hr>

                    <form action="first.php" method="POST" class="mt-5">

                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <label class="col-form-label">Number one</label>
                            </div>
                            <div class="col-auto">
                                <input type="text"class="form-control" name="numberOne">
                            </div>
                        </div>
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <label class="col-form-label">Number two</label>
                            </div>
                            <div class="col-auto">
                                <input type="text"class="form-control" name="numberTwo">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-primary w-100 mt-5" name="operate">Calculate</button>
                    </form>


                    <?php 
                    
                    if(isset($_POST["operate"])){
                        $numberOne = $_POST["numberOne"];
                        $numberTwo = $_POST["numberTwo"];
                        
                        if($numberOne && $numberTwo != ""){
                            $add = $numberOne + $numberTwo;
                            $subtraction = $numberOne - $numberTwo;
                            $multiplication = $numberOne * $numberTwo;
                            $division = $numberOne / $numberTwo;
                        }else{
                            echo("Please enter any numbers");
                        }
                    }

                    ?>

                </div>
                
            </div>
            
            <div class="row d-flex justify-content-center text-center mt-5">

                <div class="col-lg-3 col-md-5 col-sm-7">
                    <h3 class="text-primary">Add</h3>
                    <p><?php if(isset($_POST["operate"]) && $numberOne && $numberTwo != "" ) echo($add) ?></p>
                    <hr class="text-primary">
                </div>
                
                <div class="col-lg-3 col-md-5 col-sm-7">
                    <h3 class="text-primary">Subtraction</h3>
                    <p><?php if(isset($_POST["operate"])&& $numberOne && $numberTwo != "" ) echo($subtraction) ?></p>
                    <hr class="text-primary">
                </div>
                
                <div class="col-lg-3 col-md-5 col-sm-7">
                    <h3 class="text-primary">Multiplication</h3>
                    <p><?php if(isset($_POST["operate"])&& $numberOne && $numberTwo != "" ) echo($multiplication) ?></p>
                    <hr class="text-primary">
                </div>
                
                <div class="col-lg-3 col-md-5 col-sm-7">
                    <h3 class="text-primary">Division</h3>
                    <p><?php if(isset($_POST["operate"])&& $numberOne && $numberTwo != "" ) echo(number_format($division,2)) ?></p>
                    <hr class="text-primary">
                </div>

            </div>
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>