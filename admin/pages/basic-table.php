
<?php 
require '../../assets/includes/config.php';
include '../../assets/includes/boxMessage.php';
$boxMessage = new boxMessage($mysql);
$boxMessages = $boxMessage->exibirTodos();
?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CyberAmerican</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    
  <div class="container-scroller">
    <?php 
    include('include/sidebar.php'); 
    ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
     

        <?php 
    include('include/navbar.php');    
    ?>
    
    
        <!-- partial -->
        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
              
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead >
                          <tr>
                          <th>id</th>
                            <th> Nome </th>
                            <th> Email</th>
                            <th> Objetivo </th>
                            <th>Mensagem</th>
                            
                          
                          </tr>
                        </thead>
                        
                        <tbody>
                
                        
                        <?php foreach($boxMessages as $boxMessage ) : ?>
                          <tr>
                          
                            <td>
                              <?php echo $boxMessage['id_boxMessage'];?>
                            </td>
                            <td>
                                <?php echo $boxMessage['nome_boxMessage'];?>
                            </td>
                            <td><?php echo $boxMessage['email_boxMessage'];?></td>
                            <td>
                              <?php echo $boxMessage['objetivo_boxMessage'];?>
                            </td>
                            <td>
                              <?php echo $boxMessage['message_boxMessage'];?>
                            </td>
                            
                          </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
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
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>