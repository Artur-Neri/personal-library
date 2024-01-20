<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body style="display: grid;place-items: center; height: 100vh; margin: 0; font-family:sans-serif;">

    <?php 
        $tituloMeuAcervo = "Acervo do Art";

        $biblioteca = [
            ["titulo"=> "pai rico, pai pobre",
            "autor"=> "robert kiyosaki",
            "status"=> "lido"
            ],
            
            ["titulo"=> "comece pelo porquê",
            "autor"=> "simon sinek",
            "status"=> "lendo"
            ],
            ["titulo"=> "não me faça pensar",
            "autor"=> "autor br",
            "status"=> "não lido"
            ],
        ]
    ?>
    <h1 id="tituloPagina">
       <?= $tituloMeuAcervo ?>
    </h1>

    <table>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Status</th>
        </tr>
        <?php foreach ($biblioteca as $livro) : ?>
            <tr>
                <td><?= "{$livro['titulo']}" ?></td>
                <td><?= "{$livro['autor']}" ?></td>
                <td><?= "{$livro['status']}" ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>