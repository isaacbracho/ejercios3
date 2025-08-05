<?php


$catalogo = [
    ["nombre" => "Laptop", "precio" => 1200, "stock" => 10],
    ["nombre" => "Mouse", "precio" => 25, "stock" => 50],
    ["nombre" => "Teclado", "precio" => 75, "stock" => 30]
];


function agregar_producto(&$catalogo, $nombre, $precio, $stock) {
    $catalogo[] = ["nombre" => $nombre, "precio" => $precio, "stock" => $stock];
    echo "Producto '$nombre' agregado exitosamente.\n";
}


function buscar_producto($catalogo, $nombre_buscado) {
    foreach ($catalogo as $producto) {
        if (strtolower($producto["nombre"]) === strtolower($nombre_buscado)) {
            return $producto;
        }
    }
    return null;
}


function calcular_total_valor_stock($catalogo) {
    $total_valor = 0;
    foreach ($catalogo as $producto) {
        $total_valor += $producto["precio"] * $producto["stock"];
    }
    return $total_valor;
}



echo "--- Catálogo Inicial ---\n";
print_r($catalogo);


echo "\n--- Agregando Producto ---\n";
agregar_producto($catalogo, "Monitor", 300, 15);
print_r($catalogo);


echo "\n--- Buscando Producto 'Teclado' ---\n";
$producto_encontrado = buscar_producto($catalogo, "Teclado");
if ($producto_encontrado) {
    echo "Producto encontrado: " . $producto_encontrado["nombre"] . " - Precio: $" . $producto_encontrado["precio"] . " - Stock: " . $producto_encontrado["stock"] . "\n";
} else {
    echo "Producto no encontrado.\n";
}

echo "\n--- Buscando Producto 'Webcam' ---\n";
$producto_no_encontrado = buscar_producto($catalogo, "Webcam");
if ($producto_no_encontrado) {
    echo "Producto encontrado: " . $producto_no_encontrado["nombre"] . " - Precio: $" . $producto_no_encontrado["precio"] . " - Stock: " . $producto_no_encontrado["stock"] . "\n";
} else {
    echo "Producto no encontrado.\n";
}


echo "\n--- Valor Total del Stock ---\n";
$valor_total = calcular_total_valor_stock($catalogo);
echo "El valor total de todo el inventario es: $" . $valor_total . "\n";


?>
