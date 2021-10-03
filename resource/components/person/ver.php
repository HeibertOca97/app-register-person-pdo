<?php 
$per = new Persona(); 
$per->set('id', $_GET["ver"]);
$data = $per->show();
if(!$data){
    header("Location: " . URL);
}
?>
<h2 class="mt-5 text-center text-primary">Persona ID: <?php print $data["id"]; ?></h2>

<ul class="list-group mt-3 mb-5">
    <li class="list-group-item"><strong>Nombre: </strong><?php print $data["nombre"]; ?></li>
    <li class="list-group-item"><strong>Telefono: </strong> <?php print $data["telefono"]; ?></li>
    <li class="list-group-item"><strong>Email: </strong> <?php print $data["email"]; ?></li>
    <li class="list-group-item"><strong>Sexo: </strong> <?php print $data["sexo"]; ?></li>
    <li class="list-group-item"><strong>Salario: </strong> <?php print $data["salario"]; ?></li>
    <li class="list-group-item"><strong>Cargo: </strong> <?php print $data["cargo"]; ?></li>
</ul>
<div class="mt-3 mb-3">
    <a href="<?php print URL."?edit=".$data['id']; ?>" class="btn btn-info m-2">Editar</a>
    <a href="./app/server/DeletePerson.php?id=<?php print $data["id"]; ?>" class="btn btn-danger m-2">Eliminar</a>
    <a href="<?php print URL; ?>" class="btn btn-dark m-2">Nuevo</a>
</div>