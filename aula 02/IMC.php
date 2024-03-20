<?php
$peso = 55;
$altura = 1.75; 
$imc = $peso/($altura*$altura);

echo "Seu peso: ", $peso, "<br>";
echo "Sua altura: ", $altura, "<br>";
echo "IMC: ", $imc, "<br>";
echo "<br>";

if ($imc<18.5) {
    echo "Magreza";
} else if (18.5<$imc==24.9) {
    echo "Normal";
}  


?>