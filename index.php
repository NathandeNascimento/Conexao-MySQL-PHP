<? include_once "top.php";?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHP / MySQL</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estilo.css'>
 
</head>

<body>
<div class="corpo">

 <b>Cadastro no MySQL</b> 

 
<form action="querecebe.php" method="post">
    <ul> 
        
        <li><label>Nome:</label></li>
        <input type="text" name="nome">
        <li><label>Idade:</label></li>
        <input type="text" name="idade"><br><br>
        <input type="submit" value="Enviar" >
    </ul>
</form>
</div>      
</body>
</html>