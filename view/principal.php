<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Projeto php fundamentos</title>
  </head>
  <body>
    
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">PixelTrine Cursos</span>
    </nav>

    <div class="container" >
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome do curso</th>
                <th scope="col">Carga horaria</th>
                <th scope="col">Versão</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach(cursos() as $curso) :  ?>
                <?php if($curso["status"] == true){
                    $curso["status"] = "Atualizado";
                } else {
                    $curso["status"] = "Desatualizado";
                }?>
                <tr>
                    <th scope="row"><?= $curso["nome_curso"] ?></th>
                        <td><?= carga_horaria($curso["carga_horaria"]) ?></td>
                        <td><?= $curso["versão_ferramenta"] ?></td>
                        <td><?= $curso["status"] ?></td>
                        
                    </tr>
            <?php endforeach ?>
        </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>