<?php include("../../templates/header.php"); ?>

<br/>
<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" 
        href="crear.php" role="button"
        >AGREGAR DATOS Y DETALLES
        </a>
    </div>
    <div class="card-body">
<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del Puesto</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Programador jr</td>
                <td>
                   <input name="btneditar" id="btneditar" class="btn btn-info" type="button" value="Editar">
                   <input name="btnborrar" id="btnborrar" class="btn btn-danger" type="button" value="Eliminar">
                </td>
            </tr>
        </tbody>
    </table>
</div>
    </div>
</div>

<?php include("../../templates/footer.php"); ?>