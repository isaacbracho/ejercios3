<?php


function validar_contrasena($contrasena) {
  
    if (strlen($contrasena) < 8) {
        echo "La contraseña es demasiado corta (debe tener al menos 8 caracteres).\n";
        return false;
    }

    
    if (!preg_match('/[A-Z]/', $contrasena)) {
        echo "La contraseña debe contener al menos una letra mayúscula.\n";
        return false;
    }

  
    if (!preg_match('/[0-9]/', $contrasena)) {
        echo "La contraseña debe contener al menos un número.\n";
        return false;
    }

  
    echo "¡La contraseña es válida!\n";
    return true;
}



echo "--- Probando Contraseñas ---\n";

echo "Contraseña: 'password123'\n";
validar_contrasena("password123"); 
echo "--------------------------\n";

echo "Contraseña: 'Contrasena'\n";
validar_contrasena("Contrasena"); 
echo "--------------------------\n";

echo "Contraseña: 'contra1'\n";
validar_contrasena("contra1"); 
echo "--------------------------\n";

echo "Contraseña: 'MiContrasena123'\n";
validar_contrasena("MiContrasena123"); 
echo "--------------------------\n";

echo "Contraseña: 'PassWordSeguro8'\n";
validar_contrasena("PassWordSeguro8"); 
echo "--------------------------\n";


?>
