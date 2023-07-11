<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONFEITARIA SORRISO</title>
</head>

<body style="background-image: linear-gradient(to right, white, #FCC262, gray);">
<center>
    <header class="cabecalho">
        <h1 class="titulo" align="center">CONFEITARIA DO SORRISO</h1>
        <br>
        <h2 class="titulo" align="center">Aqui você encontra tudo para a sua confraternização! </h2>
        <br>
        <h2 class="titulo" align="center">Também incluso em nosso cardápio pães e pizzas :)</h2>

    </header>

    <br>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"> </script>

    <script>
        jQuery(function($){
            $("#cpf").mask("999.999.999/99");
            $("#tel").mask("(99)99999-9999");
          }
            )
    </script>

    <?php
     if(isset($_SESSION['msg'])){
         echo $_SESSION['msg'];
         unset($_SESSION['msg']);
     }
?>
<div class="form-container">
    <form action="cli_pro.php" method="POST">
    <hr>
    <label><h3 style="color: gray; font-size: 30px;"><strong>Cadastro para emissão da NF</strong></h3></label>
    <input type="hidden" name="cod" value="valor do escondido">   
     
    <label><strong>Nome:</strong></label>
    <input type="text" name="nome" maxlenght="50" style="border-style:solid; border-width:3px; border-radius:5px;" required placeholder="Digite seu nome"><br><br>
   
    <label><strong>RG:</strong></label>
    <input type="text" name="rg" maxlenght="10" style="border-style:solid; border-width:3px; border-radius:5px;" required placeholder="Digite seu RG"><BR><br>

    <label><strong>CPF:</strong></label>
    <input type="text" name="cpf" maxlenght="15" style="border-style:solid; border-width:3px; border-radius:5px;" required id="cpf" placeholder="999.999.999/99"><br><br>

    <label><strong>Telefone:</strong></label>
    <input type="text" name="tel" maxlenght="12" style="border-style:solid; border-width:3px; border-radius:5px;" required placeholder="(99)9999-9999"><br><br>    

    <hr>
    <label><h3><strong style="color: gray; font-size: 30px;">Endereço para entrega</strong></h3></label>
    <input type="hidden" name="seq"  value="valor do escondido"> 
     
    <label><strong>Logradouro:</strong></label>
    <input type="text" name="logradouro" maxlenght="50" style="border-style:solid; border-width:3px; border-radius:5px;" required placeholder="Digite seu logradouro"><br><br>

    <label><strong>Bairro:</strong></label>
    <input type="text" name="bairro" maxlenght="20" style="border-style:solid; border-width:3px; border-radius:5px;" required placeholder="Digite seu bairro"><br><br>

    <label><strong>Cidade:</strong></label>
    <input type="text" name="cidade" maxlenght="30" style="border-style:solid; border-width:3px; border-radius:5px;" required placeholder="Digite o nome da sua cidade"><br><br>

    <label><strong>UF:</strong></label>
    <input type="text" name="uf" maxlenght="10" size="1" style="border-style:solid; border-width:3px; border-radius:5px;" required placeholder=" UF"><br><br> 

    <hr>
    <label><h3 style="color: gray; font-size: 30px;"><strong>Faça o seu pedido</strong></h3></label>
    <input type="hidden" name="numero"  value="valor do escondido">
    <div class="inputForm">			   
                <strong>Descrição:<strong>
                  <select name="descricao">
                  <option value="Biscoito Amantegado">Biscoito Amantegado 200g R$3,00</option>
                  <option value="Biscoito Casadinho">Biscoito Casadinho 200g R$3,00</option>
                  <option value="Cookie Integral Gotas">Cookie Integral Gotas R$3,00 a unidade</option>
                  
                  </select>
			   </div>
         
    <label><strong>Quantidade:</strong></label>
    <input type="number" name="quantidade" maxlenght="10"required placeholder="Digite a quantidade dejesada">
    
                <div class="inputForm">			   
                <strong>Forma de Pagamento:<strong>
                  <select name="situacao">
                  <option value="Em processamentocc">Cartão Crédito</option>
                  <option value="Em processamentocd">Cartão Dédito</option>
                  <option value="Em processamentoOut">Outros</option>
                  
                  </select>
			    </div> 
     <br>
    
    <input type="submit" style="background-color: brown;color: white;border: none;border-radius: 10px; height: 30px;cursor: pointer;"  value="INCLUIR">
    </form>
</div>    
    <br>
    <hr>    
    
    <a href="../index.html"><img src="../img/retornar.png" alt="" width="20" height="20"></a>
</center>





</body>
</html>