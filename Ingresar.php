<?php
    include('./Conexion.ini.php');
    if(isset($_POST['Guardar']))
    {
       $Codigo = $_POST['Codigo'];
       $Apellido = $_POST['Apellido'];
       $Oficio = $_POST['Oficio'];
       $Direccion = $_POST['Direccion'];
       $Fecha = $_POST['Fecha'];
       $Salario = $_POST['Salario'];
       $Comision = $_POST['Comision'];
       $Dept_No = $_POST['Dept_No'];
    }
?>