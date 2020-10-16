<?php
	
	//Sai da página e zera o cookie
    setcookie("nome_user", "");
    setcookie("senha_user", "");
    header('Location: index.html');

?>