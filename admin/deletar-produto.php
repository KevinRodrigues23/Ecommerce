<?php
require '../assets/includes/config.php';
require '../assets/includes/Produto.php';

if($_SERVER['REQUEST_METHOD'] === 'POST');
$produto = new produto($mysql);
$produto->deletar($_GET['id']);

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
        <div class="card text-center">
        <h2> REALMENTE DESEJA DELETAR ESTE PRODUTO ?</h2>  
        <form method="POST" action="lista-produto.php">
        <div class="template-demo mt-4">
                        <input type="hidden"  class="btn btn-danger btn-lg" name="id_produto" value="<?php echo $_GET['id'];?>" ?/>
                        <button type="submit" class="btn btn-danger btn-lg">SIM</button>
        </form>
        </div>
        </div>
             
                
              </div>
            </div>
          </div>