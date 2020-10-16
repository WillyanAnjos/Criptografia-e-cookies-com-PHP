<?php

//Valida se o usuário estar logado
    include 'validar.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Painel</title>
    </head>
    <body>
        <form action="logout.php">
            <input type="submit" value="Sair">
            <input type="button" onClick="novaPostagem()" value="Nova Postagem">
        </form>
    </body>
    
    <script>
	//Chama a página de nova postagem
        function novaPostagem(){
            window.location.href = 'nova.html';
        }
    </script>

</html>