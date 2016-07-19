<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Contatos</title>
    </head>
    <body>

    <?php

    if(isset($_GET['send'])){
        setcookie('nome', $_GET['nome']);
        setcookie('fone', $_GET['fone']);
        setcookie('mail', $_GET['mail']);
    }
    var_dump($_COOKIE);
    echo "<hr>";
    ?>
        <form action="" method="">
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

<!--        <table border="1">-->
<!--            <th>Contatos</th>-->
<!--            --><?php //foreach($lista_contatos as $contato): ?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $contato; ?><!--</td>-->
<!--                </tr>-->
<!---->
<!--            --><?php //endforeach; ?>
<!--        </table>-->

    </body>
</html>