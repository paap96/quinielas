
<?php if(isset($mensaje)) echo "<div class='row'>$mensaje</div>";?>
<table  cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
	<tr>
	   	<td class="titulos">ID</td>
	    <td class="titulos">Nombre</td>
	    <td class="titulos">Apellido</td>  
	    <td class="titulos">Edad</td> 
	    <td class="titulos">Genero</td>
	    <td class="titulos">Correo</td>
	    <td class="titulos">Usuario</td>
	    <td class="titulos">Contraseña</td>   
	    <td class="titulos">Equipo Favorito</td>  
	    <td class="titulos">status</td> 
	    <td class="titulos">Ver</td>  >        
	</tr>
	</thead>
	<tbody>
			<?php 
			
			//validamos que exista infromacion y la asignamos 
			if(isset($info_personal) && $info_personal){ 
			//recorro e imprimo informacion		
			foreach ($info_personal->result() as $result) {
			
			    echo "<tr><td>".$result->id."</td><td>".$result->nombre."</td><td>"
			    .$result->apellido."</td><td>".$result->edad."</td><td>"
			    .$result->genero."</td><td>".$result->correo."</td><td>"
			    .$result->log."</td><td>".$result->pas."</td><td>".$result->equipofav."</td><td>"
			    .(($result->status==1) ? "Activo": "Inactivo").
			    "</td><td><a href=".base_url('personal/ver/'.$result->id)."> 
			    VER</a></td></tr>";
				
			}
			}
			?>
	</tbody>
</table>

