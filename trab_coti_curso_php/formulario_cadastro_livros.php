<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de livros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php include 'menuPainel.php'; ?>
    
    <div class="centralizar-conteudo">
        <h1>Cadastro de livros</h1>

        <form action="gravar_livros.php" method="post">
            <!-- Linha 1 -->
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="titulo">Titulo do Livro</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Digite o título do livro" name="titulo" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="editora">Editora</label>
                    <input type="text" class="form-control" id="editora" placeholder="Digite a editora do livro" name="editora" required>
                </div>
            </div>
            <!-- FIM - Linha 1 -->

            <!-- Linha 2 -->
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" id="autor" placeholder="Digite o nome completo do(a) autor(a)" name="autor" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="anoEdicao">Categoria</label>
                    <select id="anoEdicao" class="form-control" name="categoria" required>
                        <option selected>Escolher Categoria</option>
                        <option value="arquitetura">Arquitetura</option>
                        <option value="autoAjuda">Auto-ajuda</option>
                        <option value="concursos">Concursos</option>
                        <option value="culinaria">Culinária</option>
                        <option value="design">Design</option>
                        <option value="drama">Drama</option>
                        <option value="engenharia">Engenharia</option>
                        <option value="ficcaoCientifica">Ficção Cientifica</option>
                        <option value="filosofia">Filosofia</option>
                        <option value="informatica">Informática</option>
                        <option value="linguasEstrangeiras">Línguas Estrangeiras</option>
                        <option value="matematica">Matemática</option>
                        <option value="medicina">Medicina</option>
                        <option value="portugues">Português</option>
                        <option value="religiao">Religião</option>
                        <option value="romance">Romance</option>
                        <option value="saude">Saúde</option>
                        <option value="terror">Terror</option>
                    </select>
                </div>
            </div>
            <!-- FIM - Linha 2 -->

            <!-- Linha 3 -->
            <div class="form-row">

                <div class="form-group col-md-2">
                    <label for="anoEdicao">Ano de Edição</label>
                    <select id="anoEdicao" class="form-control" name="anoEdicao" required>
                        <option selected>Escolher Ano</option>
                        <?php  
                            date_default_timezone_set("America/Sao_Paulo");
                            $dataAtual = date(Y);
                            for($ano = 1960; $ano <= $dataAtual; $ano++){?>
                            <option value="<?php echo $ano; ?>">
                                <?php echo $ano; ?>
                            </option>
                            <?php } ?>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="numeroPaginas">Número de Páginas</label>
                    <input type="number" class="form-control" id="numeroPaginas" placeholder="Páginas" name="numeroPaginas" required>
                </div>

            </div>
            <!-- FIM - Linha 3 -->

            <button type="submit" class="cadastrar btn btn-info">Cadastrar</button>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
        var menu = document.querySelector(".menu");
        var itensMenu = menu.querySelectorAll("a");
        
        for(var i = 0; i < itensMenu.length; i++ ){
            if(i == 0){
                itensMenu[i].classList.add("pagAtual");
            }
        }
        
    </script>

</body>

</html>
