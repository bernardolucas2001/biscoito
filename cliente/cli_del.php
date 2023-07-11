<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>    
    <title>Cofeitaria Sorriso :) :) :)</title>
</head>
<body style="background: linear-gradient(to right, white, #FCC262, gray);">
 <center>
     <header class="cabecalho">
        <h1 class="titulo" alig="center">Confeitaria Sorriso :) :) :)</h1>
        <br>
        <h2 class="titulo" align="center">Confeitaria Sorriso :) :) :)</h2>
        <br>
        <h2 class="titulo" alig="center">PESQUISA PARA EXCLUSÃO DE CLIENTE, ENDEREÇO E PEDIDO</h2>
     </header> 
     <br>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }  

    ?>
    <div class="form-container">
        <form method="POST" action="cli_del_pro.php">
            <label>Código:</label>
            <input type="number" name="cod" required="" placeholder="Digite o código do cliente que deseja excluir">            
            <input type="number" name="seq" required="" placeholder="Digite o código do endereço que deseja excluir">
            <input type="number" name="numero" required="" placeholder="Digite o código do pedido que deseja excluir">
            <input type="submit" name="Consular" style="background-color: brown;color: white;border: none;border-radius: 10px; height: 25px;cursor: pointer;">

        </form>

    </div>
<br>

<a href="cli_cad.php"><img src="..//img/retornar.png" width="20" height="20">
 </center>   
</body>
</html>