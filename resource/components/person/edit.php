<?php 
$per = new Persona(); 
$per->set('id', $_GET["edit"]);
$data = $per->show();
if(!$data){
    header("Location: " . URL);
}
?>

<form action="./app/server/UpdatePerson.php" class="border rounded mt-5 mb-5 p-4" method="post" class="mt-4 mb-5">
    <h2 class="mb-4 text-center text-primary">Actualizar persona</h2>
    <div class="form-group mt-4 mb-4">
        <input type="hidden" class="form-control" name="id" autocomplete="off" required value="<?php print $data['id'];?>">
    </div>
    <div class="form-group mt-4 mb-4">
        <input type="text" class="form-control" name="nombre" autocomplete="off" placeholder="Nombres completos" required value="<?php print $data['nombre'];?>">
    </div>
    <div class="form-group mt-4 mb-4">
        <input type="number" class="form-control" name="telefono" autocomplete="off" placeholder="Telefono" required value="<?php print $data['telefono']; ?>">
    </div>
    <div class="form-group mt-4 mb-4">
        <input type="email" class="form-control" name="email" autocomplete="off" placeholder="email" required value="<?php print $data['email']; ?>">
    </div>
    <div class="form-group mt-4 mb-4">
        <select name="sexo" class="form-control" required>
            <option value="<?php print $data['sexo']; ?>">
                <?php print $data['sexo']; ?>
            </option>
        <?php foreach (Persona::sex() as $key => $value) { ?>
            <?php if($data['sexo'] != $value['nombre']) { ?>
            <option value="<?php print $value['nombre']; ?>">
                <?php print $value['nombre']; ?>
            </option>
        <?php }} ?>
        </select>
    </div>
    <div class="form-group mt-4 mb-4">
        <select name="cargo" class="form-control" required>
            <option value="<?php print $data['cargo']; ?>">
                <?php print $data['cargo']; ?>
            </option>
        <?php foreach (Persona::position() as $value) { ?>
            <?php if($data['cargo'] != $value['nombre']) { ?>
            <option value="<?php print $value['nombre']; ?>">
                <?php print $value['nombre']; ?>
            </option>
        <?php }} ?>
        </select>
    </div>
    <div class="form-group mt-4 mb-4">
        <input type="number" class="form-control" name="salario" autocomplete="off" placeholder="Salario" step="any" required value="<?php print $data['salario']; ?>">
    </div>
    <div class="form-group mt-4 mb-4">
        <button class="btn btn-success m-2">Actualizar</button>
        <a href="<?php print URL."?edit=".$data['id']; ?>" class="btn btn-info m-2">Resetear</a>
        <a href="<?php print URL; ?>" class="btn btn-dark m-2">Nuevo</a>
    </div>
</form>