<head>
		
		<link rel="stylesheet" type="text/css" href="css/slide.css">		
		<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="js/coin-slider.min.js"></script>
		<script type="text/javascript">
		  $(document).ready(function() {
		    $('#coin-slider').coinslider({ 
		    	width: 560, // width of slider panel
				height: 590, // height of slider panel
				spw: 7, // squares per width
				sph: 5, // squares per height
				delay: 3000, // delay between images in ms
				sDelay: 30, // delay beetwen squares in ms
				opacity: 0.7, // opacity of title and navigation
				titleSpeed: 500, // speed of title appereance in ms
				effect: '', // random, swirl, rain, straight
				navigation: true, // prev next and buttons
				links : true, // show images as links
				hoverPause: true // pause on hover
		    	});
		  });
		</script>
	</head>
<div id="perfil">
	<div id="izqui">

			<table class="quini">
				<tr>
					<td>locales</td>
					<td>empate</td>
					<td>visitantes</td>
				</tr>
				<?php 
			echo form_open(base_url().'quinielas/quiniela');
			?>
			<tr>
			    <td>  
			    Queretaro				     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador1',
    					'value'   => 'queretaro',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    					     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador1',
    					'value'   => 'empate',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador1',
    					'value'   => 'atlas',
						);
			    	echo form_radio($data); 
			    ?>
			    Atlas
			    </td>
			</tr> 
			
			<tr>
			    <td>  
			    Tijuana				     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador2',
    					'value'   => 'tijuana',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    					     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador2',
    					'value'   => 'empate',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador2',
    					'value'   => 'pachuca',
						);
			    	echo form_radio($data); 
			    ?>
			    Pachuca
			    </td>
			</tr> 
			
			<tr>
			    <td>  
			    America				     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador3',
    					'value'   => 'america',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    					     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador3',
    					'value'   => 'empate',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador3',
    					'value'   => 'puebla',
						);
			    	echo form_radio($data); 
			    ?>
			    Puebla
			    </td>
			</tr> 
			
			<tr>
			    <td>  
			    Monterrey				     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador4',
    					'value'   => 'monterrey',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    					     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador4',
    					'value'   => 'empate',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador4',
    					'value'   => 'pumas',
						);
			    	echo form_radio($data); 
			    ?>
			    Pumas
			    </td>
			</tr> 
			
			<tr>
			    <td>  
			    Leon				     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador5',
    					'value'   => 'leon',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    					     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador5',
    					'value'   => 'empate',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador5',
    					'value'   => 'santos',
						);
			    	echo form_radio($data); 
			    ?>
			    Santos
			    </td>
			</tr> 
			
			<tr>
			    <td>  
			    Monarcas				     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador6',
    					'value'   => 'monarcas',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    					     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador6',
    					'value'   => 'empate',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador6',
    					'value'   => 'cruz azul',
						);
			    	echo form_radio($data); 
			    ?>
			    Cruz Azul
			    </td>
			</tr> 
			
			<tr>
			    <td>  
			    Jaguares				     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador7',
    					'value'   => 'jaguares',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    					     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador7',
    					'value'   => 'empate',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador7',
    					'value'   => 'necaxa',
						);
			    	echo form_radio($data); 
			    ?>
			    Necaxa
			    </td>
			</tr> 
			
			<tr>
			    <td>  
			    Toluca			     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador8',
    					'value'   => 'toluca',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    					     
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador8',
    					'value'   => 'empate',
						);
			    	echo form_radio($data); 
			    ?>
			    </td>
			    <td>
			    <?php 
			    	$data = array(
			    		'name' => 'Ganador8',
    					'value'   => 'tigres',
						);
			    	echo form_radio($data); 
			    ?>
			    Tigres
			    </td>
			</tr> 
  			</table>
  			<?php 
  				$submit = array(
			        'name' => 'submit',
			        'id' => 'submit',
			        'value' => 'Enviar quiniela',
			        'title' => 'Enviar quiniela'
			    );
  			echo   form_submit($submit);
			echo form_close();
			if(isset($mensaje)) echo $mensaje;
			?>
	</div>
	<div id="derec">
		<div id='coin-slider'>
				  <a href="#" target="_blank">
				    <img src='img/1.jpg' >
				    <span>
				    
				    </span>
				  </a>
				  <a href="#">
				    <img src='img/2.jpg' >
				    
				  </a>
				  <a href="#">
				    <img src='img/3.jpg' >
				    
				  </a>
				  <a href="#">
				    <img src='img/4.jpg' >
				    
				  </a>
				  <a href="#">
				    <img src='img/5.jpg' >
				    
				  </a>
				</div>   
	</div>

</div>

