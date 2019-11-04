
<div id="nuevo_empleado">
            <h2>Datos Academicos:</h2><br />
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
              'name'        => 'escuela',
              'id'          => 'escuela',
              'value'       => set_value('nombre',(isset($escuela) ? $escuela : '')),
              'maxlength'   => '45',
              'class'   => 'required'
            );
			echo '<p>Nombre de la escuela</p><p>'.form_input($data,'','required').'</p>';
			
			$data = array(
              'name'        => 'grado',
              'id'          => 'grado',
              'value'       => set_value('grado',(isset($grado) ? $grado : '')),
              'maxlength'   => '45'
            );
			echo '<p>Grado</p><p>'.form_input($data).'</p>';
			$data = array(
              'name'        => 'f_inicio',
              'id'          => 'f_inicio',
              'value'       => set_value('f_inicio',(isset($f_inicio) ? $f_inicio : '')),
              'maxlength'   => '10',
              'type'		=> 'date'
            );
			echo '<p>Fecha de inicio:</p><p>'.form_input($data).'</p>';
			$data = array(
              'name'        => 'f_fin',
              'id'          => 'f_fin',
              'value'       => set_value('f_fin',(isset($f_fin) ? $f_fin : '')),
              'maxlength'   => '10',
              'type'		=> 'date'
            );
			echo '<p>Fecha de termino:</p><p>'.form_input($data).'</p>';
					
									
        					
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

