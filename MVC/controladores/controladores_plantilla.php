<?php 
	
	class RutasControlador{
		public function Plantilla(){
			include "vistas/plantilla.php";
		}

		public function Rutas(){
				if(isset($_GET["rutas"])){
					$rutas = $_GET['rutas'];
				}
				else{
					$rutas = "index.php";
				}

				$respuesta = Modelo :: RutasModelos($rutas);

				include $respuesta;

			}

	}

	
 ?>