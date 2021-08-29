<? include_once "config.php"?>
<? include_once "top.php"?>
<?
$id = $_GET["id"];
$result_nomes = "SELECT * FROM clientes WHERE id LIKE '$id'";
$resultado_nomes = mysqli_query($conn, $result_nomes);
while($rows_nomes = mysqli_fetch_array($resultado_nomes)) {
    $id = $rows_nomes['id'];
    $Nome = $rows_nomes ['Nome'];
    $idade = $rows_nomes['idade'];
}

?>
<h3>Editar</h3>
<form action="atualizar.php" method="post">
    ID: <input type="text" name="id" value="<?php echo $id;?>" readonly> <br/>
    Nome:<input type="text" name="Nome" value="<? echo $Nome;?>"><br/>
    Idade: <input type="text" name="idade" value="<? echo $idade?>"><br/>
    <input type="submit" value="Salvar">
    
</form>
 