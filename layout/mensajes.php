<?php
      if ((isset($_SESSION['mensaje'])) && (isset($_SESSION['icono']))) {
        $mensaje = $_SESSION['mensaje'];
        $icono = $_SESSION['icono'];
        ?>
        <script>
          let mensaje = '<?php echo $mensaje; ?>'
            Swal.fire({
              position: "top",
              icon: "<?php echo $icono;?>",
              title: "<?php echo $mensaje; ?>",
              showConfirmButton: false,
              timer: 4000
            });
        </script>
    <?php
    unset($_SESSION['mensaje']);
    unset($_SESSION['icono']);
      }
?>