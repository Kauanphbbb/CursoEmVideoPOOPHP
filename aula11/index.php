<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
</head>
<body>
    <pre>
        <?php
        require_once "Aluno.php";
        require_once "Bolsista.php";
        /*$v1 = new Visitante();
        $v1->setNome("Kauan");
        $v1->setIdade(18);
        $v1->setSexo("M");*/
        $al = new Aluno();
        $al->setNome("Victor");
        $al->setMatricula(111111);
        $al->setIdade(17);
        $al->setSexo("M");
        $al->setCurso("Informática");
        $al->pagarMensalidade();
        print_r($al);

        $b1 = new Bolsista();
        $b1->setMatricula(11112);
        $b1->setNome("Rian");
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->setIdade(17);
        $b1->pagarMensalidade();
        print_r($b1);
        ?>
    </pre>
</body>
</html>