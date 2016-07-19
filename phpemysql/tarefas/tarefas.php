<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Genrenciador de Tarefas</title>
        <style type="text/css" media="all">
            * {
                font-family: "Segoe UI Light";
            }

            table {
                margin: 10px 0 0 0;
            }

            tr td {
                border: 1px solid;
            }

            input[type=text], input[type=submit] {
                border-radius: 5px;
                border: 1px solid #CCCCCC;
            }

            input[type=submit] {
                color: #737373;
            }

            fieldset {
                border: 1px solid #737373;
                border-radius: 5px;
                padding: 10px;
            }

            legend {
                color: #00b32d;
            }
        </style>
    </head>
    <body>
        <form>
            <fieldset>
                <legend>Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome"/>
                </label>
                <input type="submit" value="Cadastrar"/>
            </fieldset>
        </form>
        <?php

        if (isset($_GET['nome'])) {
            $_SESSION['lista_tarefas'][] = $_GET['nome'];
        }
        $lista_tarefas = array();
        if (isset($_SESSION['lista_tarefas'])) {
            $lista_tarefas = $_SESSION['lista_tarefas'];
        }

        ?>
        <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <th>Tarefas</th>
            </tr>
            <?php foreach ($lista_tarefas as $tarefa): ?>
                <tr>
                    <td><?php echo $tarefa; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>