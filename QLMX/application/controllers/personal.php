<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personal extends CI_Controller {

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
		if($this->session->userdata('validado')==1)
		{
			//silo esta muestro vista
			//cargo datos de personal
			
			$cond=array(
					//'status'	=>	1
					);
			$data['info_personal']=$this->final_db->consultaPersonal($cond);	
				// Reviso si hay mensajes y los mando a las variables de la vista
			if($this->session->userdata('mensaje')) {
				$data['mensaje']=$this->session->userdata('mensaje');
				$this->session->unset_userdata('mensaje');
			}
			//Le digo enque seccion estamos
			$data['seccion']='empleados';
			//cargo el menu
			$data['cabezera']=$this->load->view('header',$data,TRUE);	
			$data['menu']=$this->load->view('menu',$data,TRUE);
			$data['contenido']=$this->load->view('personal',$data,TRUE);
			$this->load->view('layout_general',$data);
		}
		else
		{
			//de lo contrario mando a ingreso
			redirect('ingreso');			
		}
	}
	public function nuevo()
	{
		
		//mandamos reglas de validacion
		$this->form_validation->set_rules('log','Usuario','required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('pas','Contraseña','required|matches[pas');
		$this->form_validation->set_rules('pas2','Confirmar Contraseña','required|matches[pas]');
		$this->form_validation->set_rules('nombre_admin','Nombre Admin','required');
		$this->form_validation->run();
		if(!$this->form_validation->run() == FALSE)
		{
			//inserto en base de datos
			$datos = array(
				'id_acceso' 	=>	'', 
				'log' 		=>	$this->input->post('log'),
				'pas' 	=> 	$this->input->post('pas'), 
				'nombre_admin' 		=> 	$this->input->post('nombre_admin'),
				'status'		=>	1
				);
			if($this->final_db->insertaPersonal($datos))
			{
				//si se registra mando mensaje de exito
				$this->session->set_userdata('mensaje','<div class="exitomsj"> <span>Exito</span> <p> Admin Registrado</p></div>');
				redirect('personal');
			}
			else 
			{
				//mando mesaje de error
				$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Error</span> <p> Ocurrio un problema al guardar, intenta de nuevo</p></div>');
				redirect('personal/nuevo');
			}
		}
		// Reviso si hay mensajes y los mando a las variables de la vista
		if($this->session->userdata('mensaje')) {
			$data['mensaje']=$this->session->userdata('mensaje');
			$this->session->unset_userdata('mensaje');
		}
		
		//Le digo enque seccion estamos
		$data['seccion']='nuevo';
		//cargo el menu
		$data['cabezera']=$this->load->view('header',$data,TRUE);	
		$data['menu']=$this->load->view('menu',$data,TRUE);
		$data['contenido']=$this->load->view('registro_personal',$data,TRUE);
		$this->load->view('layout_general',$data);
	}
	public function ver($id)
	{
		if($id)
		{	//mando reglas de validacion
			//mandamos reglas de validacion
			$this->form_validation->set_rules('nombre','Nombre','required|min_length[5]|max_length[40]');
			$this->form_validation->set_rules('apellido','Apellido','required');
			$this->form_validation->set_rules('edad','Edad','required');
			$this->form_validation->set_rules('genero','Genero','required');
			$this->form_validation->set_rules('correo','Correo','required');
			$this->form_validation->set_rules('log','Usuario','required');
			$this->form_validation->set_rules('pas','Contraseña','required|matches[pas');
			$this->form_validation->set_rules('equipofav','Equipo Favorito','required|max_length[20]');
			$this->form_validation->set_rules('status','Status','required');
			$this->form_validation->run();
			if(!$this->form_validation->run() == FALSE)
			{
				//actualizo el registro
				$datos = array(
				'nombre' 		=>	$this->input->post('nombre'),
				'apellido' 	=> 	$this->input->post('apellido'), 
				'edad' 		=> 	$this->input->post('edad'),
				'genero' 			=> 	$this->input->post('genero'),
				'correo' 	=> 	$this->input->post('correo'),
				'log' 	=> 	$this->input->post('log'),
				'pas' 	=> 	$this->input->post('pas'),
				'equipofav' 	=> 	$this->input->post('equipofav'),				
				'status'		=>	$this->input->post('status')
				);
				if($this->final_db->actualizaPersonal($id,$datos))
				{
					//si se registra mando mensaje de exito
					$this->session->set_userdata('mensaje','<div class="exitomsj"> <span>Exito</span> <p> Usuario Actualizado</p></div>');
					redirect('personal');
				}
				else 
				{
					//mando mesaje de error
					$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Error</span> <p> Ocurrio un problema, intenta de nuevo</p></div>');
					redirect('personal/nuevo');
				}
			}
			// Reviso si hay mensajes y los mando a las variables de la vista
			if($this->session->userdata('mensaje')) {
				$data['mensaje']=$this->session->userdata('mensaje');
				$this->session->unset_userdata('mensaje');
			}
			//paso el id el usuario que stamso viendo
			$data['id_usuario']=$id;
			//datos para el query
			$datos=array('id'=>$id);
			$data['info_personal']=$this->final_db->obtenPersonal($datos);
			//defino where para academicos
			/*$datos=array('id'=>$id);
			$data['info_academica']=$this->final_db->obtenAcademicos($datos);*/
			//Le digo enque seccion estamos
			$data['seccion']='empleados';
			//cargo el menu
			$data['menu']=$this->load->view('menu',$data,TRUE);
			$data['contenido']=$this->load->view('registro_completo',$data,TRUE);
			$this->load->view('layout_general',$data);
		}
		else
			{
				redirect('personal');
			}
		
		
	}
	public function academico($id)
	{
		if($id)
		{
		//mandamos reglas de validacion
		$this->form_validation->set_rules('escuela','Nombre de la escuela','required|min_length[5]|max_length[45]');
		$this->form_validation->set_rules('grado','Grado Academico','required');
		$this->form_validation->set_rules('f_inicio','Fecha de Inicio','required');
		$this->form_validation->set_rules('f_fin','Fecha de Termino','required');
		
		$this->form_validation->run();
		if(!$this->form_validation->run() == FALSE)
		{
			//inserto en base de datos
			$datos = array(
				'idacademica' 	=>	'', 
				'escuela' 		=>	$this->input->post('escuela'),
				'grado' 		=> 	$this->input->post('grado'), 
				'f_inicio' 		=> 	$this->input->post('f_inicio'),
				'f_fin' 		=> 	$this->input->post('f_fin'),
				'status'		=>	1,
				'idpersonal'	=>	$id
				);
			if($this->final_db->insertaAcademica($datos))
			{
				//si se registra mando mensaje de exito
				$this->session->set_userdata('mensaje','<div class="exitomsj"> <span>Exito</span> <p> Registro agregado</p></div>');
				redirect('personal/ver/'.$id);
			}
			else 
			{
				//mando mesaje de error
				$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Error</span> <p> Ocurrio un problema al generar tu usuario, intente nuevo</p></div>');
				redirect('personal/academico');
			}
		}
		// Reviso si hay mensajes y los mando a las variables de la vista
		if($this->session->userdata('mensaje')) {
			$data['mensaje']=$this->session->userdata('mensaje');
			$this->session->unset_userdata('mensaje');
		}
		
		//Le digo enque seccion estamos
		$data['seccion']='nuevo';
		//cargo el menu
		$data['cabezera']=$this->load->view('header',$data,TRUE);	
		$data['menu']=$this->load->view('menu',$data,TRUE);
		$data['contenido']=$this->load->view('registro_academico',$data,TRUE);
		$this->load->view('layout_general',$data);
		}
		else {
			redirect('personal');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */