<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>

<body>
    <pre>
        <?php
        require_once "Pessoa.php";
        require_once "Professor.php";
        require_once "Aluno.php";
        require_once "Funcionario.php";

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Cláudio");
        $p4->setNome("Fabiana");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        ?>
    </pre>
</body>

</html>