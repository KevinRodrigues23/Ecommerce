<?php
require '../assets/includes/config.php';
require '../assets/includes/Produto.php';

$produto = new produto($mysql);
$produtos = $produto->exibirTodos();
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
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
               
              </div>
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lista de Produtos</h4>
                    <p class="card-description"> [categorias] <code>.[opção]</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                        
                          <tr>
                            <th>id </th>
                            <th> imagem </th>
                            <th> nome do produto </th>
                            <th> preço do produto </th>
                            <th>Quanitdade</th>
                            <th> Editar/Deletar </th>
                          </tr>

                         
                        </thead>
                        <tbody>
                            <?php foreach($produtos as $prod) : ?>
                          
                            <td>
                          
                            </td>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                            </td>
                            <td> <?php echo $prod['titulo_produto'];?> </td>
                            <td>
                            <span>R$:</span><?php echo $prod['preco_produto'];?><span>,00</span>
                            </td>
                            <td> <?php echo $prod['quantidade_produto'];?></td>
                            <td class="p-1"> 
                        
                            <a href="editar-produto.php?id=<?php echo $prod['id_produto']; ?>"><button type="button"  class="btn btn-outline-secondary btn-icon-text">Editar <i class="mdi mdi-file-check btn-icon-append"></i>
                            </button></a>

                            <a href="deletar-produto.php?id=<?php echo $prod['id_produto'] ?>"><button type="button" class="btn btn-outline-success btn-icon-text">
                            <i class="mdi mdi-alert btn-icon-prepend"></i> Deletar
                            </button></a>
                           
                            </td>
                          </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
             
                
              </div>
            </div>
          </div>

</hmlt>

