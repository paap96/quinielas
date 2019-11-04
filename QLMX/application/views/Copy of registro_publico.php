<?php
if(isset($info_personal) && $info_personal){ 
		//recorro e imprimo informacion		
		foreach ($info_personal->result() as $result) {
				$nombre=$result->nombre;
				$nacimiento=$result->nacimiento;
				$correo=$result->correo;
				$tel=$result->tel;
				$direccion=$result->direccion;
			}


}
?>
<div id="nuevo_empleado">
            <h2>Datos Personales:</h2><br />
    		<?php
    		//validamos q si existe un mensaje y lo pintamos
			if(isset($mensaje)) echo $mensaje;
			//mensaje de errores en la forma
		
			
			//inputs
			//pedimos nombre completo
			$data = array(
              'name'        => 'nombre',
              'id'          => 'nombre',
              'value'       => set_value('nombre',(isset($nombre) ? $nombre : '')),
              'maxlength'   => '40',
              'class'   => 'required'
            );
			echo '<p>Nombre</p><p>'.form_input($data,'','required').'</p>';
			
			$data = array(
              'name'        => 'nacimiento',
              'id'          => 'nacimiento',
              'value'       => set_value('nacimiento',(isset($nacimiento) ? $nacimiento : '')),
              'maxlength'   => '10',
              'type'		=> 'date'
            );
			echo '<p>Nacimiento</p><p>'.form_input($data).'</p>';
			
			$data = array(
              'name'        => 'correo',
              'id'          => 'correo',
              'value'       => set_value('correo',(isset($correo) ? $correo : '')),
              'maxlength'   => '40',
              'type'		=> 'email'
            );
			echo '<p>Correo</p><p>'.form_input($data).'</p>';	
			$data = array(
              'name'        => 'tel',
              'id'          => 'tel',
              'value'       => set_value('tel',(isset($tel) ? $tel : '')),
              'maxlength'   => '10'
            );
			echo '<p>Telefono</p><p>'.form_input($data).'</p>';			
			//pedimos confirmaciòn de contraseña
			$data = array(
              'name'        => 'direccion',
              'id'          => 'direccion',
              'value'       => set_value('status',(isset($direccion) ? $direccion : ''))
            );
			echo '<p>Dirección</p><p>'.form_textarea($data).'</p>';							
        	// datos adicionales
        	
        	?>
        </br>
        	<h2>Datos Academicos</h2>
        	
        </br>
        	<?php	
        	//validamos info academica
        	if(isset($info_academica) && $info_academica)
			{
				//recorro e imprimo informacion		
				echo "<table border=1>
						<tr>
							<td>Nombre Escuela</td>
							<td>Grado obtenido</td>
							<td>Ciclo</td>
						<tr>";
						foreach ($info_academica->result() as $result) 
						{
							echo "<tr>
									<td>".$result->escuela."</td>
									<td>".$result->grado."</td>
									<td>De ".$result->f_inicio." a ".$result->f_fin."</td>
							</tr>";
						}
				echo "</table>";
			}			
            //creamos boton de ingres y cerramos formulario 
			
			echo "<div id='mensaje-error-forma'>";
			if(validation_errors()!=""){
				echo '<div class="errormsj"> <span> Error </span>'.validation_errors().'</div>';
				       } 
			echo "</div>";
			?>
</div>

