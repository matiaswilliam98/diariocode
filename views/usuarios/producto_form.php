<div class="container">
    <div class="col-sm-6 offset-3 mt-5">
        <form method="POST" id="Form" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre *</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion *</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" required>
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="mb-3">
            <label for="categorias" class="form-label">Categorias *</label>
            <select name="categorias" id="categorias" class="form-control" required>
                <option value="Avisos Diversos">Avisos Diversos</option>
                <option value="Edictos Matrimoniales">Edictos Matrimoniales</option>
                <option value="Concesiones">Concesiones</option>
                <option value="Edictos Clasificados">Edictos Clasificados</option>
                <option value="Edictos Judiciales">Edictos Judiciales</option>
                <option value="Provincia">Provincia</option>

            </select>
        </div>
    </div>
</div>
<div class="mb-3">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file" name="foto" id="foto" required>
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
    <a href="index.php"><button type="button" id="btnSubmit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>