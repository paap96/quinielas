
<div id="reg">
            <h2>Rellena tus datos bancarios:</h2>
    		<?php
    		
			
			echo form_open(base_url().'pago/tarjeta');
			
			
				
			$data = array(
              'name'        => 'calle',
              'id'          => 'calle',
              'value'       => set_value('calle',(isset($calle) ? $calle : '')),
              'maxlength'   => '40',
            );
			echo '<p>Calle: </p><p>'.form_input($data).'</p>';
			
			$data = array(
              'name'        => 'numero',
              'id'          => 'numero',
              'value'       => set_value('numero',(isset($numero) ? $numero : '')),
              'maxlength'   => '40',
            );
			echo '<p>Numero</p><p>'.form_input($data).'</p>';
			
			$data = array(
              'name'        => 'colonia',
              'id'          => 'colonia',
              'value'       => set_value('colonia',(isset($colonia) ? $colonia : '')),
              'maxlength'   => '40',
            );
			echo '<p>Colonia</p><p>'.form_input($data).'</p>';
			
			
			$data = array(
              'name'        => 'estado',
              'id'          => 'estado',
              'value'       => set_value('estado',(isset($estado) ? $estado : '')),
              'maxlength'   => '40',
              
            );
			echo '<p>Estado</p><p>'.form_input($data).'</p>';
			
			$data = array(
              'name'        => 'codigopost',
              'id'          => 'codigopost',
              'value'       => set_value('codigopost',(isset($codigopost) ? $codigopost : '')),
              'maxlength'   => '10',
            );
			echo '<p>Codigo postal</p><p>'.form_input($data).'</p>';
			$data = array(
              'name'        => 'tel',
              'id'          => 'tel',
              'value'       => set_value('tel',(isset($tel) ? $tel : '')),
              'maxlength'   => '10'
            );
			echo '<p>Telefono</p><p>'.form_input($data).'</p>';	
			
			$data = array(
              'name'        => 'tarjeta',
              'id'          => 'tarjeta',
              'value'       => set_value('tarjeta',(isset($tarjeta) ? $tarjeta : '')),
              'maxlength'   => '10'
            );
			echo '<p>Numero de Tarjeta: </p><p>'.form_input($data).'</p>';		
			//pedimos confirmaciòn de contraseña
		
			$data = array(
              'name'        => 'cvv',
              'id'          => 'cvv',
              'value'       => set_value('cvv',(isset($cvv) ? $cvv : '')),
              'maxlength'   => '40',
            );
			
			echo '<p>CVV: </p><p>'.form_input($data).'</p>';					      					
            //creamos boton de ingres y cerramos formulario 
            
			$submit = array(
			        'name' => 'submit',
			        'id' => 'submit',
			        'value' => 'Enviar datos',
			        'title' => 'Enviar datos'
			    );
  			echo   form_submit($submit);
				
			
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

