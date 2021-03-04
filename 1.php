<?php
    function getNumMatches($arrayWords)
    {
        $numberMatches = 0;

        for ($i = 0; $i < count($arrayWords); $i++) {
            for ($j = $i + 1; $j < count($arrayWords); $j++) {
                if($arrayWords[$i] == $arrayWords[$j]) {
                    $numberMatches++;
                }
            }
        }
        return $numberMatches;
    }

    $words = ["test1" , "test2" , "test3" , "test1" , "test2"];
    
    echo getNumMatches($words);
?>