<?php


$estudiantes = [
    [
        "nombre" => "isaac",
        "notas" => [
            "Matemáticas" => 95,
            "Historia" => 88,
            "Literatura" => 92
        ]
    ],
    [
        "nombre" => "santiago",
        "notas" => [
            "Matemáticas" => 78,
            "Historia" => 85,
            "Literatura" => 80
        ]
    ],
    [
        "nombre" => "isaias",
        "notas" => [
            "Matemáticas" => 90,
            "Historia" => 91,
            "Literatura" => 89
        ]
    ]
];

echo "<h1>Registro de Estudiantes y Calificaciones</h1>";


foreach ($estudiantes as $estudiante) {
    echo "---"; 
    echo "<h2>Estudiante: " . $estudiante["nombre"] . "</h2>";
    echo "<h3>Notas:</h3>";
    echo "<ul>";

  
    foreach ($estudiante["notas"] as $materia => $calificacion) {
        echo "<li><strong>" . $materia . ":</strong> " . $calificacion . "</li>";
    }
    echo "</ul>";
}

?>