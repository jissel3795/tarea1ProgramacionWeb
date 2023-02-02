<?php
$totalmujeres = 0;
$totalhombrescasados2500 = 0;
$totalmujeresviudasmenos1000 = 0;
$suma = 0;
$cantidad = 0;

for ($i = 0; $i < 5; $i++) {
    $nombreempleado = readline("Ingrese nombre: ");
    readline_add_history($nombreempleado);
    $apellidoempleado = readline("Ingrese apellido: ");
    readline_add_history($apellidoempleado);
    $edadempleado = readline("Ingrese edad: ");
    readline_add_history($edadempleado);
    $estadocivilempleado = readline("Ingrese estado civil (soltero, casado, viudo): ");
    readline_add_history($estadocivilempleado);
    $sexoempleado = readline("Ingrese sexo (masculino o femenino): ");
    readline_add_history($sexoempleado);
    $sueldoempleado = readline("Ingrese sueldo (en Bs): ");
    readline_add_history($sueldoempleado);

    if ($sexoempleado == "femenino") {
        $totalfemenino++;
    }

    if ($sexoempleado == "masculino" && $estadocivilempleado == "casado" && $sueldoempleado > 2500) {
        $totalhombrescasados2500++;
    }

    if ($sexo == "femenino" && $estado_civil == "viudo" && $sueldo > 1000) {
        $totalmujeresviudasmenos1000++;
    }

    if ($sexo == "masculino") {
        $suma += $edad;
        $cantidad++;
    }
}

if ($cantidad_hombres > 0) {
    $promedio = $suma / $total;
} else {
    $edad = 0;
}

echo "Total de empleados mujeres: $totalmujeres\n";
echo "Hombres casados con sueldo mayor a 2500 bs: $totalhombrescasados2500\n";
echo "Mujeres viudas que ganan mas de 1000 bs: $totalmujeresviudasmenos1000\n";
echo "Edad promedio de los empleados masculinos: $promedio";
?>