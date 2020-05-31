<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Youtube</title>
</head>
<body>
    <pre>
        <?php
        require_once "Video.php";
        require_once "Gafanhoto.php";
        require_once "Visualizacao.php";

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Ganhafoto("Jubileu", 22, "M", "juba");
        $g[1] = new Ganhafoto("Creusa", 12, "F", "creuzita");

        $vis[0] = new Visualizacao($g[0], $v[2]);

        print_r($vis);
        ?>
    </pre>
</body>
</html>