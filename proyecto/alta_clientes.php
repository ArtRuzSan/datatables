<?php include("header.php");?>
<body>
      <div class="col-sm-8"><h2>Agregar Cliente </h></div>
      <?php
      include ("database.php");
      $clientes = new Database();
      if (isset($_POST)  && !empty($_POST)){
          $nombres = $clientes->sanitize($_POST['nombres']);
          $apellidos = $clientes->sanitize($_POST['apellidos']);
          $telefono = $clientes->sanitize($_POST['telefono']);
          $direccion = $clientes->sanitize($_POST['direccion']);
          $correo_electronico = $clientes->sanitize($_POST['correo_electronico']);

                    $res = $clientes->create($nombres,$apellidos,$telefono,$direccion,$correo_electronico);
                    if($res){
                        $mesagge ="Datos insertados con exito !!!";
                        $class="alert alert-sucess";
                    }
                    else{
                        $mesagge ="Error en la insercion!!!";
                        $class="alert alert-danger";
                    }

                    }

      ?>



      <div class="row">
            <form method="POST">
                 <div class="col-md-6">
                      <label>Nombre(s)</label>
                      <input type="text" class="form-control" name="nombres" id="nombres" requiered>
                  </div>
<div class="row">
    <form method="POST">
        <div class="col-md-6">
            <label>Apellido(s)</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" requiered>
</div>
<div class="row">
    <form method="POST">
        <div class="col-md-6">
            <label>Telefono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" requiered>
</div><div class="row">
    <form method="POST">
        <div class="col-md-6">
            <label>Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" requiered>
</div>
<div class="row">
    <form method="POST">
        <div class="col-md-6">
            <label>Correo Electronico</label>
            <input type="text" class="form-control" name="correo_electronico" id="correo_electronico" requiered>
</div>
<br/>
<div class="col-md-12 pull-right">
    <button type="submit" class="btn btn-success">Guardar Registro</button>
</body>

<?php include("footer.php");
?>