<?php
/**
 * 3. Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas.
 */

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
    <style>
        /* Estilo para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50; /* Color de fondo para encabezados */
            color: white; /* Color del texto */
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Color de fondo para filas pares */
        }
        tr:hover {
            background-color: #ddd; /* Color de fondo al pasar el ratón */
        }
    </style>
</head>
<body>

<h1>Tablas de Multiplicar del 1 al 10</h1>

<?php
// Generar tablas de multiplicar
for ($i = 1; $i <= 10; $i++) {
    echo "<h2>Tabla del $i</h2>";
    echo "<table>";
    echo "<tr><th>Multiplicador</th><th>Resultado</th></tr>"; // Encabezados de la tabla

    // Calcular y mostrar la tabla
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "<tr><td>$i x $j</td><td>$resultado</td></tr>"; // Filas de la tabla
    }

    echo "</table>";
}
?>

</body>
</html>
