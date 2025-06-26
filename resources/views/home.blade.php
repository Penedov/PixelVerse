<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>The Shop - E-commerce</title>
    <style>
        .card:hover {
            transform: scale(1.05);
            transition: transform .2s;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <a class="navbar-brand" href="/">PixelVerse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produto">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contato">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cliente">Clientes</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="/fornecedor">Fornecedores</a>
                </li>
            </ul>
            <a href="#" class="btn btn-outline-primary"><i class="fa fa-shopping-cart"></i> Carrinho</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Nossos Produtos</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('img/product_1.jfif') }}" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                        <h5 class="card-title">Produto 1</h5>
                        <p class="card-text">R$ 99,90</p>
                        <a href="#" class="btn btn-primary btn-block">Adicionar ao Carrinho</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('img/product_2.jfif') }}" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Produto 2</h5>
                        <p class="card-text">R$ 129,90</p>
                        <a href="#" class="btn btn-primary btn-block">Adicionar ao Carrinho</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('img/product_3.jfif') }}" class="card-img-top" alt="Produto 3">
                    <div class="card-body">
                        <h5 class="card-title">Produto 3</h5>
                        <p class="card-text">R$ 79,90</p>
                        <a href="#" class="btn btn-primary btn-block">Adicionar ao Carrinho</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('img/product_4.jfif') }}" class="card-img-top" alt="Produto 4">
                    <div class="card-body">
                        <h5 class="card-title">Produto 4</h5>
                         <p class="card-text">R$ 149,90</p>
                        <a href="#" class="btn btn-primary btn-block">Adicionar ao Carrinho</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">PixelVerse</h5>
                    <p>
                        Sua loja de produtos incríveis.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="/" class="text-dark">Home</a>
                        </li>
                        <li>
                            <a href="/produto" class="text-dark">Produtos</a>
                        </li>
                        <li>
                            <a href="/contato" class="text-dark">Contato</a>
                        </li>
                    </ul>
                </div>
                 <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Redes Sociais</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-dark"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="#" class="text-dark"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href="#" class="text-dark"><i class="fab fa-twitter"></i> Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-dark" href="#">PixelVerse</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
