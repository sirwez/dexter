<?php

$banner = $_GET['banner'];
$title = "";
if($banner == 1){
    $title = "
    <div class='main-message'>O caderno de erros não está disponível em sua conta.</div>
    <div class='sub-message'>Assine um plano e estude sem limitações</div>
    ";
} else if($banner == 2){
    $title = "
<div class='main-message'>As aulas não estão disponivéis em sua conta.</div>
<div class='sub-message'>Assine um plano e estude sem limitações</div>
";
} else if($banner == 3){
    $title = "
    <div class='main-message'>Você atingiu o limite do acesso gratuito.</div>
    <div class='sub-message'>Conheça nossos planos e estude sem limitações. Ou espere 24 horas para continuar respondendo de forma limitada</div>
    ";
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .image-column {
            background-image: url('https://i.imgur.com/ouXcckA.png');
            background-size: cover;
            background-position: center;
            min-height: 400px;
            /* Ajuste conforme necessário */
        }

        .plan-card {
            background: #1a1a1a;
            color: #fff;
            margin: 10px;
            border: none;
        }

        .plan-header {
            background: #ff6600;
            color: #fff;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .start-btn {
            background-color: #ff6600;
            color: white;
            border: none;
            cursor: pointer;
        }

        .price-details {
            text-align: center;
        }

        .installments {
            font-size: 0.8rem;
            color: #ccc;
        }

        .price-value {
            font-size: 2.5rem;
            color: #fff;
        }

        .full-price {
            font-size: 1rem;
            color: #ccc;
        }

        .error-note {
            text-align: center;
            margin: 20px 0;
        }

        .error-note .main-message {
            font-size: 1.2rem;
            color: #ff6600;
            margin-bottom: 5px;
        }

        .error-note .sub-message {
            font-size: 0.9rem;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <div class="card bg-dark text-white">
            <div class="row no-gutters">

                <div class="col-md-4">
                    <div class="image-column"></div>
                </div>

                <div class="col-md-8">
                    <div class="error-note">
                        <?php echo $title; ?>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="plan-card card">
                                <div class="plan-header">PLANO ESSENCIAL</div>
                                <div class="card-body">
                                    <div class="price-details">
                                        <div class="installments">POR 12x DE</div>
                                        <div class="price-value">R$ 9,11</div>
                                        <div class="full-price">ou R$97,00 à vista</div>
                                    </div>
                                    <ul class="list-group list-group-flush mb-4">
                                        <li class="list-group-item bg-secondary">Pratique com +1 milhão de questões</li>
                                        <li class="list-group-item bg-secondary">Consulte os gabaritos dos professores
                                        </li>
                                        <li class="list-group-item bg-secondary">Crie cadernos de questões e simulados
                                        </li>
                                        <li class="list-group-item bg-secondary">Análise estatísticas de desempenho</li>
                                        <li class="list-group-item bg-secondary">Acesso ilimitado ao banco de questões
                                        </li>
                                        <li class="list-group-item bg-secondary">Pratique com +160 mil questões</li>
                                    </ul>
                                    <button class="btn start-btn btn-lg btn-block">COMEÇAR A ESTUDAR</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="plan-card card">
                                <div class="plan-header">PLANO MENTORIA</div>
                                <div class="card-body">
                                    <div class="price-details">
                                        <div class="installments">POR 12x DE</div>
                                        <div class="price-value">R$ 9,11</div>
                                        <div class="full-price">ou R$97,00 à vista</div>
                                    </div>
                                    <ul class="list-group list-group-flush mb-4">
                                        <li class="list-group-item bg-secondary">Pratique com +1 milhão de questões</li>
                                        <li class="list-group-item bg-secondary">Consulte os gabaritos dos professores
                                        </li>
                                        <li class="list-group-item bg-secondary">Crie cadernos de questões e simulados
                                        </li>
                                        <li class="list-group-item bg-secondary">Análise estatísticas de desempenho</li>
                                        <li class="list-group-item bg-secondary">Acesso ilimitado ao banco de questões
                                        </li>
                                        <li class="list-group-item bg-secondary">Pratique com +160 mil questões</li>
                                    </ul>
                                    <button class="btn start-btn btn-lg btn-block">COMEÇAR A ESTUDAR</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>
