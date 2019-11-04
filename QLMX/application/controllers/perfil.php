<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {

	/**
		
	 */
	  function __construct()
    {
        parent::__construct();
	
		$this->load->model('final_db');
		$this->form_validation->CI =& $this;
    }	
	public function index()
	{
		//validamos que este autentificado
		if($this->session->userdata('logueado')==1)
		{
		
			$this->form_validation->set_rules('comentario','comentario','required');
		$this->form_validation->run();
		if(!$this->form_validation->run() == FALSE)
		{
			//inserto en base de datos
			$datos = array(
				'nombre'	=> 	$this->session->userdata('nombre_usr'),
                'comentario'	=> 	$this->input->post('comentario'),
				'idusuario'	=>	$this->session->userdata('id_usr'),
				//'borrar' => '0'
				);
			if($this->final_db->insertaComentario($datos))
			{
				//si se registra mando mensaje de exito
				$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Exito</span> <p> Se registro tu comentario</p></div>');
				redirect('perfil');
			}
			else 
			{
				//mando mesaje de error
				$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Error</span> <p> Ocurrio un problema al generar tu usuario, intede nuevo</p></div>');
				
			}
		}
		// Reviso si hay mensajes y los mando a las variables de la vista
		if($this->session->userdata('mensaje')) {
			$data['mensaje']=$this->session->userdata('mensaje');
			$this->session->unset_userdata('mensaje');
		}
			//condicin del query
			$cond=array(
					'id'	=>	$this->session->userdata('id_usr')
					);
			$data['info_personal']=$this->final_db->consultaPersona($cond);	
				// Reviso si hay mensajes y los mando a las variables de la vista
			if($this->session->userdata('mensaje')) {
				$data['mensaje']=$this->session->userdata('mensaje');
				$this->session->unset_userdata('mensaje');
			}
			
			$activo='0';
            $datos=array('borrar'=>$activo);
	        $data['info_comentarios']=$this->final_db->obtenComentarios($datos);
			//Le digo enque seccion estamos
			$data['seccion']='Perfil';
			//defino where para academicos
			$datos=array('idpersonal'=>$this->session->userdata('id_usr'));
			$data['info_academica']=$this->final_db->obtenAcademicos($datos);
			//cargo el menu
			$data['cabezera']=$this->load->view('header',$data,TRUE);	
			$data['menu']=$this->load->view('menu_p',$data,TRUE);
			$data['contenido']=$this->load->view('v_perfil',$data,TRUE);
			$this->load->view('layout_general',$data);
		}
		else
		{
			//de lo contrario mando a ingreso
			redirect('ingreso');			
		}
		
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */