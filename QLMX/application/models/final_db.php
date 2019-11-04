<?php
class Final_db extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
   /*
    * Obitene la lista de promociones en la base
    * @param $filter parametros de filtrado
    * @return objeto de consulta de la base
    * */
    	//cosultamos un usuario
	    function consultaUsuario($datos=false){
	    $this->db->where($datos);
  		$query = $this->db->get('admins');
		if ($query->num_rows() == 1){
			return true;
		}
		return false;
		
 	 	}
		function consultaPersonal($status){
		//condicion
		$this->db->where($status);	
  		$query = $this->db->get('usuarios');
		if ($query->num_rows() > 0){
			return $query;
		}
		return false;
		}
		function consultaUsuarioBD($datos=false){
		$this->db->where($datos); 
  		$query = $this->db->get('admins');
		if ($query->num_rows() == 1){
			return $query;
		}
		return false;
		}
		
		function insertaUsuario($datos=false){
  		$aleatoria = $this->db->insert('usuarios',$datos);
		if ($aleatoria== 1){
			return  true;
		}
		return false;
		}
		
		function insertaPersonal($datos){
  		$aleatoria = $this->db->insert('admins',$datos);
		if ($aleatoria== 1){
			return  true;
		}
		return false;
		}
		function obtenPersonal($datos){
		$this->db->where($datos); 
  		$query = $this->db->get('usuarios');
		if ($query->num_rows() > 0){
			return $query;
		}
		return false;
		}
		function actualizaPersonal($id,$datos){
		$this->db->where('id',$id); 
  		$query = $this->db->update('usuarios',$datos);
		if ($query== 1){
			return TRUE;
		}
		return false;
		}
		function insertaAcademica($datos){
  		$aleatoria = $this->db->insert('academica',$datos);
		if ($aleatoria== 1){
			return  true;
		}
		return false;
		}
   		function obtenAcademicos($datos){
		$this->db->where($datos); 
  		$query = $this->db->get('academica');
		if ($query->num_rows() > 0){
			return $query;
		}
		return false;
		}
		
		function consultaUsuarioPublico($datos=false){
	    $this->db->where($datos);
  		$query = $this->db->get('usuarios');
		if ($query->num_rows() == 1){
			return true;
		}
		return false;
		
 	 	}
		function consultaUsuarioBDPublico($datos=false){
		$this->db->where($datos); 
  		$query = $this->db->get('usuarios');
		if ($query->num_rows() == 1){
			return $query;
		}
		return false;
		}
		function consultaPersona($id){
		//condicion
		$this->db->where($id);	
  		$query = $this->db->get('usuarios');
		if ($query->num_rows() > 0){
			return $query;
		}
		return false;
		}
		
		function perfil1($status){
		//condicion
		$this->db->where($status);	
  		$query = $this->db->get('usuarios');
		if ($query->num_rows() > 0){
			return $query;
		}
		return false;
		}
		
		function insertaquiniela($datos){
  		$aleatoria = $this->db->insert('quiniela',$datos);
		if ($aleatoria== 1){
			return  true;
		}
		return false;
		}
		
		function insertatarjeta($datos){
  		$aleatoria = $this->db->insert('tarjetas',$datos);
		if ($aleatoria== 1){
			return  true;
		}
		return false;
		}
		
		function insertaComentario($datos){
  		$aleatoria = $this->db->insert('comentarios',$datos);
		if ($aleatoria== 1){
			return  true;
		}
		return false;}
                
                function obtenComentarios($datos){
		$this->db->where($datos); 
                $this->db->order_by("id_c","desc");
  		$query = $this->db->get('comentarios');
		if ($query->num_rows() > 0){
			return $query;
		}
		return false;
		}
}