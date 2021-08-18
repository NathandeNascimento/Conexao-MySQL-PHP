<? include_once "config.php";?>
<? include_once "top.php";?>

<html>
    <Body>
        <h3>Pesquisa</h3>

        <Table>
            <Th width="5%" style="text-align:lefth;">ID</Th>
            <Th width="25%" style="text-align:lefth;">Nome</Th>
            <Th width="25%" style="text-align:lefth;">Idade</Th>
        </Table>

        <?
        $busca = $_GET["busca"];
        $result_nomes = "SELECT * FROM clientes WHERE Nome LIKE '$busca%' Order By nome ASC limit 100";
        $resultado_nomes = mysqli_query($conn, $result_nomes);
        $conta = mysqli_num_rows($resultado_nomes);
        while($rows_nomes = mysqli_fetch_array($resultado_nomes))
        {
            echo'<table>
            <br/>
                <td width="9%" align="left"><a href="editar.php?id='.$rows_nomes ["id"] .' "title=Editar"> '  .$rows_nomes["id"] .' </a > </td>
                <td width="15%" align="left"> ' .$rows_nomes["Nome"] .' </a > </td> 
                <td width="5%" align="left"> ' .$rows_nomes["idade"] .'  </td> 
            </table>';} 

        ?>
        <div><h3>Total:  <? echo $conta?></h3></div>
    </Body>
</html>