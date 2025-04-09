<?php
function kleineWoorden($minLengte, $input) {
 
    $woorden = str_word_count($input, 1);


    $aantalKleineWoorden = 0;


    foreach ($woorden as $woord) {
        if (mb_strlen($woord) < $minLengte) {
            $aantalKleineWoorden++;
        }
    }

    return $aantalKleineWoorden;
}


$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";

echo kleineWoorden(4, "dit is een voorbeeld") . "<br>";   
echo kleineWoorden(3, "dit is een voorbeeld") . "<br>";    
echo kleineWoorden(1, "dit is een voorbeeld") . "<br>";    
echo kleineWoorden(0, "dit is een voorbeeld") . "<br>";     
echo kleineWoorden(2, "a b c d") . "<br>";                 
echo kleineWoorden(6, "abcde") . "<br>";                   
echo kleineWoorden(4, $string) . "<br>";                    
echo kleineWoorden(3, $string) . "<br>";                 
echo kleineWoorden(10, $string) . "<br>";                  
?>