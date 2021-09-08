
<?php 

    function calculateAge($actualYear, $bornYear){
        $age = $actualYear - $bornYear;
        return($age);
    }

    $age = calculateAge($actualYear,$bornYear);

?>