<?php
    include('./Conexion.ini.php');
    
    if(isset($_POST['Guardar']))
    {
       $link = conectar();
       $Codigo = $_POST['codigo'];
       $Apellido = $_POST['Apellido'];
       $Oficio = $_POST['Oficio'];
       $Direccion = $_POST['Direccion'];
       $Fecha = $_POST['Fecha'];
       $Salario = $_POST['Salario'];
       $Comision = $_POST['Comision'];
       $Dept_No = $_POST['Dept_No'];
       $Query = "INSERT INTO emple(emp_no,apellido,oficio,dir,fecha_alt,salario,comision,dept_no)
        VALUES ('$Codigo','$Apellido','$Oficio','$Direccion','$Fecha','$Salario','$Comision','$Dept_No')";
      $_SESSION['mensaje'] = "Error al ingresar empleado";
      $_SESSION['color'] = 'danger';
       $mysqli_Query=mysqli_query($link,$Query) or die(header("Location:./Index.php")) ;
       
      
        $_SESSION['mensaje'] = "Empleado Ingresado";
        $_SESSION['color'] = 'success'; 
       
       
       header("Location:./Index.php");

    }
?>