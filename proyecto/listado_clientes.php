<?php include ("header.php");?> 
<div class="container">
    <div class ="table-wrapper">
        <div class="table-tittle">
            <div class="row">
                <div class="col-sm-8"><h2>Listado Clientes</h2>
</div> 
</div>
</div>
            <table id="clientes" class="display">
               <thead>
                   <th>Id del Registro</th>
                  <th>Nombre Completo</th>
                  <th>Telefono</th>
                  <th>Direccion</th>
                  <th>Correo electronico</th>
                  <th>Acciones</th>
</thead>
<tbody>
    <?php include('database.php');
    $clientes = new Database ();
    $listado = $clientes->listadoclientes();
    while($row=mysqli_fetch_object($listado)){
        $id = $row->id;
        $nombres =$row->nombres."".$row->apellidos;
        $telefono =$row->telefono;
        $direccion =$row->direccion;
        $email =$row->correo_electronico;
   
    ?>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $nombres; ?></td>
        <td><?php echo $telefono; ?></td>
        <td><?php echo $direccion; ?></td>
        <td><?php echo $email; ?></td>
        <td>
            <a href="update.php?id=<php echo $id;?>"
                class="edit" title="Editar"data-toogle="tooltip"><i class="material-icons">&#xE254;</i></a>
              
                <a href="delete.php?id=<php echo $id;?>"
                class="delete" title="Eliminar"data-toogle="tooltip"><i class="material-icons">&#xE254;</i></a>
</tr>
</tr>
<?php
    }
?>

</tbody> 
</table>
</div>
</div>

<?php include ("footer.php");?>
