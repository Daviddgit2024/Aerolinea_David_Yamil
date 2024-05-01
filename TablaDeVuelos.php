<?php
require_once "sql.php";
require_once "templates/htmlEnd.php";
require_once "templates/htmlStart.php";

 
function TablaDeVuelos(){
    htmlStart();
    ?>
<div class="container col-12">
  <table class="table table-success table-striped mt-2 text-center">
    <thead>
      <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Prioridad</th>
      <th scope="col">Finalizada</th>
      <th scope="col">Acciones</th>
    </tr>
    </thead>
  <tbody>';
    <?php
    
  $tareas = getAllTasks();
    if(count($tareas) == 0){
      echo"<tr>
        <td colspan=5>No hay tareas para mostrar</td>
     </tr>";
    }
    foreach ($tareas as $tarea) {
       $col1 = "<td>$tarea->nombre</td>";
       $col2 = "<td>$tarea->descripcion</td>";
       $col3 = "<td>$tarea->prioridad</td>";
       $estado = $tarea->finalizada ? "Tarea finalizada": "Sin finalizar";
       $col4 = "<td>$estado</td>";
       $col5 = !$tarea->finalizada 
     ?
       "<td>
            <a href='show/$tarea->id' class='btn btn-primary'>Ver</a>
            <a href='finalize/$tarea->id' class='btn btn-success'>Finalizar</a>
        </td>"
     :
      "<td>            
          <a href='delete/$tarea->id' class='btn btn-danger'>Eliminar</a>
      </td>";

     $class = $tarea->finalizada ? "finalizada": "";

     echo"<tr class='$class'>$col1 $col2 $col3 $col4 $col5</tr>";
    }
    ?>
 </tbody>
 </table>
</div>';
</body>
</html>
<?php 
}
?>
