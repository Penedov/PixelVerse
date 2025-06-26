<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados dos Fornecedores</title>
</head>
<body>

    <header>
        <h1>Dados dos Fornecedores</h1>
    </header>

    <main>
        <section style="float: left; width: 45%;">
            <h2>Formulário de Cadastro</h2>
            <form action="/fornecedor" method="post">
                @csrf

                <fieldset>
                    <legend>Informações do Fornecedor</legend>

                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="txtnome" required />
                    </div>

                    <div>
                        <label for="cnpj">CNPJ</label>
                        <input type="text" id="cnpj" name="txtcnpj" required />
                    </div>

                    <div>
                        <label for="endereco">Endereço</label>
                        <input type="text" id="endereco" name="txtendereco" required />
                    </div>

                    <div>
                        <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" name="txttelefone" required />
                    </div>

                    <div>
                        <label for="celular">Celular</label>
                        <input type="text" id="celular" name="txtcelular" required />
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="txtemail" required />
                    </div>

                    <div>
                        <input type="submit" value="Enviar" />
                    </div>
                </fieldset>
            </form>
        </section>

        <section style="float: right; width: 45%;">
            <h2>Lista de Fornecedores</h2>
            <ul>
                @foreach($fornecedores as $fornecedor)
                    <li>
                        <strong>ID:</strong> {{$fornecedor->id}}<br>
                        <strong>Nome:</strong> {{$fornecedor->nome}}<br>
                        <strong>CNPJ:</strong> {{$fornecedor->cnpj}}<br>
                        <strong>Endereço:</strong> {{$fornecedor->endereço}}<br>
                        <strong>Telefone:</strong> {{$fornecedor->telefone}}<br>
                        <strong>Celular:</strong> {{$fornecedor->celular}}<br>
                        <strong>Email:</strong> {{$fornecedor->email}}<br>
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
