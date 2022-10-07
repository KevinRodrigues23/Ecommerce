
<?php 


?>


<head>
    <title>CyberAmerican / Carrinho</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/templatemo.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
</head>
<?php include'header.php';?>
<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Remover</th>
            <th scope="col">Total</th>
          </tr>
        
        <tbody>


<?php




    if(!isset($_SESSION['itens']))
    {

        $_SESSION['itens'] = array();
    }

    if(isset($_GET['add']) && $_GET['add'] == "carrinho")
    {
        $id_produto = $_GET['id'];
        if(!isset($_SESSION['itens'][$id_produto]))
        {
           $_SESSION['itens'][$id_produto] = 1;
        } else {
            $_SESSION['itens'][$id_produto] += 1;
        }
    }



    if(count($_SESSION['itens'])== 0){
       echo  
       
       '<script> window.alert("Ops, Adicioner o produto no carrinho de comprar");</script>
       <script> window.location.replace("../../shop.php"); </script> 
       ';
        
    } else {
        $conexao= new PDO("mysql:host=localhost;dbname=cyberamerican", "root", ""); 
        
        foreach($_SESSION['itens'] as $id_produto => $quantidade_produto )
    {
        $select = $conexao->prepare("SELECT * FROM produtos WHERE id_produto=?");
        $select->bindParam(1,$id_produto);
        $select->execute();
        $produtos = $select->fetchAll();
        $total = ($quantidade_produto * $produtos[0]["preco_produto"]);
        ($totalCompletotal = $totalProduto += $total);
        
        echo 

       '
          <tr>
            <th scope="row"> 
            <td>'  . $produtos[0]["titulo_produto"].'</td>
            <td> ' . number_format($produtos[0]["preco_produto"],2,",",".").'</td>
            <td> ' .$quantidade_produto.'</td>
            <td> <a  class="btn btn-danger"href="remover.php?remover=carrinho&id='.$id_produto.'">remover</a></td>
            <td>'.number_format($total,2,",",".").' </td>
          </tr>';

    

        
    }

}
?>

          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">R$: <?php echo number_format($total,2,",",".");?> </th>
          </tr>
        </tbody>
    </thead>
</table>

<div class="card-group text-center m-2">

    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Digite seu Cep:" aria-label="First name">
        </div>
        <div class="col">
            <button name="submit" type="submit" class="btn btn-success btn-lg px-3">Buscar</button>
        </div>
    </div>
  
    <div class="col">
    
    </div>
    <div class="col">
    <button name="submit" type="submit" class="btn btn-success btn-lg px-3">Finalizar</button>
    </div>
 
</div>


       
<?php include'footer.php';?>




    <!-- Start Script -->
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../js/jquery-migrate-1.2.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/templatemo.js"></script>
    <script src="../js/custom.js"></script>
    <!-- End Script -->


          

