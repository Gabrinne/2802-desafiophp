<?php 
    require_once "validador_acesso.php"
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            < DESAFIO PHP /> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar"
            aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="textoNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adicionarprod.php">Adicionar produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="criarusuario.php">Usuários</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="logoff.php">SAIR</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="col-12">
            <h2>Editar Usuário</h2>
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">E-mail</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput3">Senha</label>
                    <small id="formGroupExampleInput3" class="form-text text-muted">Mínimo 6 caracteres.</small>
                    <input type="text" class="form-control" id="formGroupExampleInput3" ">
            </div>
            <div class=" form-group">
                    <label for="formGroupExampleInput2">Confirmar senha</label>
                    <input type="text" class="form-control" id="formGroupExampleInput3">
                </div>
                <button class="btn btn-warning col-lg mt-3" type="submit">Editar usuário</button>
            </form>
        </div>
    </div>
    







    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    </body>

</html>