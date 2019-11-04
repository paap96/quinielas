
<div id="reg">
            <h2>Registrate:</h2>
    		<?php
    		
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
			
			?>
			<br>
			<table class="normal">
			<tr>
			    <td align="right">   
			    	Genero
			    </td>
			    <td>:</td>
			    <td align="center">  
			    Masculino 
			    <?php 
			    	$data = array(
			    		'name' => 'genero',
    					'value'   => 'Masculino',
						);
			    	echo form_radio($data); 
			    ?>
			    Femenino 
			    <?php 
			    	$data = array(
			    		'name' => 'genero',
    					'value'   => 'Femenino',
						);
			    	echo form_radio($data); 
			    ?>
			    
			    </td>
			</tr> 
  			</table>
  			<br>
  			<?php
			
			$data = array(
              'name'        => 'correo',
              'id'          => 'correo',
              'value'       => set_value('correo',(isset($correo) ? $correo : '')),
              'maxlength'   => '40',
              'type'		=> 'email'
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
			echo '<p>Contraseña</p><p>'.form_password($data).'</p>';		
			//pedimos confirmaciòn de contraseña
			$data = array(
              'name'        => 'pas2',
              'id'          => 'pas2',
              'value'       => set_value('pas2',(isset($pas2) ? $pas2 : '')),
              'maxlength'   => '10'
            );
			echo '<p>Confirmar Contraseña</p><p>'.form_password($data).'</p>';	
			
			$data = array(
              'name'        => 'equipofav',
              'id'          => 'equipofav',
              'value'       => set_value('equipofav',(isset($equipofav) ? $equipofav : '')),
              'maxlength'   => '40',
            );
			
			echo '<p>Equipo Favorito</p><p>'.form_input($data).'</p>';					      					
            //creamos boton de ingres y cerramos formulario 
            ?>
            <br>
			<table class="normal1">
				<tr>
					<td>
						<?php echo   form_submit('guardar', 'registrar','id="boton2"'); ?>
					</td>
				</tr>
			</table>	
			<?php
			echo form_close();
			echo "<div id='mensaje-error-forma'>";
			if(validation_errors()!=""){
				echo '<div class="errormsj"> <span> Error </span>'.validation_errors().'</div>';
				       } 
			echo "</div>";
			//validamos q si existe un mensaje y lo pintamos
			if(isset($mensaje)) echo $mensaje;
			?>
</div>

