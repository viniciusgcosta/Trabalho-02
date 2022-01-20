<?php
    $login = $_POST['login'];
    $acessar = $_POST['acessar'];
    $senha = md5($_POST['senha']);
    $connect = mysql_connect('localhost', 'root', 'senha');
    $db = mysql_select_db ('cadastrologin');

    if (isset($acessar)){
        $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha='$senha'")
        or die ("Erro ao selecionar os dados no banco");

        if (mysql_num_rows($verifica) <= 0){
            echo "<script langue='javascript' type='text/javascript'>
            alert('Login e/ou senha incorreto(s)'); 
            href='login.html';</script>";

        }else{
            setcookie ("login", $login);
            header ("Location: index.php")

        }

    }


?>