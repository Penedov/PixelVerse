<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>The shop - ecommerce</title>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">Myshop</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
            <a class="nav-link" href="#">HOME</a>
            <a class="nav-link" href="#">Categoria</a>
            <a class="nav-link" href="#">Cadastrar</a>
            </div>
        </div>
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-3 mb-3">
                <div class="card">
                <img src="{{ asset('img/product_1.jfif') }}" alt="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Produto 1</h6>
                    <a href="#" class="btn btn-sm btn-secondary">Adicionar item</a>
                </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                <img src="{{ asset('img/product_2.jfif') }}" alt="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Produto 2</h6>
                    <a href="#" class="btn btn-sm btn-secondary">Adicionar item</a>
                </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                <img src="{{ asset('img/product_3.jfif') }}" alt="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Produto 3</h6>
                    <a href="#" class="btn btn-sm btn-secondary">Adicionar item</a>
                </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                <img src="{{ asset('img/product_4.jfif') }}" alt="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Produto 4</h6>
                    <a href="#" class="btn btn-sm btn-secondary">Adicionar item</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>