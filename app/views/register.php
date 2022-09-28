<?php include_once 'header.php'?>

<div class="card p-4 bg-ligth">
    <div class="card-header">
        <h1 class="">Registro</h1>
    </div>
    <div class="card-body">
        <form action="<?= ROOT ?>login/registro/" method="post">
            <div class="form-group text left">
                <label for="firm_name">Nombre:</label>
                <input type="text" name="firts_name" id="firm_name" class="form-control" required placeholder="Escriba su nombre">
            </div>
            <div class="form-group text left">
                <label for="last_name_1">Apellido1:</label>
                <input type="text" name="last_name_1" id="last_name_1" class="form-control" required placeholder="Escriba su apellido 1">
            </div>
            <div class="form-group text left">
                <label for="last_name_2">Apellido2:</label>
                <input type="text" name="last_name_2" id="last_name_2" class="form-control" required placeholder="Escriba su apellido 2">
            </div>
            <div class="form-group text left">
                <label for="email">Correo electronico:</label>
                <input type="email" name="email" id="email" class="form-control" required placeholder="Escriba su correo electronico">
            </div>
            <div class="form-group text left">
                <label for="password">Clave de acceso:</label>
                <input type="password" name="password" id="password" class="form-control" required placeholder="Escriba su contraseña">
            </div>
            <div class="form-group text left">
                <label for="password2">Clave de acceso:</label>
                <input type="password" name="password2" id="password2" class="form-control" required placeholder="Repita su contraseña">
            </div>
            <div class="form-group text left">
                <label for="address">Diraccion:</label>
                <input type="text" name="address" id="address" class="form-control" required placeholder="Escriba su direccion">
            </div>
            <div class="form-group text left">
                <label for="city">Ciudad:</label>
                <input type="text" name="city" id="city" class="form-control" required placeholder="Escriba su Ciudad">
            </div>
            <div class="form-group text left">
                <label for="state">Provincia:</label>
                <input type="text" name="state" id="state" class="form-control" required placeholder="Escriba su provincia">
            </div>
            <div class="form-group text left">
                <label for="postcode">Codigo postal:</label>
                <input type="text" name="postcode" id="postcode" class="form-control" required placeholder="Escriba su Codigo postal">
            </div>
            <div class="form-group text left">
                <label for="country">Pais:</label>
                <input type="text" name="country" id="country" class="form-control" required placeholder="Escriba su Pais">
            </div>
            <div class="form-group text-left">
                <input type="submit" value="Enviar datos" class="btn btn-success">
                <a href="<?= ROOT ?>login/" class="btn btn-info">Cancelar</a>
            </div>
        </form>
    </div>
</div>
<?php include_once 'footer.php'?>
