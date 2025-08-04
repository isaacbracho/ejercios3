<?php


$frutas = ["Manzana", "Banana", "Cereza", "Dátil", "Fresa"];

echo "<h2>Frutas disponibles:</h2>";
echo "<ul>";
foreach ($frutas as $fruta) {
    echo "<li>" . $fruta . "</li>";
}
echo "</ul>";


$producto = [
    "nombre" => "Manzana",
    "precio" => 1.50,
    "stock" => 100
];

echo "<h2>Detalles de mi fruta favorita:</h2>";
echo "<p><strong>Nombre:</strong> " . $producto["nombre"] . "</p>";
echo "<p><strong>Precio:</strong> $" . number_format($producto["precio"], 2) . "</p>";
echo "<p><strong>Stock:</strong> " . $producto["stock"] . " unidades</p>";

?>
