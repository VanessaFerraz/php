<?php
    $placa = $_POST['placa'];
    $ultimoDigito = $placa % 10;
    
    switch ($ultimoDigito){
        case 1: case 2:
            echo("Rodízio na Segunda");
            break;
        case 3: case 4:
            echo("Rodízio na Terça");
            break;
        case 5: case 6:
            echo("Rodízio na Quarta");
            break;
        case 7: case 8:
            echo("Rodízio na Quinta");
            break;
        case 9: case 0:
            echo("Rodízio na Sexta");
            break;
        default:
            echo("Informe um valor inválido!!!!");
            break;
    }
?>
    