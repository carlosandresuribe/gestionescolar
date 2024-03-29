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
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Roles registrados</h3>
                        <div class="card-tools">
                            <a name=""
                                id=""
                                class="btn btn-info"
                                href="create.php"
                                role="button"
                                ><i class="nav-icon bi bi-plus-square"></i> Crear nuevo rol
                            </a>                            
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped table-bordered table-hover ">
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
                                $id_rol = $rol['id_rol'];
                                $contador_rol = $contador_rol +1;
                            ;?>                       
                            
                                <tr class="">
                                    <td scope="row"><?=$contador_rol;?></td>
                                    <td><?=$rol['nombre_rol'];?></td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="show.php?id=<?= $id_rol;?>" type="button" class="btn btn-sm btn-info">
                                            <i class="nav-icon bi bi-eye"></i> 
                                            </a>
                                            <a href="edit.php?id=<?= $id_rol;?>" type="button" class="btn btn-sm btn-success">
                                            <i class="nav-icon bi bi-pencil"></i> 
                                            </a>
                                            <form id="miformulario<?=$id_rol?>" action="<?= APP_URL;?>/app/controllers/roles/delete.php" onclick="preguntar(event)" method="post" >
                                              <input type="text" name="id_rol" id="" value="<?= $id_rol;?>" hidden>
                                              <button type="submit" class="btn btn-sm btn-danger ">
                                            <i class="nav-icon bi bi-trash"></i> 
                                            </button>
                                            </form>
                                            <script>
                                              function preguntar(event) {
                                                event.preventDefault();
                                                Swal.fire({
                                                  title: "Eliminar Registro?",
                                                  text:"Desea eliminar este registro?",
                                                  icon: 'question',
                                                  showDenyButton: true,
                                                  confirmButtonText: "Eliminar",
                                                  confirmButtonColor: "#a5161d",
                                                  denyButtonColor: "#270a0a",
                                                  denyButtonText: `Cancelar`
                                                }).then((result) => {
                                                  if (result.isConfirmed) {
                                                    let  form = $('#miformulario<?=$id_rol?>');
                                                  form.submit()
                                                    Swal.fire("Eliminado", "se elimino el registro", "success");
                                                  }
                                                });
                                              }
                                            </script>                                            
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

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
        "pageLength":5,
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>