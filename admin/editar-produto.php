<?php 

require '../assets/includes/config.php';
require '../assets/includes/Produto.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $produto = new produto($mysql);
    $produto->editar($_POST["id"],$_POST["titulo_produto"],$_POST["preco_produto"],$_POST["tamanho_produto"],$_POST["marcar_produto"]
    ,$_POST["cor_produto"], $_POST["quantidade_produto"],$_POST["descricao_produto"], $_POST["especificacao_produto"],
    $_POST["imagem_produto"]);
}


$produto = new produto($mysql);
$prod = $produto->encontrarPorId($_GET['id']);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CyberAmerican</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.php -->
      

    <?php 
    include('assets/include/sidebar.php');    
    ?>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

        <?php 
    include('assets/include/navbar.php');    
    ?>
        

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Editar produto</h4>
                
                    <form action="editar-produto.php" method="POST" class="forms-sample">

                    <div class="form-group">
                    <div class="form-group d-flex justify-content-around p-1">
                    <img src="assets/images/faces/face10.jpg" class="rounded text-center" alt="...">
                    <img src="assets/images/faces/face10.jpg" class="rounded text-center" alt="...">
                    <img src="assets/images/faces/face10.jpg" class="rounded text-center" alt="...">
                    <img src="assets/images/faces/face10.jpg" class="rounded text-center" alt="...">
                
                    </div>
                    </div>
                    

                    <div class="form-group mt-2">
                        <label>adicionar foto</label>
                        <input type="file" name="imagem_produto" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info"  placeholder="Upload Image">
                          <span class="input-group-append">
                            <button type="file"  class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>



                    </div>


                      <div class="form-group">
                        <label for="exampleInputUsername1">Titulo do produto</label>
                        <input type="text" name="titulo_produto" class="form-control" id="exampleInputUsername1" placeholder="Nome do produto" value="<?php echo $prod['titulo_produto'];?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">preco do produto</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-primary text-white">R$:</span>
                              <input type="text" name="preco_produto" class="form-control" value="<?php echo $prod['preco_produto'];?>">
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">,00</span>
                            </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Tamanho do produto</label>
                        <input type="text" name="tamanho_produto" class="form-control" id="exampleInputPassword1" placeholder="Tamanho do produto " value="<?php echo $prod['tamanho_produto'];?>">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Marcar do produto</label>
                        <input type="text" name="marcar_produto" class="form-control" id="exampleInputConfirmPassword1" placeholder="Marcar do produto" value="<?php echo $prod['marcar_produto'];?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">cor do produto</label>
                        <input type="text" name="cor_produto" class="form-control" id="exampleInputConfirmPassword1" placeholder="Cor do produto" value="<?php echo $prod['cor_produto'];?>">
                      </div>

                      <div class="form-group">
                        <label for="exampleInput">Quantidade dos produtos</label>
                        <input type="text" name="quantidade_produto" class="form-control"  placeholder="Quantidade" value="<?php echo $prod['quantidade_produto'];?>"></input>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInput">Categórias</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                                  <option>mulheres</option>
                                  <option>Homens</option>
                                  <option>Crianças</option>
                                  <option>Vestido</option>
                                  <option>Camisa</option>
                                </select>
                          </div>
                      </div>
                     
                     
                      <div class="form-group">
                        <label for="exampleInput">Descrição do produto</label>
                        <textarea type="text" name="descricao_produto" class="form-control"  placeholder="descrição do produto" id="story" name="story"
          rows="5" cols="33"value="<?php echo $prod['descricao_produto'];?>"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Especificação do produto</label>
                        <textarea type="text" name="especificacao_produto" class="form-control" id="exampleInputConfirmPassword1" placeholder="Especificação de produto" id="story" name="story"
                        rows="5" cols="33" value="<?php echo $prod['especificacao_produto'];?>"></textarea>
                      </div>

                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Enviar</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              </div>
            </div>
            
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
             
             
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>