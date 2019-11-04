<?php
class uploadfile extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    //index function
    function index()
    {
        //load file upload form
        
        	
        	$data['seccion']='regresar';
        	
		$data['cabezera']=$this->load->view('header',$data,TRUE);
		$data['contenido']=$this->load->view('upload_file_view',$data,TRUE);
		$this->load->view('layout_general',$data);
    }

    //file upload function
    function upload()
    {
        //set preferences
        if($this->session->userdata('logueado')==1){
         $id=$this->session->userdata('id_usr');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['file_name']=$this->session->userdata('id_usr');
        

        //load upload class library
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename'))
        {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_file_view', $upload_error);
        }
        else
        {
            // case - success
            $upload_data = $this->upload->data();
            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
            $data['titulo']="Registro";
            $data['seccion']='regresar';
		$data['cabezera']=$this->load->view('header',$data,TRUE);
		$data['menu']=$this->load->view('menu_u',$data,TRUE);
		$data['contenido']=$this->load->view('upload_file_view',$data,TRUE);
		$this->load->view('layout_general',$data);
		}
        }
    }
}
?>