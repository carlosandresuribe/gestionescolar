<?php
    include('../../app/config.php');
    include ('../../admin/layout/parte1.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <div class="content">
      <div class="container">
        <div class="row">
            <h1>Creación de un nuevo rol</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Ingrese los datos</h3>

                    </div>
                    <div class="card-body">
                        <form action="<?=APP_URL?>/app/controllers/roles/create.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Nombre del rol</label>
                                        <input class="form-control" type="text" name="nombre_rol" id="" required>                            
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary " type="submit">Registrar</button>
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