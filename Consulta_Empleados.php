<?php
include('./Conexion.ini.php');
$link=conectar();

$sql="select * from emple";
$res=mysqli_query($link,$sql) or die ("ERROR en la consulta $sql".mysqli_error());
ECHO " 
<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Direcion</th>
    <th>Fecha</th>
    <th>Salario</th>
    <th>Comision</th>
    <th>Departamento</th>
</tr>
";
while($row=mysqli_fetch_array($res))
{
    ECHO "<tr align = 'center'>";
    ECHO "<th >".$row['emp_no']."</th>";
    ECHO "<th >".$row['emp_no']."</th>";
    ECHO "<th >".$row['emp_no']."</th>";
    ECHO "<th >".$row['emp_no']."</th>";
    ECHO "<th >".$row['emp_no']."</th>";
    ECHO "<th >".$row['emp_no']."</th>";
    ECHO "<th >".$row['emp_no']."</th>";
    ECHO "<th >".$row['emp_no']."</th>";
    ECHO "</tr>";
    
}
ECHO "</table>"; 
?>