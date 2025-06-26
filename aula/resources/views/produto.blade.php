<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados dos Produtos</title>
</head>
<body>

    <header>
        <h1>Dados dos Produtos</h1>
    </header>

    <main>
        <section style="float: left; width: 45%;">
            <h2>Formulário de Cadastro</h2>
            <form action="/produto" method="post">
                @csrf

                <fieldset>
                    <legend>Informações do Produto</legend>

                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="txtnome" required />
                    </div>

                    <div>
                        <label for="quantidade">Quantidade</label>
                        <input type="number" id="quantidade" name="txtquantidade" required />
                    </div>

                    <div>
                        <label for="categoria">Categoria</label>
                        <input type="text" id="categoria" name="txtcategoria" required />
                    </div>

                    <div>
                        <label for="valor">Valor</label>
                        <input type="number" step="0.01" id="valor" name="txtvalor" required />
                    </div>

                    <div>
                        <label for="marca">Marca</label>
                        <input type="text" id="marca" name="txtmarca" required />
                    </div>

                    <div>
                        <label for="datafabricacao">Data de Fabricação</label>
                        <input type="date" id="datafabricacao" name="datafabricacao" required />
                    </div>

                    <div>
                        <input type="submit" value="Enviar" />
                    </div>
                </fieldset>
            </form>
        </section>

        <section style="float: right; width: 45%;">
            <h2>Lista de Produtos</h2>
            <ul>
                @foreach($produtos as $produto)
                    <li>
                        <strong>ID:</strong> {{$produto->id}}<br>
                        <strong>Nome:</strong> {{$produto->nome}}<br>
                        <strong>Quantidade:</strong> {{$produto->quantidade}}<br>
                        <strong>Categoria:</strong> {{$produto->categoria}}<br>
                        <strong>Valor:</strong> {{$produto->valor}}<br>
                        <strong>Marca:</strong> {{$produto->marca}}<br>
                        <strong>Data de Fabricação:</strong> {{$produto->datafabricacao}}<br>
                    </li>
                @endforeach
            </ul>
        </section>
    </main>

    <footer style="clear: both;">
        <p>&copy; 2024 - Todos os direitos reservados</p>
    </footer>

</body>
</html>