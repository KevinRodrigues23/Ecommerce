
<?php 

include("assets/includes/header.php");
?>


</head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center mt-5 mb-5">
            <div class="col-md-4 p-5 shadow-sm border rounded-3">
                <h2 class="text-center mb-9 text-primary">Cadastro</h2>
                <form action="" method="POST" >
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                            <input type="text" name="nome_cliente" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Cpf</label>
                            <input type="number" name="cpf_cliente" class="form-control border border-primary" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Sexo</label>
                            <input type="text" name="sexo_cliente"class="form-control border border-primary" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Data de nascimento</label>
                            <input type="date" class="form-control border border-primary" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" name="senha_cliente" class="form-control border border-primary" id="exampleInputPassword1" required>
                        </div>
                        <p class="small"><a class="text-primary" href="forget-password.html">Esqueceu a senha?</a></p>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary" type="submit">Login</button>
                        </div>
                </form>
                <div class="mt-3">
                    <p class="mb-0  text-center">tenho uma conta! <a href="login.php"
                            class="text-primary fw-bold">login
                            </a></p>
                </div>
            </div>
        </div>

<?php 

include("assets/includes/footer.php");

?>
        
    </body>

</html>


