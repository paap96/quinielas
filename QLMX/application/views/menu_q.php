<nav id="cssmenu">
	<ul>
		<li <?php echo  ($seccion=='pago' ?  'class="active"' : '') ?>>
			<a   href="<?php echo base_url('pago');?>">Forma de pago</a>
		</li> 
		<li <?php echo  ($seccion=='regresar' ?  'class="active"' : '') ?>>
			<a   href="<?php echo base_url('perfil');?>">Regresar</a>
		</li>
		<li <?php echo  ($seccion=='salir' ?  'class="active"' : '') ?>>
			<a   href="<?php echo base_url('ingreso');?>">Salir</a>
		</li>
		
	</ul>
	<p> <?php echo $this->session->userdata('nombre_usr'); ?></p>
</nav>