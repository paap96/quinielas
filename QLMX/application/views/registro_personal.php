<?php
if(isset($info_personal) && $info_personal){ 
		//recorro e imprimo informacion		
		foreach ($info_personal->result() as $result) {
				$log=$result->log;
				$pas=$result->pas;
				$pas2=$result->pas2;
				$nombre_admin=$result->nombre_admin;
				
			}


}
?>
<div id="nuevo_empleado">
            <h2>Registra un nuevo admin:</h2><br />
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
              'name'        => 'log',
              'id'          => 'log',
              'value'       => set_value('log',(isset($log) ? $log: '')),
              'maxlength'   => '40',
              'class'   => 'required'
            );
			echo '<p>Nombre de admin</p><p>'.form_input($data,'','required').'</p>';
			
			$data = array(
              'name'        => 'pas',
              'id'          => 'pas',
              'value'       => set_value('pas',(isset($pas) ? $pas : '')),
              'maxlength'   => '10',
              
            );
			echo '<p>Contraseña</p><p>'.form_password($data).'</p>';
			
			$data = array(
              'name'        => 'pas2',
              'id'          => 'pas2',
              'value'       => set_value('pas2',(isset($pas2) ? $pas2 : '')),
              'maxlength'   => '10'
            );
			echo '<p>Confirmar Contraseña</p><p>'.form_password($data).'</p>';
			
			$data = array(
              'name'        => 'nombre_admin',
              'id'          => 'nombre_admin',
              'value'       => set_value('nombre_admin',(isset($nombre_admin) ? $nombre_admin : '')),
              'maxlength'   => '40',
            );
			echo '<p>Nombre</p><p>'.form_input($data).'</p>';	
					
			//pedimos confirmaciòn de contraseña
									
        					
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

