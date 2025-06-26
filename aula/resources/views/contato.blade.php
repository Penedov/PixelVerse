<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <header> 
        
    </header>

    <section>
        <h1> Dados dos contatos </h1>
    </section>

    <section>
        <form action="" method="post">
            <div>
                <label> Pesquisar contato por nome: </label>
                <input type="text" name="txPesqNome" />                
            </div>

            <div>
                <input type="submit" value="Enviar" />
            </div>
        </form>
    </section>


    <section>
        <form action="/contato" method="post">
            @csrf

            <div>
                <label> Nome </label>
                <input type="text" name="txNome" />
            </div>

            <div>
                <label> E-mail </label>
                <input type="text" name="txEmail" />
            </div>

            <div>
                <label> Assunto </label>
                <input type="text" name="txAssunto" />
            </div>

            <div>
                <label> Mensagem </label>
                <textarea name="txMensagem"></textarea>
            </div>

            <div>
                <input type="submit" value="Enviar" />
            </div>
        </form>
    </section>   

    <section>
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Assunto</th>
                        <th scope="col">Mensagem</th>
                    </tr>
                </thead>
            <tbody>
                @foreach($contatos as $c)
                    <tr>
                        <th scope="row"> {{$c->idContato}} </th>
                        <td> {{$c->nomeContato}} </td>
                        <td> {{$c->emailContato}} </td>
                        <td> {{$c->assuntoContato}} </td>
                        <td> {{$c->mensagemContato}} </td>
                    </tr>
                @endforeach               
            </tbody>
        </table>
    </section>



    <footer>

    </footer>


    

    
</body>
</html>