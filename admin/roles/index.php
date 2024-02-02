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
            <h1>Listado de Roles</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Roles registrados</h3>
                        <div class="card-tools">
                            <a
                                name=""
                                id=""
                                class="btn btn-info"
                                href="create.php"
                                role="button"
                                ><i class="nav-icon bi bi-plus-square"></i> Crear nuevo rol</a
                            >
                            
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $contador_rol = 0;

                            foreach ($roles as $rol) { 
                                $contador_rol = $contador_rol +1;
                            ;?>                       
                            
                                <tr class="">
                                    <td scope="row"><?=$contador_rol;?></td>
                                    <td><?=$rol['nombre_rol'];?></td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-info">
                                            <i class="nav-icon bi bi-eye"></i> 
                                            </button>
                                            <button type="button" class="btn btn-sm btn-success">
                                            <i class="nav-icon bi bi-pencil"></i> 
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger">
                                            <i class="nav-icon bi bi-trash"></i> 
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php };?>
                            </tbody>
                        </table>                    
                    </div>
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