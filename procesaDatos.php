<?php 

/* @package 
 * @author Pablo Ortiz Taboada 12/02/2017 
 *
 * clase que crea una instancia a la clase específica de cada dispositivo
 */ 
abstract class ProcesaD
{

    static  function buscaDispositivo( $dispositivo )
    {            
        $dispositivo = trim(strtoupper($dispositivo));
        switch($dispositivo)
        {
            case "ESCANER":
                Escaner::procesaDatos();
            break;

            case "IMPRESORAA":
                ImpresoraA::procesaDatos();
            break;

            case "IMPRESORAB":
                ImpresoraB::procesaDatos();
            break;

            default:
                echo "Dispositivo no encontrado";
            break;

        }
    }

}

/* @package 
 * @author Pablo Ortiz Taboada 12/02/2017 
 *
 *  Clase del dispositivo escaner. 
 */ 
abstract class Escaner
{
    static  function procesaDatos(){        
        echo "Procesa la informacion y la convierte en una imagen.";

    }

}

/* @package 
 * @author Pablo Ortiz Taboada 12/02/2017 
 *
 *  Clase del dispositivo ImpresoraA
 */ 
abstract class ImpresoraA
{
    static  function procesaDatos(){        
        echo "Imprime";

    }

}

/* @package 
 * @author Pablo Ortiz Taboada 12/02/2017 
 *
 *  Clase del dispositivo ImpresoraB. 
 */ 
abstract class ImpresoraB
{
    static  function procesaDatos(){        
        echo "Imprime y anade una cabecera y pie predefinidos";

    }

}


