<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Listas de alunos</title>
</head>
<body>
<div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="../index.php" class="nav-link active" aria-current="page">Home</a></li>             
            </ul>
        </header>
    </div>
    <section>
        <h1>Listar Alunos</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Nota 1</th>
                        <th scope="col">nota 2</th>
                        <th scope="col">Média</th>
                        <th scope="col">Situação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../sistema/configuracao.php";

                    $sql = "SELECT * FROM prova";

                    $res = $conn->query($sql);
                    $qtd = $res->num_rows;
                    $media=0;
                    $soma =0;
                    if ($qtd > 0) {
                        while ($row = $res->fetch_object()) {
                            echo "<tr>";
                            echo "<th scope='row'>".$row->id."</th>";
                            echo "<td>".$row->nome."</td>";
                            echo "<td>".$row->nota1."</td>";
                            echo "<td>".$row->nota2."</td>";
                            
                            $soma= $row->nota1 + $row->nota2;
                            $media=$soma/2;

                            echo "<td>".$media."</td>";
                            
                            if($media >= 6){
                                 echo "<td><button class='btn btn-success'>Aprovado</button></td>";
                            }
                            else if ($media <6 and $media >=4){
                                echo "<td><button class='btn btn-warning'>Recuperação</button></td>";
                            }
                            else if ($media < 4){
                                echo "<td><button class='btn btn-danger'>Reprovado</button></td>";
                            }
                        }

                    } else {
                        echo "<p>Não encontrou resultados</p>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    </div>
</body>
</html>