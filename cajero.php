<?php

echo "BIENVENIDO AL CAJERO AUTOMATICO EL DESCONTROL"."\n",
"{1} Ingresar dinero."."\n",
"{2} Consultar saldo."."\n",
"{3} Consultar dinero."."\n",
"{4} Retirar dinero."."\n";


$opcion = readline("Ingrese el numero de la opcion que desea realizar:");

if ($opcion == "1"){
    readline ("¿Cuanto dinero desea ingresar?");
    }
if ($opcion == "2"){
echo "Tu saldo hasta el momento es:";
}
if ($opcion == "3"){
echo "Tu dinero hasta el momento es:";
}
if ($opcion == "4"){
echo "¿Cuanto dinero deseas retirar?:";
}

