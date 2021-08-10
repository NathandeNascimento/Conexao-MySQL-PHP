<? include_once "config.php";?>

<html>
<body>
<?$nome = $_POST ["nome"];
$idade = $_POST ["idade"];
$conn = mysqli_connect($sevidor, $dbusuario, $dbsenha, $dbname);
mysqli_select_db($conn,"dbname");
$sql = "INSERT INTO clientes (nome,idade) VALUES ('$nome', '$idade')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Salvei seus dados !!!'); window.location='index.php';</script>";

}else{
    "Deu errro:" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>