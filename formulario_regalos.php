<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Orange, cuando tienes todo el f&uacute;tbol y lo sabes</title>
 
<link href="estilos.css" rel="stylesheet" type="text/css" >
</head>

	
	
<body>
	<header>
	<?
include 'bd.php';
?>
<div><h1>Por Añadir</h1></div>	
		
		
	</header>
	
	

<main>
		
  <form action="registro_regalos.php" method="POST">
  	<div class="form-column-100">
		<div class="column-70">
			<div>
				<h3 class="labelForm">Equipo</h3>
			</div>
			<!--esto se repite con cada regalo dado de alta-->
			<!--rescato numero de regalos-->
			<div class="camposFormulario">
				<?
					echo('<select name="equipo" required="required" id="equipo">'); 
					echo('<option value="vacio">Seleccionar...</option>');
					// consulta que saca nombres de equipos
				    $equipo = listaEquipos();
					$limiteRegistrosEquipos = count($equipo); // to do numero de registros en tabla equipos
					for($j=0;$j<$limiteRegistrosEquipos;$j++){
						//$equipo = 'Equipo_XX'; // nombre del equipo recibido en la consulta
						echo('<option value='.$equipo[$j].'>'.$equipo[$j].'</option>');		   			
					}
					echo('</select>');				
				?>
			</div>
			<div>
				<h3 class="labelForm">Regalos</h3>
			</div>
			<div class="camposFormulario">
				<?
				$nomRegalo=listaRegalos();
				$limiteRegistrosRegalos =count($nomRegalo);; // to do numero de registros en tabla regalos
				for($i=0;$i<$limiteRegistrosRegalos;$i++){
				echo('<p>');	
				echo('<label for="cantidad_'.$i.'">'.$nomRegalo[$i].'</label><br>');
    			echo('<input type="text" name="cantidad_'.$i.'"  id="cantidad_'.$i.'" autocomplete="off">');
				echo('</p>');	
				}
				?>
			</div>
			<div>
				<h3 class="labelForm">Intervalo de jugadas</h3>
			</div>
			<div class="camposFormulario">
			<input type="text" name="jugadas" id="jugadas" autocomplete="off">		
			</div>
			
			<div class="form-column-50" id="form-column-1">
			<input type="submit" name="submit" id="submit" value="Enviar">
		</div>
	    <div class="form-column-50" id="form-column-2">
			<input type="submit" name="submit" id="submit" value="Salir" onclick = "location='../home.html'"/>
		</div>	

		
		
		
	  </div>
  </form>
</main>		
<footer>
	
	
</footer>
</body>
</html>
