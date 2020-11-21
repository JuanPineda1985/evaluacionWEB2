<?php 

	class BaseDatos{


		//Variables == Atributos
		public $usuarioBD="root";
		public $passwordBD="";

		//funcion especial para sacar copias de la clase (el constructor)
		public function __construct(){}

		// funciones==metodos
		public function conexionBD(){

			try{
				$infoBD="mysql:host=localhost;dbname=megabazar";
				$conexionBD= new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
				return ($conexionBD);
			}catch(PDOExeption $error){
				echo ($error->getMessage());
			}
		}		
							
		public function agregarDatos($consultaSQL){

			//1. Conectar a la base de datos
			$conectarBD=$this->conexionBD();

			//2. Preparar la consulta
			$consultaAgregarDB= $conectarBD->prepare($consultaSQL);

			//3. Ejecutar la consulta
			$resultado=$consultaAgregarDB->execute();

			//4. verificar el resultado
			if ($resultado) {
				echo ("Registro Agregado con Exito");
			} else{
				echo ("error agregando el registro");
			}

		}

		public function buscarDatos($consultaSQL){

			//1. Conectar a la base de datos
			$conectarBD=$this->conexionBD();

			//2. Preparar la consulta
			$consultaBuscarDB= $conectarBD->prepare($consultaSQL);
									
			//3. Indicar cual es el metodo para traer los datos
			$consultaBuscarDB->setFetchMode(PDO::FETCH_ASSOC);

			//4. Ejecutar la consulta
			$consultaBuscarDB->execute();

			//5. Retornar los Datos consultados
			return($consultaBuscarDB->fetchAll());

		}
						
		public function eliminarDatos($consultaSQL){
						
			//1. Conectar a la base de datos
			$conectarBD=$this->conexionBD();

			//2. Preparar la consulta
			$consultaEliminarDB= $conectarBD->prepare($consultaSQL);

			//3. Ejecutar la consulta
			$resultado=$consultaEliminarDB->execute();

			//4. verificar el resultado
			if ($resultado) {
				echo ("Registro eliminado con Exito");
			} else{
				echo ("error eliminar el registro");
			}
		}	

		public function editarDatos($consultaSQL){

			//1. Conectar a la base de datos
			$conectarBD=$this->conexionBD();

			//2. Preparar la consulta
			$consultaEditarDB= $conectarBD->prepare($consultaSQL);

			//3. Ejecutar la consulta
			$resultado=$consultaEditarDB->execute();

			//4. verificar el resultado
			if ($resultado) {
				echo ("Registro editado con Exito");
			} else{
				echo ("error editando el registro");
			}

		}
							
						


	}
 ?>