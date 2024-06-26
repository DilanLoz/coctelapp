<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">

<nav class="navbar navbar-expand-lg">
    <img src="../img/logo.png" alt="" class="navbar-brand mx-5" height="60px">
    <a href="vusubicomp.php" class="btn btn-warning ms-auto mx-5">VOLVER</a>
</nav>

<div id="perfil" class="container mt-5">
    <div class="mt-3">
        <img src="img/1.png" alt="" class="img-fluid" style="max-height: 200px; max-width: 100%;">
    </div>
        <h2 class="mt-3 mb-4 text-warning">Formas de pago</h2>
        <form action="#" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="col-md-6">
                <button type="button" class="btn btn-outline-secondary text-dark">Tarjeta credito</button>
                <button type="button" class="btn btn-outline-secondary text-dark">Tarjeta debito</button>
                <button type="button" class="btn btn-outline-secondary text-dark">PSE</button>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mt-3 mb-3">
                    <label for="identificacion" class="form-label">Nombre del titular de la tarjeta:</label>
                    <input type="text" class="form-control" id="identificacion" name="identificacion" required>
                </div>
                    <div class="mb-4 col-md-3">
                    <label for="ubicacion" class="form-label">Cuotas disponibles:</label>
                    <select id="employee-type" name="employee-type" class="form-control" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="row">
                <div class="mb-4">
                <label for="apellidos" class="form-label">Numero de la tarjeta:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                </div>
                </div>
                <div class="col-md-6">
                <img src="img/00.png" alt="" class="img-fluid" style="max-height: 150px; max-width: 50%;">
                </div>
                </div>
                <div class="mb-3 col-md-6">
                    <div class="row">
                        <div class="col-md-8">
                        <label for="fecha_vencimiento" class="form-label">Fecha de Vencimiento:</label>
                        <input type="text" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" pattern="\d{2}/\d{2}" placeholder="MM/YY" required>
                    </div>
                        <div class="col-md-4">
                            <label for="codigo_seguridad" class="form-label">CVV:</label>
                            <input type="text" class="form-control" id="codigo_seguridad" name="codigo_seguridad" required>
                        </div>
            </div>

            <div class="text-start mt-3">
                <a href="vusconfcomp.php" class="btn btn-warning col-md-9">PAGAR</a>
            </div>

        </form>
</div> 