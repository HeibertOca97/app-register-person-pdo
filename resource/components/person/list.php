<?php $per = new Persona(); ?>

<h2 class="mt-5 text-center text-primary">Listado de personas</h2>
<div class="m-auto">
    <div class="alert alert-info mt-3" role="alert">
    Total de registro <strong><?php print $per->getTotal(); ?></strong>
    </div>
    <ul class="list-group mt-3 mb-5">
        <?php
        if($per->getAll() == null){
        ?>
        <li class="list-group-item">Por el momento no hay ningun registro</li>
        <?php
        }else{
            foreach($per->getAll() as $item){
        ?>
            <li class="list-group-item">
                <strong>Nombre: </strong><?php print $item["nombre"]; ?>
                 | <strong>Telefono: </strong><?php print $item["telefono"]; ?>
                 | <strong>Email: </strong><?php print $item["email"]; ?>
                 | <strong>Sexo: </strong><?php print $item["sexo"]; ?>
                 | <strong>Cargo: </strong><?php print $item["cargo"]; ?>
                 | <strong>Salario mensual: </strong><?php print $item["salario"]; ?>
                 <div>
                     <a href="<?php print URL."?edit=".$item["id"]; ?>" class="btn btn-warning m-2">Editar</a>
                     <a href="./app/server/DeletePerson.php?id=<?php print $item["id"]; ?>" class="btn btn-danger m-2">Eliminar</a>
                     <a href="<?php print URL."?ver=".$item["id"]; ?>" class="btn btn-secondary m-2">Ver</a>
                 </div>
            </li>
        <?php
            }
        }
        ?>
    </ul>
</div>