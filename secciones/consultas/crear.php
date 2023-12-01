<?php include("../../templates/header.php"); ?>
<br/>
<div class="card">
    <div class="card-header">
        Datos
    </div>
    <div class="card-body">
    <form action=""method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="primernombre" class="form-label">Primer nombre</label>
      <input type="text"
        class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId" placeholder="Primer nombre">
    </div>

    <div class="mb-3">
      <label for="segundonombre" class="form-label">Segundo nombre </label>
      <input type="text"
        class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId" placeholder="Segundo nombre">
    </div>

    <div class="mb-3">
      <label for="primerapellido" class="form-label">Primer apellido </label>
      <input type="text"
        class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId" placeholder="Primer apellido">
    </div>

    <div class="mb-3">
      <label for="segundoapellido" class="form-label">Segundo apellido</label>
      <input type="text"
        class="form-control" name="segundoapellido" id="segundoapellido" aria-describedby="helpId" placeholder="Segundo apellido">
    </div>

    <div class="mb-3">
      <label for="pdf" class="form-label">PDF</label>
      <input type="file" class="form-control" name="pdf" id="pdf" placeholder="pdf" aria-describedby="fileHelpId">
    </div>

    <div class="mb-3">
        <label for="idpuestoocargo" class="form-label">Puesto o Cargo:</label>
        <select class="form-select form-select-sm" name="idpuestoocargo" id="idpuestoocargo">
            <option selected>Select one</option>
            <option value="">New Delhi</option>
            <option value="">Istanbul</option>
            <option value="">Jakarta</option>
        </select>
    </div>

    <div class="mb-3">
      <label for="fechadeingreso" class="form-label">Fecha de ingreso:</label>
      <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="emailHelpId" placeholder="Fecha de ingreso">
    </div>

    <button type="submit" class="btn btn-success">Agregar registro</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


    </form>

    
    </div>
    <div class="card-footer text-muted">
    </div>
</div>


<?php include("../../templates/footer.php"); ?>