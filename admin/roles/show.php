<?php
    $id_rol = $_GET['id'];

    include('../../app/config.php');
    include ('../../admin/layout/parte1.php');
    include ('../../app/controllers/roles/datos_del_rol.php');
    
?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
          <h1>Rol: <?=$nombre_rol;?></h1>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="card card-outline card-info">
                  <div class="card-header">
                      <h3 class="card-title">Datos Regitrados</h3>
                  </div>
                  <div class="card-body">
                      <form action="<?=APP_URL?>/app/controllers/roles/create.php" method="post">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="">Nombre del rol</label>
                                      <p class=""><?=$nombre_rol;?></p>                          
                                  </div>
                              </div>
                          </div>
                          <hr>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <a href="<?=APP_URL?>/admin/roles" class="btn btn-secondary " type="submit">Volver</a>
                                  </div>
                              </div>
                          </div>                               
                      </form>                     
                  <!-- /.card-body -->
                  </div>
              </div>
          </div>
      </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

<?php 
  include('../../admin/layout/parte2.php'); 
  include('../../layout/mensajes.php'); 
?>