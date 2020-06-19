<?php include('./Conexion.ini.php') ?>
<?php include('./includes/header.php') ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body" style ="background-color: #F1FAEE;">
                <form  action="./Ingresar.php" method="POST">
                    <div class="form-group">
                        <div class="form-group">  
                            <input class="form-control" type="number" name="Codigo" placeholder="Codigo" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Apellido" placeholder="Apellido" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Oficio" placeholder="Oficio" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Direccion" placeholder="Dirección" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="date" name="Fecha" placeholder="Fecha se alta" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Salario" placeholder="Salario" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Comision" placeholder="Comision" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="Dept_No" placeholder="Numero de departamento" autofocus>
                        </div>
                        
                        <input type="submit" class="btn btn-secondary" name = "Guardar"  Value = "Guardar" style="background-color: #457B9D ">
                                           
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">

    </div>
</div>
<?php include('./includes/footer.php') ?>    