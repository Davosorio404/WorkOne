<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Tenth Point</title>
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

    <?php 

    $players =array(
        array("name" => "Radamel Falcao" , "bornYear" => 1986  , "position" => "Forward" , "height" => 1.77),
        array("name" => "James Rodriguez" , "bornYear" => 1991 , "position" => "Midfielder" , "height" => 1.81),
        array("name" => "Juan Cuadrado" , "bornYear" => 1988 , "position" => "Forward" , "height" => 1.78),
        array("name" => "Yerry Mina" , "bornYear" => 1994 , "position" => "Defender" , "height" => 1.95),
        array("name" => "David Ospina" , "bornYear" => 1988 , "position" => "Goalkeeper" , "height" => 1.83),
        array("name" => "Davinson Sanchez" , "bornYear" => 1996 , "position" => "Defender" , "height" => 1.87),
        array("name" => "Duvan Zapata" , "bornYear" => 1991 , "position" => "Forward" , "height" => 1.86),
        array("name" => "Wilmar Barrios" , "bornYear" => 1993 , "position" => "Midfielder" , "height" => 1.78),
        array("name" => "Mateus Uribe" , "bornYear" => 1991 , "position" => "Midfielder" , "height" => 1.80),
    );

    function calculateAge($actualYear, $bornYear){
        $age = $actualYear - $bornYear;
        return($age);
    }

    function calculateBiotype($height){
        $biotype ="";

        if($height<1.70){
            $biotype = "Low biotype";
        }
        elseif($height>=1.70 && $height<1.80){
            $biotype = "Average biotype";
        }
        else{
            $biotype = "Superior biotype";
        }
        return($biotype);
    }

    ?>

    <main>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <h2 class="my-5 text-danger">Best Colombian football players around the world</h2>
                    <table class="table mb-5 text-center">
                        <thead class="text-danger">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Born Year</th>
                                <th scope="col">Age</th>
                                <th scope="col">Position</th>
                                <th scope="col">Height</th>
                                <th scope="col">Biotype</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            <?php foreach($players as $player):?>
                                <?php 

                                    $bornYear = $player["bornYear"];
                                    $height = $player["height"];
                            
                                    $age = calculateAge(2021,$bornYear);
                                    $biotype = calculateBiotype($player["height"]);
                                    
                                    $player["age"] = $age;
                                    $player["biotype"] = $biotype;
                                ?>
                                <tr>
                                    <td><?php echo($player["name"]) ?></td>
                                    <td><?php echo($player["bornYear"]) ?></td>
                                    <td><?php echo($player["age"])?></td>
                                    <td><?php echo($player["position"]) ?></td>
                                    <td><?php echo($player["height"]) ?></td>
                                    <td><?php echo($player["biotype"]) ?></td>
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