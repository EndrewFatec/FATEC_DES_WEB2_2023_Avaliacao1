<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
        header("location: index.php");
        exit;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST['nome'];
            $Ra = $_POST['Ra'];
            $Placa = $_POST['Placa'];

            $filename = "Veiculos.TXT";
        
            
            if (!file_exists($filename)) {
                
                $handle = fopen($filename, "w");
            } else {
                
                $handle = fopen($filename, "a");
            }
            fwrite($handle," Nome : $nome | Ra: $Ra | Placa:  $Placa | \n");
            fclose($handle);
            header("location: home.php");
        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
</head>
<body>
<h1>Cadastro Dos Veiculos</h1>
    <div >
        <form action="cadastrar.php" method="post">
            <div>
                <label>Nome</label>
                <input type="text" name="nome" value="">

            </div>    
            <div>
                <label>Ra</label>
                <input type="text" name="Ra" value="">
            </div>
            <div>
                <label>Placa</label>
                <input type="text" name="Placa" value="">
            </div>
            <div >
                <button type="submit" value="Cadastrar">Cadastrar</button>
            </div>     
        </form>
    </div>    
</body>
</html>