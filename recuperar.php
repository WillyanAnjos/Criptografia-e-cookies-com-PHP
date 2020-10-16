<?php
    if(isset($_COOKIE['nome_user'])){
        if($_COOKIE['nome_user']){
            if(password_verify("12345", $_COOKIE['senha_user'])){
                header('Location: painel.php');
            }else{
                header('Location: index.html');
            }
        } else{
            header('Location: index.html');
        }
    }else{
        header('Location: index.html');
    }
?>