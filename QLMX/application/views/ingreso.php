<div id="inicio1">
	<h3>Bienvenido, QLMX te ayuda a comunicarte con tus amigos y realizar quinielas de la liga 
		Mexicana te invitamos a <?php echo "<a   href=".base_url('ingreso/registro').">Registrarte</a>";?> o iniciar sesión.</h3>	
</div>

<div id="inicio2"> 
	<div id="inicio3">
	            <h2>Ingresa tu correo y contraseña:</h2><br />
	    		<?php
	    		
				//mensaje de errores en la forma
			
				//definimos los atributos del formulario
				$attributes = array('id' => 'ingreso', 'data-form'=>'validate');
				echo form_open('', $attributes);
				//inputs
				$data = array(
	              'name'        => 'log',
	              'id'          => 'log',
	              'value'       => set_value('log',(isset($log) ? $log : '')),
	              'maxlength'   => '30',
	            );
				// set_value('log',(isset($log) ? $log : '')), valida si existe el valor y o imprime
				echo '<p>Correo</p><p>'.form_input($data).'</p>';
				$data = array(
	              'name'        => 'pas',
	              'id'          => 'pas',
	              'value'       => set_value('pas',(isset($pas) ? $pas : '')),
	              'maxlength'   => '20'
	            );
				echo '<p>Contraseña</p><p>'.form_password($data).'</p>';							
	            //creamos boton de ingres y cerramos formulario 
				echo form_submit('guardar', 'Entrar','id="boton"');
			
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
</div>	
