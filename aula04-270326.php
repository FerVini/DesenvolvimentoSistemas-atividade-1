<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade da aula 04</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-warning">
    <div class="container">
        <h1 class="my-3 display-4 text-center text-danger">Dogão</h1>

        <div class="row justify-content-center border-bottom border-danger pb-5">
            <div class="col-md-7 p-2 border border-danger rounded bg-white">
                <form method="POST" class="text-danger">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Qual o nome do cliente:</label>
                        <input type="text" name="nome" class="form-control border-danger">
                    </div>

                    <div class="row">

                        <div class="col-md-4 mb-3">
                            <label for="pedido" class="form-label">Qual seu pedido</label>
                            <select name="pedido" id="pedido" class="form-select border-danger">
                                <option value="">O que comer?</option>
                                <option value="Dog Simples">Dog Simples</option>
                                <option value="Dog Duplo">Dog Duplo</option>
                                <option value="Dog Bacon">Dog Bacon</option>
                                <option value="Dog Frango">Dog Frango</option>
                            </select>
                        </div>

                        <div class="col-md-2 mb-3">
                            <div>
                                <input class="form-check-input" type="radio" name="tamanho" value="pequeno" id="tamanho1">
                                <label class="form-check-label" for="tamanho1">
                                    Pequeno
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="tamanho" value="medio" id="tamanho2">
                                <label class="form-check-label" for="tamanho1">
                                    Médio
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="tamanho" value="grande" id="tamanho3">
                                <label class="form-check-label" for="tamanho1">
                                    Grande
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="quantidade" class="form-label">Quantos quer</label>
                            <input type="number" name="quantidade" class="form-control border-danger">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="adicionais[]" value="tomate" id="add-tomate">
                            <label class="form-check-label" for="add-tomate">
                                Tomate
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="adicionais[]" value="alface" id="add-alface">
                            <label class="form-check-label" for="add-alface">
                                Alface
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="adicionais[]" value="cebola" id="add-cebola">
                            <label class="form-check-label" for="add-cebola">
                                Cebola
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="adicionais[]" value="queijo" id="add-queijo">
                            <label class="form-check-label" for="add-queijo">
                                Queijo
                            </label>
                        </div>
                    </div>

                    <button class="btn btn-danger" type="submit">Fazer pedido</button>
                </form>
            </div>
        </div>

        <div class="row">
                <?php 
                if (
                    isset (
                        $_POST['nome'],
                        $_POST['pedido'],
                        $_POST['tamanho'],
                        $_POST['quantidade']
                    )
                ) {
                    $nome = $_POST['nome'];
                    $pedido = $_POST['pedido'];
                    $tamanho = $_POST['tamanho'];
                    $quantidade = $_POST['quantidade'];
                    $adicionais = $_POST['adicionais'] ?? [];

                    echo "<div class='col-12 mt-3'>";
                    echo "<h3>Resumo do Pedido:</h3>";
                    echo "<p>Nome: $nome</p>";
                    echo "<p>Pedido: $pedido</p>";
                    echo "<p>Tamanho: $tamanho</p>";
                    echo "<p>Quantidade: $quantidade</p>";
                    echo "<p>Adicionais: " . implode(', ', $adicionais) . "</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</body>

</html>
