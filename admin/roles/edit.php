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
          <h1>Editar el Rol: <?=$nombre_rol;?></h1>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="card card-outline card-success">
                  <div class="card-header">
                      <h3 class="card-title">Datos Regitrados</h3>
                  </div>
                  <div class="card-body">
                      <form action="<?=APP_URL?>/app/controllers/roles/update.php" method="post" >
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="">Nombre del rol</label>
                                      <input type="text" value="<?= $id_rol; ?>" hidden name="id_rol">
                                      <input type="text" class="form-control" value="<?= $nombre_rol; ?>" name="nombre_rol">                         
                                  </div>
                              </div>
                          </div>
                          <hr>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                  <button class="btn btn-success " type="submit">Actualizar</button>
                                      <a href="<?=APP_URL?>/admin/roles" class="btn btn-secondary " type="submit">Cancelar</a>
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