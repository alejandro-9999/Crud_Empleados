<?php 
include('./Conexion.ini.php');
$link = conectar();
if(isset($_GET['id']))
{
    $id= $_GET['id'];
    $query = "DELETE FROM emple WHERE emp_no = '$id'";   
    $_SESSION['mensaje'] = "Error al eliminar empleado";
    $_SESSION['color'] = 'danger';
    $mysqli_Query=mysqli_query($link,$query) or die(header("Location:./Index.php")) ;
       
      
        $_SESSION['mensaje'] = "Empleado Eliminado";
        $_SESSION['color'] = 'success'; 
       
       
       header("Location:./Index.php");  
}
?>