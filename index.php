<?php
    $login_cookie = $_COOKIE['login'];

        if (isset($login_cookie)){
            echo "Seja Bem-vindo, $login_cookie <br>";
            echo "Essas informações <font color='red'>PODEM</font> ser acessadas por você";
        }else {
            echo "Seja Bem-vindo, convidado <br>";
            echo "Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
            echo "<br><a href='login.html'>Faça login</a> Para ler o conteúdo";
        }

?>
