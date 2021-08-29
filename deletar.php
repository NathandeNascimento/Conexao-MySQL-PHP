<? include_once"config.php";?>
<?
$id = $_GET['id'];
$conn = mysqli_connect($sevidor, $dbusuario, $dbsenha,$dbname);
mysqli_select_db($conn, $dbname);
$sql = "DELETE FROM clientes WHERE id = '$id'";

if (mysqli_query($conn, $sql)){
echo "<script>alert('Deletei agora já era !');
        window.location ='index.php'; </script>";
    }
        else {
        echo "Não Deletei";  }
?>