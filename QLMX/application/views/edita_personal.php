<div id="nuevo_empleado">
            <h2>Registrate:</h2><br />
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
              'class'   => 'required'
            );
			echo '<p>NOMBRE</p><p>'.form_input($data,'','required').'</p>';
			
			$data = array(
              'name'        => 'nacimiento',
              'id'          => 'nacimiento',
              'value'       => set_value('nacimiento',(isset($nacimiento) ? $pas : '')),
              'maxlength'   => '10'
            );
			echo '<p>NACIMIENTO</p><p>'.form_input($data).'</p>';		
			//pedimos confirmaciòn de contraseña
			$data = array(
              'name'        => 'status',
              'id'          => 'status',
              'value'       => set_value('status',(isset($status) ? $status : '')),
              'maxlength'   => '10'
            );
			echo '<p>Estado</p><p>'.form_input($data).'</p>';							
        					
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

