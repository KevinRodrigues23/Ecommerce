<?php 
session_start();

if(isset($_GET['remover']) && $_GET['remover'] == "carrinho")
{
    $_id_produto = $_GET['id'];
    unset($_SESSION['itens'][$_id_produto]);
    echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=carrinho.php"/>';
}


?>