<?php
    include('./Conexion.ini.php');
    $link = conectar();
    if(isset($_GET['id']))
    {
        $id= $_GET['id'];
        $query = "SELECT * FROM emple WHERE emp_no = '$id'";   
        $_SESSION['mensaje'] = "Error al editar empleado";
        $_SESSION['color'] = 'danger';
        $mysqli_Query=mysqli_query($link,$query) or die(header("Location:./Index.php")) ;
        if(mysqli_num_rows($mysqli_Query)==1)
        {
            $row = mysqli_fetch_array($mysqli_Query);
            $Codigo = $row['emp_no'];
            $Apellido = $row['apellido'];
            $Oficio = $row['oficio'];
            $Direccion = $row['dir'];
            $Fecha = $row['fecha_alt'];
            $Salario = $row['salario'];
            $Comision = $row['comision'];
            $Dept_No = $row['dept_no'];
            
        }
    }
    if(isset($_POST['Editar']))
    {
        $Codigo = $_GET['id'];
        $Apellido = $_POST['Apellido'];
        $Oficio = $_POST['Oficio'];
        $Direccion = $_POST['Direccion'];
        $Fecha = $_POST['Fecha'];
        $Salario = $_POST['Salario'];
        $Comision = $_POST['Comision'];
        $Dept_No = $_POST['Dept_No'];
        $query = "UPDATE `emple` SET apellido='$Apellido',oficio='$Oficio',
        dir='$Direccion',fecha_alt='$Fecha',salario='$Salario',comision='$Comision',dept_no='$Dept_No' WHERE emp_no='$Codigo'";
        $_SESSION['mensaje'] = "Error al actualizar  empleado";
        $_SESSION['color'] = 'danger';
        
        $mysqli_Query=mysqli_query($link,$query) or die(header("Location:./Index.php")) ;
        $_SESSION['mensaje'] = "Empleado Actualizado";
        $_SESSION['color'] = 'success'; 
        header("Location:./Index.php"); 
    }    

?>
<?php include("./includes/header.php") ?>
<div class="container-fluid p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body" style ="background-color: #F1FAEE;">
                <form  action="Editar.php?id=<? ECHO $_GET['id']; ?>" method="POST"  >
                    <div class="form-group">
                        <div class="form-group">  
                            <input class="form-control" type="number" name="codigo"
                            value="<?php ECHO $Codigo; ?>"  id="Codigo" placeholder="Codigo" autofocus disabled>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Apellido"
                            value="<?php ECHO $Apellido; ?>" id="Apellido" placeholder="Apellido" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Oficio"
                            value="<?php ECHO $Oficio; ?>" id ="Oficio" placeholder="Oficio" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="Direccion"
                            value="<?php ECHO $Direccion; ?>" id="Direccion" placeholder="Dirección" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="date" name="Fecha"
                            value="<?php ECHO $Fecha; ?>" id="Fecha" placeholder="Fecha se alta" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Salario"
                            value="<?php ECHO $Salario; ?>" id="Salario" placeholder="Salario" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Comision"
                            value="<?php ECHO $Comision; ?>" id="Comision" placeholder="Comision" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="Dept_No"
                            value="<?php ECHO $Dept_No; ?>" id="Dept_No" placeholder="Numero de departamento" autofocus>
                        </div>
                        
                        <input type="submit" class="btn btn-secondary" name = "Editar"
                          Value = "Editar" style="background-color: #457B9D ">
                                           
                    </div>
                </form>
            </div>
        </div>       
    </div>
</div>        
<?php include("./includes/footer.php") ?>