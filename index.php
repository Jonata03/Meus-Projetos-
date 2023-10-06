<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Prova</title>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="./cadastrar/listarAlunos.php" class="nav-link active" aria-current="page">Listas de alunos</a></li>
            </ul>
        </header>
    </div>
    <section>
        <form action="./sistema/cad.php" method="POST">
            <input type="hidden" name="acao" value="cadastrar">


            <div class="mb-3">
                <label for="idNome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="idNome" placeholder="Digite o Nome">
            </div>

            <div class="mb-3">
                <label for="idNota1" class="form-label">Nota1</label>
                <input type="number" class="form-control" name="nota1" id="idNota1" placeholder="Digite sua 1° nota">
            </div>

            <div class="mb-3">
                <label for="idNota2" class="form-label">Nota2</label>
                <input type="number" class="form-control" name="nota2" id="idNota2" placeholder="Digite sua 2° nota">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </section>
</body>

</html>