<? include_once "config.php";?>
<? include_once "top.php";?>

<script>
    function deletar_id() {
        if (confirm("Você deseja deletar este registro?; Vou apagar e não tem como recuperar depois!!!"))
         document.forms[0].submit();           
        else 
        return false;
    }
</script>

<html>
    <Body>
        <h3>Pesquisa</h3>

        <Table  style="width:100%;">
            <Th width="25%" style="text-align:left;">ID</Th>
            <Th width="25%" style="text-align:left;">Nome</Th>
            <Th width="24%" style="text-align:left;">Idade</Th>
            <Th width="26%" style="text-align:left;">Deletar</Th>
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
                <td width="25%" align="left"><a href="editar.php?id='.$rows_nomes ["id"] .' "title=Editar"> '  .$rows_nomes["id"] .' </a > </td>
                <td width="25%" align="left"> ' .$rows_nomes["Nome"] .' </a > </td> 
                <td width="25%" align="left"> ' .$rows_nomes["idade"] .'  </td> 
                <td width="5%" align="left"><a href="deletar.php?id='.$rows_nomes["id"] .'"title="Editar" 
                onclick="return deletar_id();"
                class="deletar">Deletar </td>
            </table>';} 

        ?>
        <div><h3>Total:  <? echo $conta?></h3></div>
    </Body>
</html>