<?php
    include('../../app/config.php');
    include ('../../admin/layout/parte1.php');
    include ('../../app/controllers/usuarios/listado_de_usuarios.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <div class="content">
      <div class="container">
        <div class="row">
            <h1>Listado de Usuarios</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Usuarios registrados</h3>
                        <div class="card-tools">
                            <a name=""
                                id=""
                                class="btn btn-primary"
                                href="create.php"
                                role="button"
                                ><i class="nav-icon bi bi-plus-square"></i> Crear nuevo usuario
                            </a>                            
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nombre de usuario</th>
                                    <th scope="col">Rol ID</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Fecha Creación</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $contador_usuarios = 0;

                            foreach ($usuarios as $usuario) { 
                                $id_usuario = $usuario['id_usuarios'];
                                $contador_usuarios = $contador_usuarios +1;
                            ;?>                       
                            
                                <tr class="">
                                    <td scope="row"><?=$contador_usuarios;?></td>
                                    <td><?=$usuario['nombres'];?></td>
                                    <td><?=$usuario['nombre_rol'];?></td>
                                    <td><?=$usuario['email'];?></td>
                                    <td><?=$usuario['fyh_creacion'];?></td>
                                    <td><?=$usuario['estado'];?></td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="show.php?id=<?= $id_usuario;?>" type="button" class="btn btn-sm btn-info">
                                            <i class="nav-icon bi bi-eye"></i> 
                                            </a>
                                            <a href="edit.php?id=<?= $id_usuario;?>" type="button" class="btn btn-sm btn-success">
                                            <i class="nav-icon bi bi-pencil"></i> 
                                            </a>
                                            <form id="miformulario<?=$id_usuario?>" action="<?= APP_URL;?>/app/controllers/roles/delete.php" onclick="preguntar(event)" method="post" >
                                              <input type="text" name="id_usuario" id="" value="<?= $id_usuario;?>" hidden>
                                              <button type="submit" class="btn btn-sm btn-danger ">
                                            <i class="nav-icon bi bi-trash"></i> 
                                            </button>
                                            </form>
                                            <script>
                                              function preguntar(event) {
                                                event.preventDefault();
                                                Swal.fire({
                                                  title: "Eliminar usuario?",
                                                  text:"Desea eliminar este usuario?",
                                                  icon: 'question',
                                                  showDenyButton: true,
                                                  confirmButtonText: "Eliminar",
                                                  confirmButtonColor: "#a5161d",
                                                  denyButtonColor: "#270a0a",
                                                  denyButtonText: `Cancelar`
                                                }).then((result) => {
                                                  if (result.isConfirmed) {
                                                    let  form = $('#miformulario<?=$id_usuario?>');
                                                  form.submit()
                                                    Swal.fire("Eliminado", "se elimino el usuario", "success");
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
        "language":{
            "emptyTable":"No hay información",
            "info":"Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
            "infoEmpty":"Mostrando 0 to 0 of 0 Usuarios",
            "infoFiltered":"(Filtrado de _MAX_ total Usuarios)",
            "infoPostFix":"",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Usuarios",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
             "paginate": {
               "first": "Primero",
               "last": "Último",
               "next": "Siguiente",
               "previous": "Anterior"
             }
        },
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [{
        extend:'collection',
        text:'Reportes',
        orientation:'landscape',
        buttons:[{
            text:'Copiar',
            extend:'copy',
      },{
        extend:'pdf'
      },{
        extend:'csv'
      },{
        extend:'excel'
      },{
        text:'Imprimir',
        extend:'print'
      }]
      },
      {
        extend:'colvis',
        text:'Visor de columnas',
        collectionLayout:'fixed-three-column'
      }
      ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>