<?php
$ints = [
    - 2,
    - 9,
    3,
    4,
    19
];
echo find_near_zero($ints);

function find_near_zero(Array $ints)
{
    foreach ($ints as $int) {
        if ($int > 0) {
            if (! isset($min_positif)) {
                $min_positif = $int;
            } else {
                if ($min_positif > $int) {
                    $min_positif = $int;
                }
            }
        } else {
            if (! isset($min_negatif)) {
                $min_negatif = $int;
            } else {
                if ($min_negatif < $int) {
                    $min_negatif = $int;
                }
            }
        }
    }
    
    $abs_min_negatif = abs($min_negatif);
    if($abs_min_negatif == $min_positif ){
        return $min_positif;
    }else if($abs_min_negatif < $min_positif){
        return $min_negatif;
    }else{
        return $min_positif;
    }
}
