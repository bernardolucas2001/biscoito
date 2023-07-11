
<!DOCTYPE html>
<html>
<head>    
    <title>CONFEITARIA DO SORRISO</title>
</head>
<body style="background-image: linear-gradient(to right, white, #FCC262, gray);">
<center>
     <header class="cabecalho">
        <h1 class="titulo" alig="center">CONFEITARIA DO SORRISO</h1>
        <br>
        <h2 class="titulo" align="center">Aqui você encontra tudo para a sua confraternização!</h2>
        <br>
        <h2 class="titulo" alig="center">EXCLUSÃO DO PEDIDO</h2>
     </header> 
     <hr>
     <br>

     <?php
     session_start();
     include_once("../conexao.php");

        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }  
        
        
        $cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_NUMBER_INT); 
        $resultado_cliente = "DELETE FROM cliente WHERE codigo=$cod";       
        $resultado = mysqli_query($conn, $resultado_cliente);

        $seq = filter_input(INPUT_POST, 'seq', FILTER_SANITIZE_STRING);               
        $resultado_endereco = "DELETE FROM endereco WHERE seq=$seq";           
        $resultado = mysqli_query($conn, $resultado_endereco); 
        
        $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);               
        $resultado_pedido = "DELETE FROM pedido WHERE numero=$numero";           
        $resultado = mysqli_query($conn, $resultado_pedido); 

        if(mysqli_affected_rows($conn))
        {
            echo "<h2><font color= 'green'>Cliente apagado com sucesso </font></h2>";            
        }else{
            echo "<h2><font color= 'red'>Cliente não existe </font></h2>";
        }

        
    ?>
  
<br>
<hr>
<a href="cli_cad.php"><img src="..//img/retornar.png" width="20" height="20">
</center>
   
</body>
</html>