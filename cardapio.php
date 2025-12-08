<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golias Lanches - Cardápio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #fff8e1;
            color: #333;
            margin: 0;
        }

        .navbar .nav-link {
            font-weight: 500;
        }

        .navbar .nav-link:hover {
            color: #333;
        }

        .logo {
            font-weight: 800;
            font-size: 1.7rem;
        }

        /* título */
        h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 30px;
            color: #333;
        }

        h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            margin-top: 45px;
            color: #ff7043;
        }

        /* tabela branca */
        .table {
            background: #fff8e1;
            border-radius: 14px;
            overflow: hidden;
        }

        /* Cabeçalho */
        thead tr {
            background: #ff7043;
        }

        th {
            color: #fff;
            font-weight: 700;
            text-transform: uppercase;
            padding: 15px;
            font-size: 0.9rem;
        }

        /* Linhas do corpo */
        tbody tr {
            background: #fff;
            color: #333;
            font-weight: 500;
        }

        /* Células */
        td {
            padding: 12px;
        }

        /* Imagens */
        td img {
            width: 75px;
            height: 75px;
            border-radius: 10px;
            object-fit: cover;
            border: 2px solid rgba(0,0,0,0.1);
        }

        .pizza-nome {
            font-weight: 700;
        }

        .preco {
            padding: 6px 12px;
            border-radius: 8px;
            font-weight: 700;
            color: #fff;
            display: inline-block;
            background: #ff7043;
        }

    </style>
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="logo navbar-brand" href="html/index.html">🍔 Golias</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="html/index.html">Início</a>
                <a class="nav-link" href="../cardapio.php">Cardápio</a>
                <a class="nav-link" href="html/sobrenos.html">Sobre nós</a>
            </div>
        </div>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="O que quer comer hoje?" />
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
    </div>
</nav>

<div class="container py-5 text-center">
    <h1><strong>Golias Lanches</strong></h1>

    <!--LANCHES -->
    <h2><strong>Lanches</strong></h2>
    <div class="table-responsive">
        <table class="table table-hover align-middle text-center">
            <thead>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>Ingredientes</th>
                <th>Preço</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $lanches = [
                [
                    'foto'=>'png/hamburguer.jpg',
                    'nome'=>'X-bacon',
                    'ingrediente'=>'Alface, Tomate, Batata Palha, Milho, Hambúrger, Presunto, Muçarela e Bacon',
                    'preco'=>'R$32,00'
                ],
                [
                    'foto'=>'png/vegeta.jpg',
                    'nome'=>'Bacon Especial',
                    'ingrediente'=>'Alface, Tomate, Batata Palha, Milho, Hambúrger, Presunto, Musarela, Bacon, Salsicha e Ovo',
                    'preco'=>'R$36,00'
                ],
                [
                    'foto'=>'png/frango.jpg',
                    'nome'=>'X-Frango',
                    'ingrediente'=>'Alface, Tomate, Batata Palha, Milho, Filé de Frango, Presunto, Bacon e Ovo',
                    'preco'=>'R$32,00'
                ],
                [
                    'foto'=>'png/frango2.jpg',
                    'nome'=>'Frango Especial',
                    'ingrediente'=>'Alface, Tomate, Batata Palha, Milho, Filé de Frango, Presunto, Bacon, Salsicha e Ovo',
                    'preco'=>'R$36,00'
                ],
                [
                    'foto'=>'png/vegeta.jpg',
                    'nome'=>'X-Bacon Turbo',
                    'ingrediente'=>'Alface, Tomate, Batata Palha, Milho, Hambúrger, Presunto, Muçarela e Bacon',
                    'preco'=>'R$40,00'
                ],
                [
                    'foto'=>'png/triplo.jpg',
                    'nome'=>'Bacon Mega',
                    'ingrediente'=>'Alface, Tomate, Batata Palha, Milho, Hambúrger, Presunto, Musarela, Bacon, Salsicha e Ovo',
                    'preco'=>'R$44,00'
                ],
                [
                    'foto'=>'png/frango.jpg',
                    'nome'=>'X-Frango Turbo',
                    'ingrediente'=>'Alface, Tomate, Batata Palha, Milho, Filé de Frango, Presunto, Bacon e Ovo',
                    'preco'=>'R$40,00'
                ],
                [
                    'foto'=>'png/cfrango.jpg',
                    'nome'=>'Frango Mega',
                    'ingrediente'=>'Alface, Tomate, Batata Palha, Milho, Filé de Frango, Presunto, Bacon, Salsicha e Ovo',
                    'preco'=>'R$44,00'
                ],
            ];

            foreach ($lanches as $item) {
                echo "<tr>
                        <td><img src='{$item['foto']}'></td>
                        <td class='pizza-nome'>{$item['nome']}</td>
                        <td>{$item['ingrediente']}</td>
                        <td class='preco'>{$item['preco']}</td>
                    </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

    <!-- ACOMPANHAMENTOS -->
    <h2><strong>Acompanhamentos</strong></h2>
    <div class="table-responsive">
        <table class="table table-hover align-middle text-center">
            <thead>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>Preço</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $acomp = [
                ['foto'=>'png/batata.jpg','nome'=>'Batata PQ. 100GR','preco'=>'R$23,99'],
                ['foto'=>'png/batata.jpg','nome'=>'Batata GRD. 500GR','preco'=>'R$31,99'],
                ['foto'=>'png/batata-com-cheddar.jpg','nome'=>'Batata Com Queijo e Bacon','preco'=>'R$35,00'],
                ['foto'=>'png/cebola.jpg','nome'=>'Anéis de Cebola','preco'=>'R$25,00'],
                ['foto'=>'png/bife-batata.jpg','nome'=>'Bife com batata','preco'=>'R$46,99'],
                ['foto'=>'png/espeto.jpg','nome'=>'Espetinho','preco'=>'R$6,99'],
                ['foto'=>'png/coxinha.jpg','nome'=>'Coxinha','preco'=>'R$8,90'],
            ];

            foreach ($acomp as $item) {
                echo "<tr>
                        <td><img src='{$item['foto']}'></td>
                        <td class='pizza-nome'>{$item['nome']}</td>
                        <td class='preco'>{$item['preco']}</td>
                    </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

    <!-- BEBIDAS -->
    <h2><strong>Bebidas</strong></h2>
    <div class="table-responsive">
        <table class="table table-hover align-middle text-center">
            <thead>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>Sabores</th>
                <th>Preço</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $bebidas = [
                [
                    'foto'=>'png/refri2l.jpg',
                    'nome'=>'Refrigerante 2 Litros',
                    'sabores'=>'Coca-Cola, Fanta Uva/Laranja, Sprite, Guaraná',
                    'preco'=>'R$12,00'
                ],
                [
                    'foto'=>'png/refri_latas.jpg',
                    'nome'=>'Refrigerante Lata',
                    'sabores'=>'Coca-Cola, Fanta Uva/Laranja, Sprite, Guaraná',
                    'preco'=>'R$5,00'
                ],
                [
                    'foto'=>'png/suco1l.webp',
                    'nome'=>'Suco Natural 1 Litro',
                    'sabores'=>'Laranja, Maracujá, Melancia, Abacaxi, Limão',
                    'preco'=>'R$10,00'
                ],
                [
                    'foto'=>'png/sucolata.webp',
                    'nome'=>'Suco Lata',
                    'sabores'=>'Laranja, Maracujá, Pêssego, Goiaba, Uva',
                    'preco'=>'R$6,00'
                ],
            ];

            foreach ($bebidas as $item) {
                echo "<tr>
                        <td><img src='{$item['foto']}'></td>
                        <td class='pizza-nome'>{$item['nome']}</td>
                        <td>{$item['sabores']}</td>
                        <td class='preco'>{$item['preco']}</td>
                    </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

</div>

<!-- rodapé -->
<section class="rodape">
    <div class="container-xl">
        <div class="row" style="font-size: medium">
            <div class="col">
                <i class="bi bi-signpost-2"></i> Av. São Paulo 390 - Itu/SP
            </div>
            <div class="col">
                <i class="bi bi-envelope-at"></i> lanches.br@hotmail.com<br>
                <i class="bi bi-whatsapp"></i> (12) 3456 -7890
            </div>
            <div class="col-2 align-items-right">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-threads"></i>
                <i class="bi bi-twitter"></i>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
