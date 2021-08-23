<?php 

class Modelo{
		static public function RutasModelos($rutas){

			if($rutas == "registro_problema" || $rutas == "login" || $rutas == "registro" ){

				$pagina = "vistas/modulos/".$rutas.".php";
		}else{
			$pagina = "vistas/modulos/login.php";
		}

			return $pagina;
	}
}
 ?>