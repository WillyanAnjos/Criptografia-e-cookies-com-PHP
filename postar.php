<?php
	//Valida se o usuário estar logado
    require 'validar.php';
	
	
	//Mostra na página as informações do usuário
    echo $_COOKIE['nome_user'];
    echo '<br>';
    echo $_POST['txt_titulo'];
    echo '<br>';
    echo $_POST['txt_pos'];

	
    header("Location: ".$_SERVER['HTTP_REFERER']."");

?>