<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PDF Form</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form class="offset-md-3 col-md-6" action="makepdf.php" method="POST">

            <h1>Criaçao de PDF</h1>
            <p>Preencha os detalhes abaixo para baixar o PDF</p>

            <div class="row mb-2">
                <div class="col-md-6">
                    <input type="text" name="firstName" placeholder="Primeiro nome" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <input type="text" name="lastName" placeholder="Sobrenome" class="form-control" required>
                </div>
            </div>

            <div class="mb-2">
                <input type="email" name="email" id="" placeholder="Email" class="form-control" required>
            </div>
            <div class="mb-2">
                <input type="tel" name="phone" id="" placeholder="Telefone" class="form-control" required>
            </div>
            <div class="mb-2">
                <textarea name="mensagem" id="" placeholder="Escreva sua mensagem" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-lg btn-block">Criar PDF</button>

        </form>
    </div>
</body>

</html>