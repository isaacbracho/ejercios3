<?php


$tareas = [
    [
        "tarea" => "Comprar víveres",
        "completada" => false,
        "prioridad" => "Alta"
    ],
    [
        "tarea" => "Enviar correo a cliente",
        "completada" => false,
        "prioridad" => "Alta"
    ],
    [
        "tarea" => "Llamar al médico",
        "completada" => true,
        "prioridad" => "Media"
    ],
    [
        "tarea" => "Preparar informe mensual",
        "completada" => false,
        "prioridad" => "Alta"
    ],
    [
        "tarea" => "Sacar la basura",
        "completada" => false,
        "prioridad" => "Baja"
    ]
];

echo ">Todas las Tareas:";

foreach ($tareas as $tarea) {
   
    echo "Tarea:" . $tarea["tarea"] . " | ";
    echo "Completada" . ($tarea["completada"] ? "Sí" : "No") . " | ";
    echo "Prioridad " . $tarea["prioridad"];
   
}


echo "---";


foreach ($tareas as $key => $tarea) {
    if ($tarea["tarea"] === "Comprar víveres") {
        $tareas[$key]["completada"] = true;
        echo "'Comprar víveres' marcada como completada.";
        break; 
    }
}

echo "---";

echo "Tareas Pendientes:";

foreach ($tareas as $tarea) {
    if (!$tarea["completada"]) { 
       
        echo "Tarea:" . $tarea["tarea"] . " | ";
        echo "Prioridad: " . $tarea["prioridad"];
     
    }
}


?>