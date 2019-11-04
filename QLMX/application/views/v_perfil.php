
<div id="perfil">
	<div id="izqui">
		<div id="foto">
			<div id="foto1">
			<img src="<?php echo base_url('uploads/'.$this->session->userdata('id_usr').'.jpg'); ?> " width="180" height="150"/>
			
			</div>
			
     
		</div>
		<div id="info">
			<table class="perfila">
								
				<tbody>	
						
					<?php 
					
					//validamos que exista infromacion y la asignamos 
					if(isset($info_personal) && $info_personal){ 
					//recorro e imprimo informacion		
					foreach ($info_personal->result() as $result) {
					
					    echo 
					     "<tr><td>Usuario: "
					    .$result->log.
					    "</td></tr>
					    <tr><td>Edad: "
					    	.$result->edad.
					    " años</td></tr>
					     <tr><td>Genero: "
					    .$result->genero.
					    "</td></tr>
					     <tr><td>Correo: "
					    .$result->correo.
					    "</td></tr>
					     <tr><td>Equipo favorito: "
					    .$result->equipofav.
					    "</td></tr>";					
					
						}
						}
						?>
						<tr><td>
							<?php echo  ($seccion=='quinielas' ?  'class="active"' : '') ?>
							<a   href="<?php echo base_url('quinielas');?>"> Hacer una quiniela</a>
						</td></tr>	
						<tr><td>
							<?php echo  ($seccion=='agregar amigo' ?  'class="active"' : '') ?>
							<a   href="<?php echo base_url('amigos');?>">Agregar amigos</a>
						</td></tr>		
						<tr><td>
							<?php echo  ($seccion=='subir foto' ?  'class="active"' : '') ?>
							<a   href="<?php echo base_url('uploadfile');?>">Agregar foto</a>
						</td></tr>
				</tbody>	
			</table>
			
			
		</div>
	</div>
	<div id="derec">
		<?php
		$attributes = array('id' => 'perfil', 'data-form'=>'validate');
			echo form_open('', $attributes);
			//inputs
			//pedimos nombre completo
			
                        
                        $data = array(
              'name'        => 'comentario',
              'id'          => 'comentario',
              'value'       => set_value('status',(isset($comentario) ? $comentario : ''))
            );
			echo '<p>comentar</p><p>'.form_textarea($data).'</p>';
			echo form_submit('guardar', 'Aceptar','id="boton"'); 
		
			echo form_close();
			echo "<div id='mensaje-error-forma'>";
			if(validation_errors()!=""){
				echo '<div class="errormsj"> <span> Error </span>'.validation_errors().'</div>';
				       } 
			//echo "</div>";
		if(isset($info_comentarios) && $info_comentarios)
			{
				//recorro e imprimo informacion		
				echo "<table>
						<tr>
							<td>usuario</td>
							<td>comentario</td>
							<td>nombre</td>
						<tr>";
						foreach ($info_comentarios->result() as $result) 
						{
							echo "<tr>
									<td>".$result->idusuario."</td>
									<td>".$result->comentario."</td>
									<td>".$result->nombre."</td>
							</tr>";
						}
				echo "</table>";
                        }
		
			?>
	</div>

</div>

