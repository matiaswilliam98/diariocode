<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>

<body>
    <div class="row">
        <div class="col-sm-4">
            <a class="catelectronico" href="productosCategoria.php?categoria=<?php echo 'Avisos diversos' ?>">
                Avisos diversos
            </a>
        </div>
        <div class="col-sm-4">
            <a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'Edictos matrimoniales' ?>">
                Edictos matrimoniales
            </a>
        </div>
        <div class="col-sm-4">
            <a class="catfarmaceutico" href="productosCategoria.php?categoria=<?php echo 'Concesiones' ?>">
                Concesiones
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <a class="catjugueteria" href="productosCategoria.php?categoria=<?php echo 'Edictos judiciales' ?>">
                Edictos judiciales
            </a>
        </div>

        <div class="col-sm-4">
            <a class="catmascotas" href="productosCategoria.php?categoria=<?php echo 'Edictos clasificados' ?>">
                Edictos clasificados
            </a>
        </div>
        <div class="col-sm-4">
            <a class="catautomovilstico" href="productosCategoria.php?categoria=<?php echo 'Provincia' ?>">
                Provincia
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <input class="soon" type="button" value="Mas categorias proximamenente">
        </div>
    </div>
</body>
<?php require '../../includes/_footer.php' ?>

</html>