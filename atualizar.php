<?include_once "config.php";?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de atualização</title>
</head>
<body>
    <?
    $id = $_POST["id"];
    $Nome = $_POST["Nome"];
    $idade = $_POST["idade"];
    mysqli_select_db($conn, $dbname);

    $sql = "UPDATE clientes SET idade='$idade', Nome='$Nome' WHERE id='$id'";

    if (mysqli_query($conn,$sql)) {
        echo "<script>alert('Salvo com Sucesso !');
        window.location = 'busca.php?busca=$Nome';</script>";

        
    }
    else {
        echo "Não Atualizei";
        mysqli_close($conn);
    }
    
    ?>
    
</body>
</html>