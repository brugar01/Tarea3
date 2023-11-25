    <?php
       error_reporting(E_ALL);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once dirname(__FILE__,3).'/php/config/header.php';
        ?>
    <title>Creación de Datos</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__,3).'/php/config/menu.php';
     ?>
<div class="container-md">
    <h2>Creación de registro</h2>
    <form action="create.php" method="post" id="formCreate">
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre:" require_once autofocus>
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido:" require_once>
    </div>
    <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" placeholder="Ingrese teléfono:" require_once>
    </div>
        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula</label>
            <input type="number" class="form-control" id="cedula" placeholder="Ingrese cédula:" require_once>
        </div>
            <div class="mb-3">
                <input class= "btn btn-primary" type="submit" value = "Guardar">
            </div>
            </form>  
        </div>
</body>
    <?php
        require_once dirname(__FILE__,3).'/php/config/footer.php';
    ?>
</html>