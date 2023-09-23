<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Orange, cuando tienes todo el f&uacute;tbol y lo sabes</title>
 
<!--<link href="estilos.css" rel="stylesheet" type="text/css" >-->
</head>

	
	
<body>
	<header>
	<?
include 'bd.php';
?>
<div>fdsf</div>	
		
		
	</header>
<main>
	<div class="form-column-100">
		<h1>Rellena los premios a entregar</h1>
		<h4><span class="obligatorio">*</span> Los campos con asterisco son obligatorios aseg&uacute;rate que rellenas los campos correctamente</h4>
		
		
	</div>	
	  <div class="limpia">
		</div>
	
  <form action="comprueba_flyer.php" method="POST">
  	<div class="form-column-100">
			<label for="sfid">Sfid de la tienda <span class="obligatorio">*</span></label><br>
    		<input name="sfid" type="text" required="requiered" id="sfid" autocomplete="off"><br>
		</div>


		<div class="form-column-50" id="form-column-1">
  			<label for="name">Nombre y apellidos <span class="obligatorio">*</span><br>
    		</label>
    		<input type="text" name="name" id="name" required="requiered" autocomplete="off"><br>	
			
					
    		<label for="segmento">Segmento (Particular o empresa)<span class="obligatorio">*</span></label>
    		<br>
			 <select name="segmento" required="required" id="segmento">
			   <option>Seleccionar...</option>
			   <option value="particular">Particular</option>
			   <option value="empresa">Empresa</option>
          </select>
   		 
   		 
         
          <br>
			
   		  <label for="email">E-mail <span class="obligatorio">*</span></label><br>
    		<input name="email" type="email" required="requiered" id="email" autocomplete="off"><br>
			<label for="email">¿Dónde te gusta ver el futbol?<span class="obligatorio">*</span></label>
    		<br>
			 <select name="donde_futbol" required="required" id="donde_futbol">
			   <option value="vacio">Seleccionar...</option>
			   <option value="En casa">En casa</option>
			   <option value="Local fuera de casa">Local fuera de casa</option>
			   <option value="En el estadio">En el estadio</option>	 
			   <option value="Todos los anteriores">Todos los anteriores</option>	 				 
			   
          </select>
		</div>
		<div class="form-column-50" id="form-column-2">    
			
			 <label for="telefono">Tel&eacute;fono de contacto <span class="obligatorio">*</span></label><br>
			<input name="telefono" type="tel" required="requiered" id="telefono" autocomplete="off" maxlength="9"><br>
			
			
			
    		<label for="dni">DNI <span class="obligatorio">*</span></label><br>
    		<input name="dni" type="text" required="requiered" id="dni" autocomplete="off" maxlength="10"><br>
		   
			<label>Partido en el que recibió la promoción <span class="obligatorio">*</span> </label>
			<?php
				/*$partidos = lista_partidos_jugables();-->*/
				if ($partidos == TRUE){
					echo "<select name='partido_promo' id='partido_promo' required='required'>";
					echo '<option value=""> Seleccione partido...</option>' ; 
					while ($columna = mysqli_fetch_array( $partidos )){
						echo '<option value="' . $columna['cod_partido']. '">'.$columna['Nombre'].'</option>' ;
					}
					echo "</select>";
				}
			    else {
					echo "<select name='partido_promo' id='partido_promo'>";
					echo '<option value="9999"> No hay partidos</option>' ;
					echo "</select> <br>";
				}
			?>
			<div class="form-column-60 contenedor_padre">
			<label for="cliente_orange" class="contenedor_hijo">¿Eres cliente de Orange? </label>
    		<label class="contenedor_hijo">
      			<input type="radio" name="cliente_orange" value="1" id="cliente_orange_0"> Si
			</label>
		    <label class="contenedor_hijo">
      			<input type="radio" name="cliente_orange" value="0" id="cliente_orange_1">  No
			</label>
			</div>			
		</div>   
		<div class="limpia">
		</div>
		<div class="form-column-100 contenedor_padre">
			
		</div>	
	  <div class="limpia">
		</div>
		<div class="form-column-100">
			
		</div>
	  <div class="limpia">
		</div>
	  	
	  <div class="form-column-100">
			
			<input name="recibir_info" type="checkbox"  autocomplete="off" checked="checked" > 
			<label for="recibir_info">El cliente consiente recibir información comercial o promociones de Orange España </label>
			
		</div>
	  <div class="form-column-100">
			
			<input name="cesion_datos" type="checkbox"  autocomplete="off" checked="checked" > 
			<label for="cesion_datos">El cliente consiente la cesión de sus datos a las empresas del Grupo Orange para recibir de estas información comercial de sus productos y servicios</label>
			
		</div>
	  <div class="limpia">
	</div>
	  <div class="form-column-50" id="footer_left">
 <!-- <img src="fotos/orange.png" width="20%" height="auto" alt=""/> --></div>	
	
	<div class="form-column-100" id="form-column-1">
		<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <th scope="col" class="th_clientes"><input type="submit" name="salir" id="salir" value="Salir" onclick = "location='../inicio'"/></th>
		<th class="th_clientes">&nbsp;</th>
      <th scope="col" class="th_clientes"><input type="submit" name="submit" id="submit" value="Enviar" ></th>
    </tr>
  </tbody>
</table>

			
		    
		</div>	
	  <div class="form-column-50" id="form-column-2">
			
		</div>
  </form>
</main>		

</body>
</html>
