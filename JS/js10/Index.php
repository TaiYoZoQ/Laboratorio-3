<html>
	<head>
		
		<title>Variable de tipo objeto de dato</title>
		<meta charset="UTF-8"/>
		
		<style>
				
			#contenedora {
				background-color: LightBlue;
				width: 1800px;
				height: auto;
				text-align: left;
				margin: auto;
			}
			#contenedorb {
				background-color: #F1F6C4;
				width: 1800px;
				height: auto;
				text-align: left;
				margin: auto;
			}
     
			
		</style>
		
	</head>
	
	<body>
	
	<h1 style="margin: 0px">Consignas del ejercicio</h1>
	<h2>Declarar y hacer uso de Objetos de dato (dato de tipo objeto)<br>Carga de 2 personas a un array por programa<br>
	Dejar de usar la funcion prompt() para el ingreso de datos. Armar un contenedor para el ingreso de datos desde consola (solo inputs sin formulario)<br>
	Dejar de usar document.write() y escribir contenido dentro de un elemento html (puede ser un div)<br>
	Dos botones para llamar a dos funciones. Una para cargar un nuevo de objeto de dato por teclado y otra para mostrar en formato de tabla el array completo de elementos con su longitud.<br>
	Un tercer procedimiento para ocultar el elemento de presentaciódn (usando el parámetro de estilo display:none).</h2><br>
	
		<div id="contenedora">
		<header>
			
				<h2 style="margin: 0px">Adicionar persona</h2>
			
		</header>
		<main>
		
		<label for="Nombre"> Nombre:</label><br>
		<input type="text" name="Nombre" id="Nombre"/><br><br>					
		<label for="Apellido"> Apellido:</label><br>
		<input type="text" id="Apellido" name="Apellido"/><br><br>
		<label for="Saldo"> Fecha de Nacimiento:</label><br>
		<input type="text" id="FechaNac" name="FechaNac"/><br><br>
		
					<input type="button" id="CreaPersona" value="Crea Persona"/>
									
		<script>
		var botonPersona = document.getElementById("CreaPersona");
		var objetoPersona = {};		
		var objetoPersona = {nombre:"Pablo",apellido:"Maggiolo",fechaNac:"19/11/1950"};
		var arregloPersonas = [objetoPersona];
		arregloPersonas.push({nombre:"Jorge",apellido:"Perez",fechaNac:"21/05/1980"});
		
		var objetoPersonas = {personas : arregloPersonas};
		
		
    
		botonPersona.onclick = function ()
		{
		/*var objetoPersona = {nombre: document.getElementById("Nombre").value,apellido: document.getElementById("Apellido").value,fechaNac: document.getElementById("fechaNac").value};
		*/
    alert("hello"+document.getElementById("Nombre").value);   
    
		arregloPersonas.push({objetoPersona});
		}
	
		
		</script>
		</main>
		</div>
		<br>
		
		<div id="contenedorb">
			<header>
			<h2 style="margin: 0px">Control</h2>
			</header>
			<main>
				<input type="button" id="CrearListaPersonas" value="Lista Personas"/> <input type="button" id="OcultaPresentacion" value="Oculta presentacion"/>
				
			<script>
				var crear = document.getElementById("CrearListaPersonas");
				crear.onclick = function ()
				{		
					var texto = "<h1 style='margin 0px'>Presentación</h1>";
					
					texto = texto+"<table style='border-collapse:collapse;border:solid'>";
					
					arregloPersonas.forEach(function(item, indice){
					texto = texto+"<tr>";
					texto = texto+"<td>"+item.nombre+"</td>";
					texto = texto+"<td>"+item.apellido+"</td>";
					texto = texto+"<td>"+item.fechaNac+"</td>";
					texto = texto+"</tr>";
					});
					texto = texto +"</table>";
					texto = texto +"<h4>Longitud de arreglo de objetos: "+arregloPersonas.length+"</h4>";
					document.getElementById('presentacion').innerHTML = texto;
				}
          
					
					
					
				
			</script>
			</main>
			</div>
		<div id="presentacion">		
		
		</div>
	
	</body>
	
</html>