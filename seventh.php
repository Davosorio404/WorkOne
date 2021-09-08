<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Seventh Point</title>
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
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-3"><img class="img-fluid my-3" src="img/salpicon.jpg" alt="Salpicon image"></div>

            </div>

                
            <div class="row d-flex justify-content-center">

                <div class="col-8">

                    <hr class="text-danger">

                    <form action="seventh.php" method="POST" class="mt-5 text-center">

                        <h3 class="mb-5 text-danger">First Fruit</h3>
                        
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="nameOne" placeholder="Fruit name">
                            </div>
                        </div>
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="urlOne" placeholder="Fruit url">
                            </div>
                        </div>
                        

                        <h3 class="mb-5 mt-5 text-danger">Second Fruit</h3>
                        
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="nameTwo" placeholder="Fruit name">
                            </div>
                        </div>
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="urlTwo" placeholder="Fruit url">
                            </div>
                        </div>
                        
                        
                        <h3 class="mb-5 mt-5 text-danger">Third Fruit</h3>
                        
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="nameThree" placeholder="Fruit name">
                            </div>
                        </div>
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="urlThree" placeholder="Fruit url">
                            </div>
                        </div>
                        

                        <h3 class="mb-5 mt-5 text-danger">Fourth Fruit</h3>
                        
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="nameFour" placeholder="Fruit name">
                            </div>
                        </div>
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="urlFour" placeholder="Fruit url">
                            </div>
                        </div>
                        

                        <h3 class="mb-5 mt-5 text-danger">Fifth Fruit</h3>
                        
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="nameFive" placeholder="Fruit name">
                            </div>
                        </div>
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <input type="text"class="form-control" name="urlFive" placeholder="Fruit url">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-outline-danger w-100 my-5" name="operate">Mix it</button>
                    </form>

                </div>

                <?php 
                
                    if(isset($_POST["operate"])){

                        $fruits=array(
                            array("fruitName"=>$_POST["nameOne"], "fruitUrl"=>$_POST["urlOne"]),
                            array("fruitName"=>$_POST["nameTwo"], "fruitUrl"=>$_POST["urlTwo"]),
                            array("fruitName"=>$_POST["nameThree"], "fruitUrl"=>$_POST["urlThree"]),
                            array("fruitName"=>$_POST["nameFour"], "fruitUrl"=>$_POST["urlFour"]),
                            array("fruitName"=>$_POST["nameFive"], "fruitUrl"=>$_POST["urlFive"])
                        );

                    }
                
                ?>

            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-12">

                    <?php if(isset($_POST["operate"])) : ?>    
                        
                        <div class="row row-cols-1 row-cols-md-5 g-4">
                            <?php foreach($fruits as $fruit): ?>
                                <div class="col">
                                    <div class="card">
                                        <img src="<?php echo($fruit["fruitUrl"]) ?>" class="card-img-top w-100 img-fluid" alt="foto">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo($fruit["fruitName"])?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                            
                        <hr class="text-danger">

                    <?php endif?>    

                </div>
            </div>

        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>