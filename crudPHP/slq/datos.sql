SELECT id, tipo, tipo_identificacion, numero_identificacion, apellidos, nombres, razon_social, codigo, direccion, telefono1, telefono2, celular1, celular2, email1, email2, fecha_nacimiento, profesion, actividades, rol, fecha_registro, descripcion, clave, repetir_clave, estado FROM ctk_usuario where estado=1




<td>id</td>
<td>tipo</td>
<td>tipo_identificacion</td>
<td>numero_identificacion</td>
<td>apellidos</td>
<td>nombres</td>
<td>razon_social</td>
<td>codigo</td>
<td>direccion</td>
<td>telefono1</td>
<td>telefono2</td>
<td>celular1</td>
<td>celular2</td>
<td>email1</td>
<td>email2</td>
<td>fecha_nacimiento</td>
<td>profesion</td>
<td>actividades</td>
<td>rol</td>
<td>fecha_registro</td>
<td>descripcion</td>

<td><?php echo $columna['tipo'];?></td>
<td><?php echo $columna['tipo_identificacion'];?></td>
<td><?php echo $columna['numero_identificacion'];?></td>
<td><?php echo $columna['apellidos'];?></td>
<td><?php echo $columna['nombres'];?></td>
<td><?php echo $columna['razon_social'];?></td>
<td><?php echo $columna['codigo'];?></td>
<td><?php echo $columna['direccion'];?></td>
<td><?php echo $columna['telefono1'];?></td>
<td><?php echo $columna['telefono2'];?></td>
<td><?php echo $columna['celular1'];?></td>
<td><?php echo $columna['celular2'];?></td>
<td><?php echo $columna['email1'];?></td>
<td><?php echo $columna['email2'];?></td>
<td><?php echo $columna['fecha_nacimiento'];?></td>
<td><?php echo $columna['profesion'];?></td>
<td><?php echo $columna['actividades'];?></td>
<td><?php echo $columna['rol'];?></td>
<td><?php echo $columna['fecha_registro'];?></td>
<td><?php echo $columna['descripcion'];?></td>



