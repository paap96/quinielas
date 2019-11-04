<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ingreso extends CI_Controller {

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
		//borro variables de session
		$this->session->unset_userdata('validado');
		$this->session->unset_userdata('nombre_usr');
		$this->session->unset_userdata('id_usr');
		$this->session->unset_userdata('logueado');
		//mandamos reglas de validacion
		$this->form_validation->set_rules('log','Usuario','required');
		$this->form_validation->set_rules('pas','Contraseña','required');
		$this->form_validation->run();
		if(!$this->form_validation->run() == FALSE)
		{
			//datos para query
			$datos = array('log' =>$this->input->post('log'), 'pas' => $this->input->post('pas') );
			$datos_p = array('correo' =>$this->input->post('log'), 'pas' => $this->input->post('pas') );
			//tabla acceso (administradores)
			if($this->final_db->ConsultaUsuario($datos))
			{
				$datos=$this->final_db->consultaUsuarioBD($datos);
				foreach ($datos->result() as $result) {
					$usuario_bd=$result->log;
					$pas_bd=$result->pas;
					$status=$result->status;
					$nombre_usr_bd=$result->nombre_admin;
					$id_usr_bd=$result->id_acceso;
				}
				if($status==1)
				{
					if(($usuario_bd==$this->input->post('log')) && ($pas_bd==$this->input->post('pas')))
					{
						//mando a sessión
						$this->session->set_userdata('validado',TRUE);
						$this->session->set_userdata('nombre_usr',$nombre_usr_bd);
						$this->session->set_userdata('id_usr',$id_usr_bd);
						//$vaiable="valor";
						$this->session->set_userdata('nombre_variable_sess','valor');
						redirect('personal');
					}
					
					else 
					{
						$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Error</span> <p> usuario incorrecto.</p></div>');
						redirect('ingreso');
						
					}
					
				}
				else {
					$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Error</span> <p> Usuario inactivo.</p></div>');
					redirect('ingreso');
				}
				
			}
			//perparo datos query usuario publico		
			//valido que sea usuario
			elseif($this->final_db->ConsultaUsuarioPublico($datos_p))
			{
				$datos=$this->final_db->consultaUsuarioBDPublico($datos_p);
				foreach ($datos->result() as $result) {
					$usuario_bd=$result->correo;
					$pas_bd=$result->pas;
					$status=$result->status;
					$nombre_usr_bd=$result->nombre;
					$id_usr_bd=$result->id;
				}
				if($status==1)
				{
					if(($usuario_bd==$this->input->post('log')) && ($pas_bd==$this->input->post('pas')))
					{
						//mando a sessión
						$this->session->set_userdata('logueado',TRUE);
						$this->session->set_userdata('nombre_usr',$nombre_usr_bd);
						$this->session->set_userdata('id_usr',$id_usr_bd);
						//$vaiable="valor";
						//$this->session->set_userdata('nombre_variable_sess','valor');
						redirect('perfil');
					}
					
					else 
					{
						$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Error</span> <p> Sigue intentando.</p></div>');
						redirect('ingreso');
						
					}
					
				}
				else {
					$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Error</span> <p> Usuario inactivo.</p></div>');
					redirect('ingreso');
				}
			}
			//no lo deja pasar nunca
			//no lo dejamos pasar unca 
			else 
			{
				$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Error</span> <p> usuario/contraseña erroneos.</p></div>');
				redirect('ingreso');
			}
		}
		
		// Reviso si hay mensajes y los mando a las variables de la vista
		if($this->session->userdata('mensaje')) {
			$data['mensaje']=$this->session->userdata('mensaje');
			$this->session->unset_userdata('mensaje');
		}
		//mando titulo de la pagina
		$data['titulo']="Inicio";
		//cargo header
		$data['cabezera']=$this->load->view('header',$data,TRUE);
		//carco el contenido
		$data['contenido']=$this->load->view('ingreso',$data,TRUE);
		//mando a vista general
		$this->load->view('layout_general',$data);
	}


public function registro()
	{
		//mandamos reglas de validacion
		$this->form_validation->set_rules('nombre','Nombre','required|max_length[20]');
		$this->form_validation->set_rules('apellido','Apellido','required|max_length[20]');
		$this->form_validation->set_rules('edad','Edad','required|max_length[2]');
		$this->form_validation->set_rules('correo','Correo','required');
		$this->form_validation->set_rules('log','Usuario','required|min_length[4]');
		$this->form_validation->set_rules('pas','Contraseña','required|matches[pas');
		$this->form_validation->set_rules('pas2','Confirmar Contraseña','required|matches[pas]');
		$this->form_validation->set_rules('equipofav','Equipo Favorito','required|max_length[20]');
		$this->form_validation->run();
		if(!$this->form_validation->run() == FALSE)
		{
			//inserto en base de datos
			$datos = array(
				'nombre' 		=>	$this->input->post('nombre'),
				'apellido' 		=>	$this->input->post('apellido'),
				'edad' 		=>	$this->input->post('edad'),
				'genero' 		=>	$this->input->post('genero'),
				'correo' 		=>	$this->input->post('correo'),
				'log' 		=>	$this->input->post('log'), 
				'pas' 		=> 	$this->input->post('pas'),
				'equipofav' 		=>	$this->input->post('equipofav'),
				'status'	=>	'1'
				);
			if($this->final_db->insertaUsuario($datos))
			{
				//si se registra mando mensaje de exito
				$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Exito</span> <p> Por favor inicia sessiòn</p></div>');
				redirect('ingreso');
			}
			else 
			{
				//mando mesaje de error
				$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Error</span> <p> Ocurrio un problema al generar tu usuario, intente de nuevo</p></div>');
				redirect('ingreso/registro');
			}
		}
		// Reviso si hay mensajes y los mando a las variables de la vista
		if($this->session->userdata('mensaje')) {
			$data['mensaje']=$this->session->userdata('mensaje');
			$this->session->unset_userdata('mensaje');
		}
		
		$data['titulo']="Registro";
		$data['cabezera']=$this->load->view('header',$data,TRUE);
		$data['contenido']=$this->load->view('registro_vista',$data,TRUE);
		$this->load->view('layout_general',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */