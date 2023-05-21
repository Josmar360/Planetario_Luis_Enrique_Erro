<?php
$inc = include("conector_db.php");
if($inc)
{
    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array())
        $id = $row['ID_alumno'];
        $nombre = $row['nombre_alumno'];
        $horas_acumuladas = $row['horas_acumuladas'];
        $horas_faltantes = $row['horas_faltantes'];
        ?>
<div>
    <h2><?php echo $nombre; ?></h2>
    <div>
        <p>
            <b>ID: </b> <?php echo $id; ?><br>
            <b>Nombre: </b> <?php echo $nombre; ?><br>
            <b>Horas acumuladas: </b> <?php echo $horas_acumuladas; ?><br>
            <b>Horas faltantes: </b> <?php echo $horas_faltantes; ?><br>
        </p>
    </div>
</div>
<?php   
    }
}
?>