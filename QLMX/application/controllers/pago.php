<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pago extends CI_Controller {

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
			$data['seccion']='pago';
			
			$data['cabezera']=$this->load->view('header',$data,TRUE);	
			$data['menu']=$this->load->view('menu_p',$data,TRUE);
			$data['contenido']=$this->load->view('v_pago',$data,TRUE);
			$this->load->view('layout_general',$data);
		}
		else
		{
			//de lo contrario mando a ingreso
			redirect('ingreso');			
		}
		
	}
	
	public function tarjeta()
	{
		
		
		if($this->input->post('submit'))
		{
		$datos = array(
				
				'idusuario'	=> $this->session->userdata('id_usr'),
				'calle' 		=>	$this->input->post('calle'),
				'numero' 		=>	$this->input->post('numero'),
				'colonia' 		=>	$this->input->post('colonia'),
				'estado' 		=>	$this->input->post('estado'),
				'codigopost' 		=>	$this->input->post('codigopost'), 
				'tel' 		=> 	$this->input->post('tel'),
				'tarjeta' 		=>	$this->input->post('tarjeta'),
				'cvv' 		=>	$this->input->post('cvv')
				);
				$this->final_db->insertatarjeta($datos);
				redirect("quinielas");
		
		}
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */