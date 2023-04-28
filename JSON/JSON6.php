<?php

$animales = [
    "perro" => [
        "id" => 1,
        "Tipo" => "Perro",
        "Nombre" => "Pascual",
        "Raza" => "Mestizo",
        "Ubicacion" => "Madrid",
        "Edad" => "5 años",
        "Imagen" => "https://i0.wp.com/blog.terranea.es/wp-content/uploads/2020/09/075-1.jpg?w=640&ssl=1"
    ],
    "gato" => [
        "id" => 2,
        "Tipo" => "Gato",
        "Nombre" => "Icaro",
        "Raza" => "Mestizo",
        "Ubicacion" => "Galicia",
        "Edad" => "2 años",
        "Imagen" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQprfYLV9KZ4n3xAAH5IEvY64CnAY16lnnvi3n6AhqFtkW1e3IWf2BE5Cne-YVJBsP7eSw&usqp=CAU"
    ]
 ];


$perro = $_POST["dato_perro"];
$gato = $_POST["dato_gato"];
$nuevo = $_POST["dato_nuevo"];
$mostrartodos = $_POST["mostrar"];

if (isset($perro)) {
    echo MostrarAnimal("perro", $animales["perro"]);
} elseif (isset($gato)) {
    echo MostrarAnimal("gato", $animales["gato"]);
} elseif (isset($nuevo)) {
    echo AddAnimal ($animales);
} elseif (isset($mostrartodos)) {
    echo MostrarTodos ($animales);
}
    
function MostrarAnimal($p, $animal){

                if ($p == "perro"){
                    return "<ul><li><b>id:</b> ".$animal["id"]."</li>
                        <li><b>Tipo:</b> ".$animal["Tipo"]."</li>
                        <li><b>Nombre:</b> ".$animal["Nombre"]."</li>
                        <li><b>Raza:</b> ".$animal["Raza"]."</li>
                        <li><b>Ubicacion:</b> ".$animal["Ubicacion"]."</li>
                        <li><b>Edad:</b> ".$animal["Edad"]."</li>
                        <li><b>Imagen:</b> 
                        <br>
                        <img src=".$animal["Imagen"]."></li>
                        </ul>"; 
                }else if($p == "gato"){
                    return "<ul><li><b>id:</b> ".$animal["id"]."</li>
                        <li><b>Tipo:</b> ".$animal["Tipo"]."</li>
                        <li><b>Nombre:</b> ".$animal["Nombre"]."</li>
                        <li><b>Raza:</b> ".$animal["Raza"]."</li>
                        <li><b>Ubicacion:</b> ".$animal["Ubicacion"]."</li>
                        <li><b>Edad:</b> ".$animal["Edad"]."</li>
                        <li><b>Imagen:</b> 
                        <br>
                        <img src=".$animal["Imagen"]."></li>
                        </ul>"; 
            } 
};

function AddAnimal (& $animales) {
            $animales["nuevo"] = [
                "id" => count($animales)+1,
                "Tipo" => $_POST["tipo"],
                "Nombre" => $_POST["nombre"],
                "Raza" => $_POST["raza"],
                "Ubicación" => $_POST["ubicación"],
                "Edad" => $_POST["edad"],
                "Imagen" => $_POST["imagen"],
            ];

            return "<ul><li><b>id:</b> ".$animales["nuevo"]["id"]."</li>
            <li><b>Tipo:</b> ".$animales["nuevo"]["Tipo"]."</li>
            <li><b>Nombre:</b> ".$animales["nuevo"]["Nombre"]."</li>
            <li><b>Raza:</b> ".$animales["nuevo"]["Raza"]."</li>
            <li><b>Ubicación:</b> ".$animales["nuevo"]["Ubicacion"]."</li>
            <li><b>Edad:</b> ".$animales["nuevo"]["Edad"]."</li>
            <li><b>Imagen:</b> 
            <br><img src='https://i5.walmartimages.com/asr/c7c5e86d-56a0-4a92-bb4d-bf677e312a4e.9b062840126ae832d20713bc380a9484.jpeg?odnHeight=580&odnWidth=580&odnBg=FFFFFF' alt='león'> </li>
            <br>
            </ul>"; 
        }


        function filaTabla($animales, $posicion){
            $animal = "";
            if ($posicion == 0){
                $animal = "perro";
            }
            if ($posicion == 1){
                $animal = "gato";
            }
            if ($posicion == 2){
                $animal = "nuevo";
            }
        $fila='<tr>
            <td>'.$animales[$animal]["id"].
            '</td>
            <td>'.$animales[$animal]["Tipo"].
            '</td>
            <td>'.$animales[$animal]["Nombre"].
            '</td>
            <td>'.$animales[$animal]["Raza"].
            '</td>
            <td>'.$animales[$animal]["Ubicacion"].
            '</td>
            <td>'.$animales[$animal]["Edad"].
            '</td>
            <td>
                <img src="'.$animales[$animal]["Imagen"].'">
            </td>
        </tr>';
        return $fila;
        }
    function MostrarTodos($animales) {
           echo "<table>
           <tr>
               <th>
                   id
               </th>
               <th>
                   Tipo
               </th>
               <th>
                   Nombre
               </th>
               <th>
                   Raza
               </th>
               <th>
                   Ubicación
               </th>
               <th>
                   Edad
               </th>
               <th>
                   Imagen
               </th>
           </tr>".filaTabla($animales, 0).filaTabla($animales, 1).filaTabla($animales, 2)."</table>"; 
        }
?>