<nav id="cssmenu">
	<ul>
		<li <?php echo  ($seccion=='empleados' ?  'class="active"' : '') ?>>
			<a   href="<?php echo base_url('personal');?>">Usuarios</a>
		</li> 
		<li <?php echo  ( $seccion=='nuevo' ?  'class="active"' : '') ?>>
			<a  href="<?php echo base_url('personal/nuevo');?>">Crear nuevo admin</a>
		</li> 
		<li <?php echo  ($seccion=='salir' ?  'class="active"' : '') ?>>
			<a   href="<?php echo base_url('ingreso');?>">Salir</a>
		</li>
	</ul>
	<p>Bienvenido: <?php echo $this->session->userdata('nombre_usr'); ?></p>
</nav>