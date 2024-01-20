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
    
        

    ?>

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
            "status"=> "lendo"
            ],
        ];

        // FILTRO FLEXÍVEL

        function filter($itens, $fn) {
            $itensFiltrados = [];

            foreach ($itens as $item) {
                if ($fn($item)){
                    $itensFiltrados[] = $item;
                }
            }
            return $itensFiltrados;
        }

        $livrosFiltrados = filter($biblioteca, function($livro) {
            return $livro['status'] != "lendo";
        })

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
        <?php foreach ($livrosFiltrados as $livro) : ?>
            <tr>
                <td><?= "{$livro['titulo']}" ?></td>
                <td><?= "{$livro['autor']}" ?></td>
                <td><?= "{$livro['status']}" ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>