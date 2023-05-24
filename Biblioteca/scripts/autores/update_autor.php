<?php
function camposAObject(){
        $resultado= array();
        $update = "UPDATE autores SET ";
        if($_POST["nombre"]){
            $resultado["nombre"] = $_POST["nombre"];
            $update .= "nombre=:nombre,";
        }
        if($_POST["apellidos"]){
            $resultado["apellidos"] = $_POST["apellidos"];
            $update .= "apellidos=:apellidos,";
        }
        if($_POST["dni"]){
            $resultado["dni"] = $_POST["dni"];
            $update .= "dni=:dni,";
        }
        if($_POST["tema1"]){
            $resultado["tema1"] = $_POST["tema1"];
            $update .= "tema1=:tema1,";
        }
        if($_POST["tema2"]){
            $resultado["tema2"] = $_POST["tema2"];
            $update .= "tema2=:tema2";
            
        }
        $resultado["id"] = $_POST["id"];
        if($update[strlen($update)-1] ==','){
            $update = substr($update, 0, strlen($update)-1);
        }
        $update .= " WHERE id=:id";
        return [$resultado, $update];
    }


    
    if (isset($_POST['actualizar_autor'])) {
      if($_POST ['id']){
        $resultado = [
          'error' => false,
          'mensaje' => 'Se ha actualizado el autor con éxito'
        ];

    
        include '../../scripts/conexion_DB.php';

        try {
            $conexion = conectar_DB();
            
            $autor = camposAObject()[0];
            $update= camposAObject()[1];
          
            $sentencia = $conexion->prepare($update);
            $sentencia->execute($autor);
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
    
