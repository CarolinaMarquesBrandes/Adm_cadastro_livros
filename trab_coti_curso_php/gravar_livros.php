<?php 
    $titulo = $_POST['titulo'];
    $editora = $_POST['editora'];
    $autor = $_POST['autor'];
    $anoEd = $_POST['anoEdicao'];
    $categoria = $_POST['categoria'];
    $numDePaginas = $_POST['numeroPaginas'];

    if($titulo != "" && $editora != "" && $autor != "" && $anoEd != "" && $categoria != "" && $numDePaginas != ""){
        
        $conexaoBD = mysqli_connect("localhost", "root", "","coti01");
        $dadosParaBD = "insert into livros values (null, '".$titulo."', '".$editora."', '".$autor."', '".$anoEd."', '".$categoria."', '".$numDePaginas."')";
        
       // echo $dadosParaBD;
        
        if(mysqli_query($conexaoBD, $dadosParaBD)){
            $msg = "Dados gravados com sucesso!";
        }else{
            $msg = "Erro ao gravar!";
        }
        
        mysqli_close($conexaoBD);
    }

?>

<script>
    alert("<?php echo $msg; ?>");
    location.href='painel.php';
</script>
