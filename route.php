<?php

require_once "Major.php";
require_once "TablaDeVuelos.php";
require_once "ModificarLaTabla.php";

// definimos la base url de forma dinamica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    
    if (empty($_GET['action'])) {       
        $_GET['action'] = 'Major';
    }

    $action = $_GET['action'];
    $parametro = explode('/', $action);
   
    //  print_r($parametro);
    switch ($parametro[0]) {
        case 'Major':
          echo Major();
            break;

        case 'TablaDeVuelos':
            echo TablaDeVuelos();
            break;

        case 'ModificarLaTabla':
            echo ModificarLaTabla();
            break;

        case 'addTask':
            newTask();
            break;

        case 'delete':
            deleteTask($parametro[1]);
            break;

    
        case 'finalize':
            finalizeTask($parametro[1]);
            break;

        case 'show':
            showTask($parametro[1]);
            break;

        default:
        //    TODO:: hacer algo
    }