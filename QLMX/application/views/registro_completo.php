<?php
if(isset($info_personal) && $info_personal){ 
		//recorro e imprimo informacion		
		foreach ($info_personal->result() as $result) {
				$nombre=$result->nombre;
				$apellido	=$result->apellido;
				$edad=$result->edad;
				$genero=$result->genero;
				$correo=$result->correo;
				$log=$result->log;
				$pas=$result->pas;
				$equipofav=$result->equipofav;
				$status=$result->status;
			}


}
?>
<div id="nuevo_empleado">
            <h2>Datos Personales:</h2><br />
    		<?php
    		//validamos q si existe un mensaje y lo pintamos
			if(isset($mensaje)) echo $mensaje;
			//mensaje de errores en la forma
		
			//definimos los atributos del formulario
			$attributes = array('id' => 'registro', 'data-form'=>'validate');
			echo form_open('', $attributes);
			//inputs
			//pedimos nombre completo
			$data = array(
              'name'        => 'nombre',
              'id'          => 'nombre',
              'value'       => set_value('nombre',(isset($nombre) ? $nombre : '')),
              'maxlength'   => '40',
            );
			echo '<p>Nombre(s)</p><p>'.form_input($data).'</p>';
			
			$data = array(
              'name'        => 'apellido',
              'id'          => 'apellido',
              'value'       => set_value('apellido',(isset($apellido) ? $apellido : '')),
              'maxlength'   => '40',
            );
			echo '<p>Apellido(s)</p><p>'.form_input($data).'</p>';
			
			$data = array(
              'name'        => 'edad',
              'id'          => 'edad',
              'value'       => set_value('edad',(isset($edad) ? $edad : '')),
              'maxlength'   => '40',
            );
			echo '<p>Edad</p><p>'.form_input($data).'</p>';
			
			$data = array(
              'name'        => 'genero',
              'id'          => 'genero',
              'value'       => set_value('genero',(isset($genero) ? $genero : '')),
              'maxlength'   => '40',
            );
			echo '<p>Genero</p><p>'.form_input($data).'</p>';
			
			
			
			$data = array(
              'name'        => 'correo',
              'id'          => 'correo',
              'value'       => set_value('correo',(isset($correo) ? $correo : '')),
              'maxlength'   => '40',
              
            );
			echo '<p>Correo</p><p>'.form_input($data).'</p>';
			
			$data = array(
              'name'        => 'log',
              'id'          => 'log',
              'value'       => set_value('log',(isset($log) ? $log : '')),
              'maxlength'   => '10',
            );
			echo '<p>Usuario</p><p>'.form_input($data).'</p>';
			$data = array(
              'name'        => 'pas',
              'id'          => 'pas',
              'value'       => set_value('pas',(isset($pas) ? $pas : '')),
              'maxlength'   => '10'
            );
			echo '<p>Contraseña</p><p>'.form_input($data).'</p>';		
				
			
			$data = array(
              'name'        => 'equipofav',
              'id'          => 'equipofav',
              'value'       => set_value('equipofav',(isset($equipofav) ? $equipofav : '')),
              'maxlength'   => '40',
            );
			
			echo '<p>Equipo Favorito</p><p>'.form_input($data).'</p>';
			
			$data = array(
              'name'        => 'status',
              'id'          => 'status',
              'value'       => set_value('status',(isset($status) ? $status : '')),
              'maxlength'   => '40',
            );
			
			echo '<p>Status (1 ó 0)</p><p>'.form_input($data).'</p>';								
        	// datos adicionales
        	
        /*	?>
        </br>
        	<h2>Datos Academicos <a href="<?php echo base_url('personal/academico/'.$id_usuario); ?>">+</a></h2>
        	
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
			}	*/		
            //creamos boton de ingres y cerramos formulario 
			echo form_submit('guardar', 'Aceptar','id="boton"'); 
		
			echo form_close();
			echo "<div id='mensaje-error-forma'>";
			if(validation_errors()!=""){
				echo '<div class="errormsj"> <span> Error </span>'.validation_errors().'</div>';
				       } 
			echo "</div>";
			?>
</div>

