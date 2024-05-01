<?php
function htmlStart(){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<base href="'.BASE_URL.'">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
<body>
<nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="Major">Página del inicio</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="TablaDeVuelos">Tabla de vuelos</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="ModificarLaTabla">Modificar la tabla</a>
</nav>
<?php
}
?>
