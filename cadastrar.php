<?php
	
	//Método para receber o nome e a senha
    if($_POST['nome']){
        if($_POST['senha']){
            $nome = $_POST['nome'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
			//Seta o cookie com o nome e senha e abre a página
            setcookie("nome_user", $nome);
            setcookie("senha_user", $senha);
            header('Location: recuperar.php');
        }
    }else{
		//volta ao index
        header('Location: index.html');
    }



?>