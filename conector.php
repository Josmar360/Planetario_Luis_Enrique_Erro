<?php
                  include 'conector-bd.php';//incluye el archivo de conexion
                  //Verifica la conexion
                  // Consulta SQL para obtener los datos de la base de datos
                  $identificador = $_GET["identificador"];
                  if($conexion){
                    $sql = "SELECT nombre_alumno, horas_acumuladas, horas_faltantes
                    FROM alumnos WHERE ID_alumno='$identificador'";
                    $result = $conexion->query($sql);
                    $num_rows = mysqli_num_rows($result);
                  }else {
                    echo 'No se pudo conectar a la base de datos';
                  }
                  if ($num_rows > 0) {
                    // Imprimir la tabla si hay resultados
                    echo "<table>";
                    echo "<tr>
                      <th>Nombre</th>
                      <th>Horas acumuladas</th>
                      <th>Horas faltantes</th>
                      </tr>";
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>".$row["nombre_alumno"]."</td>";
                      echo "<td>".$row["horas_acumuladas"]."</td>";
                      echo "<td>".$row["horas_faltantes"]."</td>";
                      echo "</tr>";
                    }
                    echo "</table>";
                  }else {
                    echo "No se encontraron datos.";
                  }
                  // Cerrar la conexión a la base de datos
                  exit;
                ?>