<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Escala</title>
</head>
<?php
    include_once 'actions/connect.php';
?>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
        <table class="table table-striped">
            <h2>Contatos</h2>
            <!--CABEÇALHO-->
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id:</th>
                    <th scope="col">Nome:</th>
                    <th scope="col">Email:</th>
                    <th scope="col">Telefone:</th>
                </tr>
            </thead>

            <!--CORPO-->
            <tbody>
                <?php
                    //SELECIONA TODOS OS DADOS DA TABELA 
                    $sql = "SELECT * FROM Contatos";
                    $resultado = mysqli_query($connect, $sql);
                        
                    if(mysqli_num_rows($resultado)<1):
                ?>
                <tr>
                    <td scope="row">--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <?php
                    else:
                        //GUARDA OS DADOS EM UM ARRAY E EXIBE NO LOOP 
                        while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td scope="row"><?php echo $dados['id'];?></td>
                    <td ><?php echo $dados['nome'];?></td>
                    <td><?php echo $dados['email'];?></td>
                    <td><?php echo $dados['telefone'];?></td>
                </tr>
                <?php 
                        endwhile;
                    endif;
                ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>