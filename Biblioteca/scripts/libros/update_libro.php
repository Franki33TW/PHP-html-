<?php
function camposAObject(){
        $resultado= array();
        $update = "UPDATE libros SET ";
        if($_POST["titulo"]){
            $resultado["titulo"] = $_POST["titulo"];
            $update .= "titulo=:titulo,";
        }
        if($_POST["tema"]){
            $resultado["tema"] = $_POST["tema"];
            $update .= "tema=:tema,";
        }
        if($_POST["n_pag"]){
            $resultado["n_pag"] = $_POST["n_pag"];
            $update .= "n_pag=:n_pag,";
        }
        if($_POST["prestado"]){
            $resultado["prestado"] = $_POST["prestado"];
            $update .= "prestado=:prestado,";
        }
        if($_POST["fecha"]){
            $resultado["fecha_ult_res"] = $_POST["fecha"];
            $update .= "fecha_ult_res=:fecha_ult_res";
            
        }
        $resultado["id"] = $_POST["id"];
        if($update[strlen($update)-1] ==','){
            $update = substr($update, 0, strlen($update)-1);
        }
        $update .= " WHERE id=:id";
        return [$resultado, $update];
    }


    
    if (isset($_POST['actualizar_libro'])) {
      if($_POST ['id']){
        $resultado = [
          'error' => false,
          'mensaje' => 'Se ha actualizado el autor con éxito'
        ];

    
        include '../../scripts/conexion_DB.php';

        try {
            $conexion = conectar_DB();
            
            $libro = camposAObject()[0];
            $update= camposAObject()[1];
          
            $sentencia = $conexion->prepare($update);
            $sentencia->execute($libro);
        } catch(PDOException $error) {
          $resultado['error'] = true;
          $resultado['mensaje'] = $error->getMessage();
        }
      }else{
        $resultado = [
          'error' => true,
          'mensaje' => 'El id es obligatorio para poder actualizar un autor'
        ];
      }
      
    }
    ?>
    
    <?php include "../../templates/header.php"; ?>
    
    <?php
    if (isset($resultado)) {
    ?>
      <div class="container mt-3">
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-<?= $resultado['error'] ? 'danger' : 'success' ?>" role="alert">
              <?= $resultado['mensaje'] ?>
            </div>
          </div>
        </div>
      </div>
      <a class="btn btn-primary" href="../../index.php">Volver al index</a>
    <?php
    }
    ?>
<?php include "../../templates/footer.php"; ?>
    
