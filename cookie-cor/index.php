<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
</head>


<?php
    if (isset($_COOKIE['corCookie'])){
    //isset verifica se existe
        $cor = $_COOKIE['corCookie'];
        echo("<body bgcolor=".$cor.">");
    }
    else {
        echo("<body bgcolor='pink'>");
    }
    //empty (ver se está nulo o conteúdo)
?> 
        <form id="form1" name="form1" method="post" action="cor.php">
            <label>Selecione a cor: </label>
              <select name="corSelect">
                <option value="#FF0000">Vermelho</option>
                <option value="#0000FF">Azul</option>
                <option value="#00FFFF">Ciano</option>
                <option value="yellow">Amarelo</option>
              </select>
              <br />

            <input type="submit" name="Submit" value="Aplicar" />
        </form>

</body>

</html>