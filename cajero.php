<?php


// Inicialización del saldo
$saldo = 0;

echo "BIENVENIDO AL CAJERO AUTOMATICO EL DESCONTROL" . "\n",
"{1} Ingresar dinero." . "\n",
"{2} Consultar saldo." . "\n",
"{3} Consultar dinero." . "\n",
"{4} Retirar dinero." . "\n",
"{0} Salir." . "\n";

while (true) {
    $opcion = readline("Ingrese el número de la opción que desea realizar:");

    switch ($opcion) {
        case 1:
            $dinero = (float)readline("¿Cuánto dinero desea ingresar? ");
            if ($dinero > 0) {
                $saldo += $dinero;
                echo "Dinero agregado exitosamente: $dinero\n";
            } else {
                echo "Cantidad no válida. Ingrese un monto positivo.\n";
            }
            break;
        
        case 2:
            echo "Tu saldo hasta el momento es: $saldo\n";
            break;
        
        case 3:
            echo "Tu dinero hasta el momento es: $saldo\n";
            break;
        
        case 4:
            $dinero_retirar = (float)readline("¿Cuánto dinero deseas retirar? ");
            if ($dinero_retirar > 0 && $dinero_retirar <= $saldo) {
                $saldo -= $dinero_retirar;
                echo "Retiro de $dinero_retirar exitoso\n";
            } elseif ($dinero_retirar > $saldo) {
                echo "No tienes suficiente saldo para realizar el retiro.\n";
            } else {
                echo "Cantidad no válida. Ingrese un monto positivo.\n";
            }
            break;
        
        case 0:
            echo "Gracias por utilizar nuestro cajero automático. ¡Hasta luego!\n";
            exit;
        
        default:
            echo "Opción no válida. Por favor, seleccione una opción del 0 al 4.\n";
            break;
    }
}
?>

