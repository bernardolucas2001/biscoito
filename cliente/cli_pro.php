<?php
session_start();
include_once("../conexao.php"); //criar a conexão

$cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);

$resultado_cliente = "INSERT INTO cliente(codigo, nome, cpf, rg, telefone) VALUEs('$cod', '$nome', '$cpf', '$rg', '$tel')";
//Alteração em INSERT INTO "e1_clientes" para INSERT INTO "cliente".  
$resultado = mysqli_query($conn, $resultado_cliente);

header("Location: cli_cad.php");

?>

<?php
session_start();
include_once("../conexao.php"); //criar a conexão

$seq = filter_input(INPUT_POST, 'seq', FILTER_SANITIZE_STRING);
$logradouro = filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);

$resultado_endereco = "INSERT INTO endereco(seq, logradouro, bairro, cidade, uf) VALUEs('$seq', '$logradouro', '$bairro', '$cidade', '$uf')";

$resultado = mysqli_query($conn, $resultado_endereco);


if($conn->affected_rows== 1){
    $_SESSION['msg'] = "Registrado com sucesso!";
}else{
    $_SESSION['msg'] = "Não registrado tente novamente :)";
}

header("Location: cli_cad.php");
?>

<?php
session_start();
include_once("../conexao.php"); //criar a conexão

$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$preco = 03.00;
$situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);

$resultado_pedido = "INSERT INTO pedido(numero, descricao, preco, situacao) VALUEs('$numero','$descricao', '$preco','$situacao')";

$resultado = mysqli_query($conn, $resultado_pedido);


if($conn->affected_rows== 1){
    $_SESSION['msg'] = "Registrado com sucesso!";
}else{
    $_SESSION['msg'] = "Não registrado tente novamente :)";
}

header("Location: cli_cad.php");
?>


<?php
session_start();
include_once("../conexao.php"); //criar a conexão


$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
$preco = 03.00;
$preco_total = $preco * $quantidade;

$resultado_pedido_produto = "INSERT INTO pedido_produto(descricao, quantidade, preco, preco_total) VALUEs('$descricao', '$quantidade', '$preco', '$preco_total')";

$resultado = mysqli_query($conn, $resultado_pedido_produto);





if($conn->affected_rows== 1){
    $_SESSION['msg'] = "Registrado com sucesso!";
}else{
    $_SESSION['msg'] = "Não registrado tente novamente :)";
}

header("Location: cli_cad.php");
?>




