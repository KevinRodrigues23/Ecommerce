<?php 
 



password_hash(123456, PASSWORD_DEFAULT);
?>











<!DOCTYPE html>
<html lang="pt-br">







<head>
    <title>CyberAmerican Ecommerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>
<?php 

include("assets/includes/header.php");
?>


</head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4 p-5 shadow-sm border rounded-3">
<?php

            $mysql = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($mysql['SendLogin'])){
var_dump($mysql);

}







?>
                <h2 class="text-center mb-4 text-primary">Login</h2>
                <form action="" method="POST" >
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">cpf</label>
                            <input type="text" name="nome_cliente"class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" name="senha_cliente"class="form-control border border-primary" id="exampleInputPassword1">
                        </div>
                        <p class="small"><a class="text-primary" href="forget-password.html">esqueceu a senha?</a></p>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit" name="SendLogin">Login</button>
                        </div>
                </form>
                <div class="mt-3">
                    <p class="mb-0  text-center">não tenho uma conta? <a href="register.php"
                            class="text-primary fw-bold">Cadastrar agora
                    </a></p>
                </div>
            </div>
        </div>

<?php 

include("assets/includes/footer.php");

?>
        
    </body>

</html>


