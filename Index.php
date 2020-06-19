<?php include('./Conexion.ini.php') ?>
<?php include('./includes/header.php') ?>
<div class="container-fluid p-4">
    <div class="row">
        <div class="col-md-3">
            <?php if(isset($_SESSION['mensaje']))
            { ?>
            <div class="alert alert-<?=$_SESSION['color'] ?> alert-dismissible fade show" role="alert">
                <?=$_SESSION['mensaje'] ?>  
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                </button>
                </div>

            <?php session_unset(); } ?>
            <div class="card card-body" style ="background-color: #F1FAEE;">
                <form  action="./Ingresar.php" method="POST">
                    <div class="form-group">
                        <div class="form-group">  
                            <input class="form-control" type="number" name="codigo"  id="Codigo" placeholder="Codigo" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Apellido" id="Apellido" placeholder="Apellido" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Oficio" id ="Oficio" placeholder="Oficio" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="Direccion" id="Direccion" placeholder="Dirección" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="date" name="Fecha" id="Fecha" placeholder="Fecha se alta" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Salario" id="Salario" placeholder="Salario" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Comision" id="Comision" placeholder="Comision" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="Dept_No" id="Dept_No" placeholder="Numero de departamento" autofocus>
                        </div>
                        
                        <input type="submit" class="btn btn-secondary" name = "Guardar"  Value = "Guardar" style="background-color: #457B9D ">
                                           
                    </div>
                </form>
            </div>
        </div>
        
 <style>
    th{
        text-align: center;
    }
    td{
        text-align: right;
    }
</style>
        <div class="col-md-9">
            <div class="card card-body" style ="background-color: #F1FAEE;  min-width: 220px; overflow: auto;" >
                <table class="table table-striped" style="font-size:12px" style="text-align:center;" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Oficio</th>
                            <th>Direcion</th>
                            <th>Fecha</th>
                            <th>Salario</th>
                            <th>Comision</th>
                            <th>Departamento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $link=conectar();
                         $sql="select * from emple";
                         $res=mysqli_query($link,$sql) or die ("ERROR en la consulta $sql".mysqli_error());
                         while($row=mysqli_fetch_array($res))
                            {?>
                               <tr align = 'center'>
                               <th ><?php ECHO $row['emp_no'] ?></th>
                               <th ><?php ECHO $row['apellido']?></th>
                               <th ><?php ECHO $row['oficio']?></th>
                               <th ><?php ECHO $row['dir']?></th>
                               <th ><?php ECHO $row['fecha_alt']?></th>
                               <th ><?php ECHO $row['salario']?></th>
                               <th ><?php ECHO $row['comision']?></th>
                               <th ><?php ECHO $row['dept_no']?></th>
                               <th >
                               <a href="./Editar.php?id=<?php ECHO $row['emp_no']?>" class='btn btn-secondary' style ="background-color: #457B9D">
                                <i class="fa fa-pencil">
                                </i></a>
                               <a href="./Eliminar.php?id=<?php ECHO $row['emp_no']?>" class='btn btn-secondary' style ="background-color: #E63946">
                               
                               <i class="far fa-trash-alt">
                               </i>
                               </a>
                               </th>
                               </tr>
                                
                            <?php } ?>

                         
                    </tbody>
                </table>
            </div>
    </div>
    </div>
    
</div>
<?php include('./includes/footer.php') ?>    