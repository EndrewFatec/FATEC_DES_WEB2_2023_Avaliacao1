<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start(); 
        if($_POST['usuário'] == 'portaria' and $_POST['senha'] == 'FatecAraras'){ 
            $_SESSION['loggedin'] = TRUE; 
                header("location: home.php"); 
        } else {
            $_SESSION['loggedin'] = FALSE; 
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Login</title>

</head>
<body>
    <h1 >Cadastro Dos Veiculos</h1>
  <section > 
    <div >
        <h2 > </h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div >
                <label>Usuario</label>
                <input type="text" name="usuário" placeholder="Login">
            </div>    
            <div >
                <label>Senha</label>
                <input type="password" name="senha"  placeholder="Senha">
            </div>
            <div >
                <button type="submit"  value="Acesso">Acessar</button>
            </div>
        </form>
    </div>
  </section>










</body>
</html>

