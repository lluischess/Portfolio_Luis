<?php

# Conexion a la BDD

class Conexion extends mysqli{

	public  function __construct(){
		parent::__construct('localhost','paraelor_lluis','Rotalon-22','paraelor_Projects_portfolio_lluis'); // Conexion a la base de datos
		$this->query("SET NAMES 'utf8';");
		$this->connect_errno ? die('ERROR: Conexion fallida ') : null; // si da error se compacta
	}

	// array 
	public  function recorrer($y){
		return mysqli_fetch_array($y);
	}
	
	public  function liberar($y){
		return mysqli_free_result($y);
	}

	/*Para devolver las filas  encontradas de la base de datos*/
	public  function  rows($y){
		return mysqli_num_rows($y);

	}

}

class Proyecto
         {
            #Atributos  

            private $Titulo_Proyecto;
            private $Titulo2_Proyecto;
            private $Imagen_Proyecto;
            private $Descripcion_Proyecto;
            private $Github;
            private $Demo;

            public function __construct()
            {
               
            }

            # Getters

            public function get_Titulo_Proyecto(){
              return $this->Titulo_Proyecto;
            }
            public function get_Titulo2_Proyecto(){
              return $this->Titulo2_Proyecto;
            }
            public function get_Imagen_Proyecto(){
              return $this->Imagen_Proyecto;
            }
            public function get_Descripcion_Proyecto(){
              return $this->Descripcion_Proyecto;
            }
            public function get_Github(){
              return $this->Github;
            }
            public function get_Demo(){
              return $this->Demo;
            }

            # Setters

            public function  setTitulo_Proyecto($Titulo_Proyecto)
            {
               $this->Titulo_Proyecto = $Titulo_Proyecto;
            }
            public function  setTitulo2_Proyecto($Titulo2_Proyecto)
            {
               $this->Titulo2_Proyecto = $Titulo2_Proyecto;
            }
            public function  setImagen_Proyecto($Imagen_Proyecto)
            {
               $this->Imagen_Proyecto = $Imagen_Proyecto;
            }
            public function  setDescripcion_Proyecto($Descripcion_Proyecto)
            {
               $this->Descripcion_Proyecto = $Descripcion_Proyecto;
            }
            public function  setGithub($Github)
            {
               $this->Github = $Github;
            }
            public function  setDemo($Demo)
            {
               $this->Demo = $Demo;
            }

            #Metodos

            public function SelectfullProjects(){
              $db = new Conexion();
              $sql = $db->query("SELECT * FROM T_projects ORDER BY id DESC; ");
              if ($db->rows($sql) > 0) {
                  while ($t = $db->recorrer($sql)) {
                      $datos[] =  array(
                          'id' => $t['id'],
                          'fTitle' =>$t['fTitle'],
                          'fTitle2' => $t['fTitle2'],
                          'fImg' => $t['fImg'],
                          'fDesc' => $t['fDesc'],
                          'fGithubLink' => $t['fGithubLink'],
                          'fDemoLink' => $t['fDemoLink']
                      );
                  }
                  return $datos;
              }
            }
         }




?>