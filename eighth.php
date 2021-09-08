<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Eighth Point</title>
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
            <div class="row justify-content-center text-center">
                
                <h1 class="mb-5 text-success">Calculate age</h1>
                <hr class="text-success">

                 <form action="eighth.php" method="POST" class="mt-5">
                    <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                        <div class="col-auto">
                            <input type="text"class="form-control" name="actualYear" placeholder="Actual year">
                        </div>
                    </div>
                    <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                        <div class="col-auto">
                            <input type="text"class="form-control" name="bornYear" placeholder="Born year">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-success w-100 mt-5" name="operate">Calculate</button>
                </form>

            </div>

            <?php 
            
                if(isset($_POST["operate"])){

                    $actualYear = $_POST["actualYear"];
                    $bornYear = $_POST["bornYear"];
                    
                    function calculateAge($actualYear, $bornYear){
                        $age = $actualYear - $bornYear;
                        return($age);
                    }
                
                    $age = calculateAge($actualYear,$bornYear);
                
                }

            ?>

            <div class="row d-flex justify-content-center text-center mt-5">

                <div class="col-6">
                    <h3 class="text-success">Age</h3>
                    <p><?php if(isset($_POST["operate"])) echo($age) ?></p>
                    <hr class="text-success">
                </div>

            </div>
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>