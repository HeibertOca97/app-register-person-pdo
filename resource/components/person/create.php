<form action="./app/server/CreatePerson.php" class="border rounded mt-5 mb-5 p-4" method="post" class="mt-4 mb-5">
    <h2 class="mb-4 text-center text-primary">Registro de personas</h2>
    <div class="form-group mt-4 mb-4">
        <input type="text" class="form-control" name="nombre" autocomplete="off" placeholder="Nombres completos" required>
    </div>
    <div class="form-group mt-4 mb-4">
        <input type="number" class="form-control" name="telefono" autocomplete="off" placeholder="Telefono" required>
    </div>
    <div class="form-group mt-4 mb-4">
        <input type="email" class="form-control" name="email" autocomplete="off" placeholder="email" required>
    </div>
    <div class="form-group mt-4 mb-4">
        <select name="sexo" class="form-control" required>
            <option value="">Seleccione su sexo...</option>
        <?php foreach (Persona::sex() as $key => $value) { ?>
            <option value="<?php print $value['nombre']; ?>">
            <?php print $value['nombre']; ?>
            </option>
        <?php } ?>
        </select>
    </div>
    <div class="form-group mt-4 mb-4">
        <select name="cargo" class="form-control" required>
            <option value="">Seleccione su cargo...</option>
        <?php foreach (Persona::position() as $key => $value) { ?>
            <option value="<?php print $value['nombre']; ?>">
            <?php print $value['nombre']; ?>
            </option>
        <?php } ?>
        </select>
    </div>
    <div class="form-group mt-4 mb-4">
        <input type="number" class="form-control" name="salario" autocomplete="off" placeholder="Salario" step="any" required>
    </div>
    <div class="form-group mt-4 mb-4">
        <button class="btn btn-success m-2">Register</button>
        <a href="" class="btn btn-info m-2">Limpiar</a>
    </div>
</form>