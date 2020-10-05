<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Escala</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
        
        <form action="actions/enviar.php" method="POST">
        <h2>Formulario</h2>
            <div>
                <p>Nome</p>
                <input type="text" name="nome" id="nome">
                <!---<label for=""></label>--->
            </div>
            <div>
                <p>Email</p>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <p>Telefone</p>
                <input type="tel" name="tel" id="tel">
            </div>
            <div>
                <p>Mensagem</p>
                <textarea name="msg" id="msg" cols="18" rows="5"></textarea>
                <!---<input type="text" name="msg" id="msg">-->
            </div>
            <button type="submit" name="btn-enviar" class="btn btn-success">Enviar</button>
            <a href="listar_contatos.php" type="submit" class="btn btn-light">Listar Contatos</a>
        </form>
        </div>
    </div>
</body>
</html>