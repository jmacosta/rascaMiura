<?PHP

	/*$servidor = "localhost";
	$user = "mypro9045";
	$password = "0aI0WzUF";	
	$db_name = "futbolorange";*/

	$servidor = "localhost";
	$user = "myrascadem";
	$password = "25RV0VAY";	
	$db_name = "277334619wordpress20211015141500";

function conecta_bd (){
	$servidor = "localhost";
	$user = "myrascadem";
	$password = "25RV0VAY";	
	$db_name = "277334619wordpress20211015141500";
	$con=mysqli_connect($servidor ,$user,$password) or die("No se puede conectar con la base de datos 1");
    $db=mysqli_select_db($con, $db_name) or die("No se puede conectar con la base de datos 2");
	return $con;
}

function desconecta_bd($con){
	mysqli_close ( $con );
}
function listaEquipos(){
	$con = conecta_bd();
	$result = mysqli_query ($con, "SELECT  *  FROM `equipos`") or die("No se puede conectar con la base de datos 3");
	desconecta_bd($con);
	if ($result == TRUE){
		$i=0;	
		while ($columna = mysqli_fetch_array( $result )){
				$equipo[$i] = $columna['equipo'];
				$i++;		
			}
	}
	else {
		echo "error al cargar nombre_partido";
	}
		
	return $equipo;
}
function listaRegalos(){
	$con = conecta_bd();
	$result = mysqli_query ($con, "SELECT  *  FROM `premios`") or die("No se puede conectar con la base de datos 3");
	desconecta_bd($con);
	if ($result == TRUE){
		$i=0;	
		while ($columna = mysqli_fetch_array( $result )){
				$regalo[$i] = $columna['regalo'];
				$i++;		
			}
	}
	else {
		echo "error al cargar nombre_regalo";
	}
		
	return $regalo;
}	

?>