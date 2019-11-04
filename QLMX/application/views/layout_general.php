<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>QLMX</title>

<script type="text/javascript" src="<?php echo base_url('js/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
    oTable = $('#example').dataTable({
        "bJQueryUI": true,
        "sPaginationType": "two_button",
		"aaSorting":[[1,'asc']]
		
    });
	
} );
</script>
</head>
<link rel="shortcut icon" type="image/png" href="<?php echo base_url('imagenes/favicon.png');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css');?>"  />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/estilos_principal.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/tabla/demo_table_jui.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/smoothness/jquery-ui-1.8.4.custom.css');?>">
<body>
<div id="contenedor">
	<div id="cabezera">
		<?php if(isset($cabezera)) echo $cabezera; ?>
   		
   	</div>
   	<?php if(isset($menu)) echo $menu; ?>
    <div id="contenido">
    	
    	<?php if(isset($contenido)) echo $contenido; ?>
    </div>
    
</div>
</body>
</html>