<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BDE</title>
    <style>
        /* Estilo geral da página */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e8efff; /* Tom suave de azul */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Container principal */
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
            text-align: center;
        }

        /* Título */
        h1 {
            font-size: 2rem;
            color: #6a4c9c; /* Tom de roxo */
            margin-bottom: 20px;
            font-weight: 600;
        }

        /* Estilo da tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
        }

        /* Cabeçalho da tabela */
        th {
            background-color: #4f73a1; /* Azul suave */
            color: white;
            padding: 15px;
            font-size: 1.1rem;
            text-align: left;
        }

        /* Corpo da tabela */
        td {
            padding: 12px 15px;
            border-bottom: 1px solid #e0e0e0;
            font-size: 1rem;
            background-color: #f7f9ff; /* Fundo suave para as células */
        }

        /* Linha de hover na tabela */
        tr:hover {
            background-color: #d3d9f7; /* Cor mais clara ao passar o mouse */
        }

        /* Estilo do parágrafo */
        p {
            font-size: 1rem;
            color: #555;
            margin-top: 20px;
        }

        /* Botão (se houver algum botão no futuro) */
        .btn {
            background-color: #6a4c9c; /* Tom de roxo */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #5a3f8d; /* Tom mais escuro de roxo */
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>BDE - Listagem de Disciplinas</h1>

        <?php
            require_once('conn.php');

            $sql = mysqli_query($conn, "SELECT * FROM tbdisciplina");

            while ($linha = mysqli_fetch_array($sql)) {
                $id = $linha['idDisciplina'];
                $nome = $linha['nomeDisciplina'];
                $cargoHoraria = $linha['cargoHoraria'];

                echo "<p>";
                echo "<table>";
                echo "<tr><th>Código da Disciplina:</th><td>$id</td></tr>";
                echo "<tr><th>Nome da Disciplina:</th><td>$nome</td></tr>";
                echo "<tr><th>Cargo Horária:</th><td>$cargoHoraria</td></tr>";
                echo "</table>";
                echo "<br><br>";
            }
        ?>
    </div>

</body>
</html>