<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Sixth Point</title>
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
        <div class="container text-center">
            <div class="row d-flex justify-content-center">
                <div class="col-8">

                    <h1 class="mb-5 text-danger">Sixth Point</h1>
                    <hr>

                    <form action="sixth.php" method="POST" class="mt-5">
                        <div class="row g-3 d-flex justify-content-center align-items-center mb-3">
                            <div class="col-auto">
                                <label class="col-form-label">Quantity</label>
                            </div>
                            <div class="col-auto">
                                <input type="text"class="form-control" name="quantity">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-danger w-100 mt-5" name="operate">Calculate</button>
                    </form>

                </div>
            </div>

            <?php 
            
                if(isset($_POST["operate"])){

                    $quantity = $_POST["quantity"];

                    $pairs = [];
                    
                    for($i = 2; $i<=($quantity*2); $i+=2){

                        $pairs[] = $i;

                    }
                    
                }
            
            ?>

            <div class="row justify-content-center text-center mt-5">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <table class="table mb-5">
                        <thead class="text-danger">
                            <tr>
                                <th scope="col">Numbers</th>
                            </tr>
                        </thead>
                        <tbody class="text-white border-danger">
                            <?php if(isset($_POST["operate"]))foreach($pairs as $pair):?>
                                <tr>
                                    <td><?php echo($pair) ?></td>
                                </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>