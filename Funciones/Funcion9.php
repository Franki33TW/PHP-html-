<h1>Ejercicios de Funciones 2</h1>
<?php 
    function sumaResta($num1, $num2, $num3, $suma, $resta) {

        if (($num1 + $num2 + $num3) == $suma) {
            $resultado = "$suma es la suma";
        } else {
            $resultado = "$suma no es la suma";
        }
        $resultado .= " y ";

        if (($num1 - $num2 - $num3) == $resta) {
            $resultado .= "$resta es la resta.";
        } else {
            $resultado .= "$resta no es la resta.";
        }
        echo "<p>$resultado</p>";
    }
    $num1 = (float) $_POST['num1'];
    $num2 = (float) $_POST['num2'];
    $num3 = (float) $_POST['num3'];
    $suma = (float) $_POST['suma'];    
    $resta = (float) $_POST['resta'];
    echo "<h2>2.3.- Crea una función que muestre, a partir de 5 valores pedidos al usuario, si el cuarto es la suma de los tres primeros y el quinto la resta.</h2>";
    echo "<p>Operaciones para los enteros : [$num1, $num2, $num3], ¿Suma = $suma? y ¿Resta = $resta?</p>";
    sumaResta($num1, $num2, $num3, $suma, $resta);
?>