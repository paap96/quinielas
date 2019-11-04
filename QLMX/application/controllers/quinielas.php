<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quinielas extends CI_Controller {
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
			//Le digo enque seccion estamos
			$data['seccion']='quinielas';
			//defino where para academicos
			$datos=array('idpersonal'=>$this->session->userdata('id_usr'));
			$data['info_academica']=$this->final_db->obtenAcademicos($datos);
			//cargo el menu
			$data['cabezera']=$this->load->view('header',$data,TRUE);	
			$data['menu']=$this->load->view('menu_q',$data,TRUE);
			$data['contenido']=$this->load->view('v_quinielas',$data,TRUE);
			$this->load->view('layout_general',$data);
		}
		else
		{
			//de lo contrario mando a ingreso
			redirect('ingreso');			
		}
		}

	public function quiniela()
	{
		
		
		if($this->input->post('submit'))
		{
		$datos = array(
				'idusuario'	=> $this->session->userdata('id_usr'),
				'Ganador1' 		=>	$this->input->post('Ganador1'),
				'Ganador2' 		=>	$this->input->post('Ganador2'),
				'Ganador3' 		=>	$this->input->post('Ganador3'),
				'Ganador4' 		=>	$this->input->post('Ganador4'),
				'Ganador5' 		=>	$this->input->post('Ganador5'), 
				'Ganador6' 		=> 	$this->input->post('Ganador6'),
				'Ganador7' 		=>	$this->input->post('Ganador7'),
				'Ganador8' 		=>	$this->input->post('Ganador8')
				);
				if($this->final_db->insertaquiniela($datos))
			{
				//si se registra mando mensaje de exito
				$this->session->set_userdata('mensaje',' <p> Exito </p>');
				redirect('perfil');
			}
			else 
			{
				//mando mesaje de error
				$this->session->set_userdata('mensaje','<div class="errormsj"> <span>Error</span> <p>intente de nuevo</p></div>');
				redirect('ingreso/registro');
			}
				
				redirect("v_perfil");
		
		}
			
	}
}