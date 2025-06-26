<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados dos Clientes</title>
</head>
<body>

    <header>
        <h1>Dados dos Clientes</h1>
    </header>

    <main>
        <section style="float: left; width: 45%;">
            <h2>Formulário de Cadastro</h2>
            <form action="/cliente" method="post">
                @csrf

                <fieldset>
                    <legend>Informações Pessoais</legend>

                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="txtnome" required />
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
                        <label for="email">Email</label>
                        <input type="email" id="email" name="txtemail" required />
                    </div>

                    <div>
                        <label for="datacadastro">Data de Cadastro</label>
                        <input type="date" id="datacadastro" name="datacadastro" required />
                    </div>

                    <div>
                        <label for="sexo">Sexo</label>
                        <input type="text" id="sexo" name="txtsexo" required />
                    </div>

                    <div>
                        <label for="datanascimento">Data de Nascimento</label>
                        <input type="date" id="datanascimento" name="datanascimento" required />
                    </div>

                    <div>
                        <input type="submit" value="Enviar" />
                    </div>
                </fieldset>
            </form>
        </section>

        <section style="float: right; width: 45%;">
            <h2>Lista de Clientes</h2>
            <ul>
                @foreach($clientes as $cliente)
                    <li>
                        <strong>ID:</strong> {{$cliente->id}}<br>
                        <strong>Nome:</strong> {{$cliente->nome}}<br>
                        <strong>Endereço:</strong> {{$cliente->endereco}}<br>
                        <strong>Telefone:</strong> {{$cliente->telefone}}<br>
                        <strong>Email:</strong> {{$cliente->email}}<br>
                        <strong>Data de Cadastro:</strong> {{$cliente->datacadastro}}<br>
                        <strong>Sexo:</strong> {{$cliente->sexo}}<br>
                        <strong>Data de Nascimento:</strong> {{$cliente->datanascimento}}<br>
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
