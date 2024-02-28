<?php
    include('../../app/config.php');
    include ('../../admin/layout/parte1.php');
    include ('../../app/controllers/roles/listado_de_roles.php');
?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
          <h1>Creación de un nuevo Usuario</h1>
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="card card-outline card-primary">
                  <div class="card-header">
                      <h3 class="card-title">Ingrese los datos</h3>
                  </div>
                  <div class="card-body">
                      <form action="<?=APP_URL?>/app/controllers/usuarios/create.php" method="post">
                          <div class="row">
                              <div class="col-md-4">                                
                                  <div class="form-group">
                                      <label for="">Nombre del Rol</label>   
                                      <div class="form-inline">                                   
                                        <select name="rol_id" id="" class="form-control">
                                        <?php foreach($roles as $rol) {;?>
                                            <option value="<?= $rol['id_rol'];?>"><?= $rol['nombre_rol'];?></option>
                                        <?php };?>
                                        </select>                       
                                        <a href="<?=APP_URL;?>/admin/roles/create.php" style="margin-left: 5px;" class="btn btn-primary"><i class="bi bi-file-plus"></i></a>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nombres de Usuario</label>
                                    <input type="text" name="nombres" class="form-control" required>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Repetir Password</label>
                                    <input type="password" name="password_repeat"class="form-control" required>
                                </div>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <button class="btn btn-primary " type="submit">Registrar</button>
                                      <a href="<?=APP_URL?>/admin/usuarios" class="btn btn-secondary " type="submit">Cancelar</a>
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