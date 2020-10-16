<?php
		//Valida se existe o cookie do usuário
        if(!$_COOKIE['nome_user']){
            if(!password_verify("12345", $_COOKIE['senha_user'])){
                header('Location: index.html');
            }
        }
    
?>