<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Contatos</title>
    </head>
    <body>
        <?php

        $lista_contatos = array();
        if(isset($_GET['send'])){
            $_SESSION['lista_contatos'][] = $_GET['nome'];
            $_SESSION['lista_contatos'][] = $_GET['fone'];
            $_SESSION['lista_contatos'][] = $_GET['mail'];
        }
        if(isset($_SESSION['lista_contatos'])){
            $lista_contatos = $_SESSION['lista_contatos'];
        }

        ?>
        <form>
            <fieldset>
                <legend>Lista de Contatos</legend>
                <label>
                    Nome:
                    <input type="text" name="nome"/>
                </label>
                <label>
                    Telefone:
                    <input type="tel" name="fone"/>
                </label>
                <label>
                    E-mail:
                    <input type="email" name="mail"/>
                </label>
                <input type="submit" name="send" value="Cadastrar"/>
            </fieldset>
        </form>

        <hr/>

        <table border="1">
            <th>Contatos</th>
            <?php foreach($lista_contatos as $contato): ?>
                <tr>
                    <td><?php echo $contato; ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

    </body>
</html>