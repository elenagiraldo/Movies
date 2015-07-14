<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Galeria</title>
<link href="css.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="contenedor">
<div class="menu">
<tr>
	<td><a href="imagenes.php?poster=1"><img src="menu/sin_limites.jpg" class="boton" alt="Sin limites"/></a></td>
    
</tr>
<tr>
	<td><a  href="imagenes.php?poster=2"><img src="menu/mindscape.jpg"  class="boton" alt="Mindscape"/></a></td>
</tr>
<tr>
	<td><a href="imagenes.php?poster=3"><img src="menu/los_sustitutos.jpg" class="boton" alt="Los sustitutos"/></a></td>
</tr>
<tr>
	<td><a  href="imagenes.php?poster=4"><img src="menu/in_time.jpg"  class="boton" alt="In time"/></a></td>
</tr>
<tr>
	<td><a  href="imagenes.php?poster=5"><img src="menu/divergente.jpg"  class="boton" alt="Divergente"/></a></td>
</tr>
<tr>
	<td><a href="imagenes.php?poster=6"><img src="menu/guerra_mundialz.jpg" class="boton" alt="Guerra mundial z"/></a></td>
</tr>
<tr>
	<td><a  href="imagenes.php?poster=7"><img src="menu/oblivion.jpg"  class="boton" alt="Oblivion"/></a></td>
</tr>
<tr>
	<td><a href="imagenes.php?poster=8"><img src="menu/la_purga.jpg" class="boton" alt="La purga"/></a></td>
</tr>
<tr>
	<td><a  href="imagenes.php?poster=9"><img src="menu/juegos_del_hambre.jpg"  class="boton" alt="Juegos del hambre"/></a></td>
</tr>
<tr>
	<td><a  href="imagenes.php?poster=10"><img src="menu/correr_omorir.jpg"  class="boton" alt="Correr o morir"/></a></td>
</tr>
</div>
</div>
<?php
$pelicula = $_GET["poster"];
$ruta ="img/";
$posters = array("", "sin_limites", "mindscape", "los_sustitutos", "in_time", "divergente","guerra_mundialz","oblivion","la_purga", "juegos_del_hambre","correr_omorir");

$rutaImagen = $ruta . $posters["$pelicula"] . ".jpg";
$tamanio = filesize($rutaImagen);
$creado = filemtime($rutaImagen);
$modificado = filectime($rutaImagen);

if($tamanio < 1024){
	$medida = "b";
	}
	
if($tamanio >= 1024 && $tamanio < 1024000){
	$medida = "Kb";
	$tamanio /= 1000;
	}
	
if($tamanio > 1024000){
	$medida = "Mb";
	$tamanio /= 1000000;
	}
	
$sCreado = date("d/m/Y H:i:s",$creado);
$sModificado = date("d/m/Y H:i:s", $modificado);

$texto = array();
$texto[] = "";
$texto[] = "<h1>Sin Limites</h1><br/>Bradley Cooper y Robert De Niro son los protagonistas de Sin límites, un thriller de acción sobre un escritor fracasado, cuya vida se ve transformada por una “droga inteligente” secreta, que le permite usar el 100% de su capacidad cerebral y convertirse un una versión perfecta de sí mismo. Sus habilidades potenciadas no tardan en atraer fuerzas oscuras que ponen en peligro su nueva vida, dando lugar a una película provocativa y llena de suspense.";

$texto[] = "<h1>Mindscape</h1><br/>En un futuro cercano, se ha descubierto que ciertas personas tienen la habilidad de leer los recuerdos de las personas.<br/><br/> John es uno de ellos, y trabaja como detective para una agencia especializada en resolver crímenes y casos complicados mediante esta habilidad. John se encarga de un caso aparentemente sencillo: una adolescente que no se lleva bien con sus padres y se niega a comer.";

$texto[] = "<h1>Los Sustitutos</h1><br/>El FBI investigan el asesinato de un universitario relacionado con el hombre que participó en la creación del fenómeno high-tech de los substitutos, que permiten a la gente comprar versiones perfectas de sí mismos, en buena forma, guapos, y controlados por control remoto. Estas máquinas perfectas acaban asumiendo sus roles vitales, de modo que la gente puede experimentar la vida a través de otro cómodamente sentados en el sofá de su casa.";

$texto[] = "<h1>In Time</h1><br/>El hallazgo de una fórmula contra el envejecimiento trae consigo la transformación del tiempo en moneda de cambio que permite sufragar tanto lujos como necesidades. Los ricos pueden vivir para siempre, pero los demás tendrán que negociar cada minuto de vida, y los pobres mueren jóvenes. Tras conseguir, por casualidad, una inmensa cantidad de tiempo, Will, un joven obrero, será perseguido por los guardianes del tiempo.";

$texto[] = "<h1>Divergente</h1><br/>Divergente es la historia de una sociedad que se divide en cinco categorías:<br/> Verdad, Abnegación, Osadía, Cordialidad y Erudición.<br/> Todos tienen que elegir a una edad temprana, los dieciséis años, a qué bando creen pertenecer, atendiendo a sus virtudes personales más destacadas. En este dilema se encuentra la protagonista, Beatrice, que sorprende a todos sus allegados y amigos con la decisión que toma.";


$texto[] = "<h1>Guerra Mundial Z</h1><br/>Un experto investigador de las Naciones Unidas (Brad Pitt) es forzado a tratar de parar lo que podría ser el fin del mundo en una carrera contra el tiempo y el destino. La destrucción a la que se ve sometida la raza humana le hace recorrer el mundo entero buscando respuestas sobre cómo parar la horrible pandemia intentando salvar las vidas de millones de desconocidos así como la de su propia familia.";

$texto[] = "<h1>Oblivion</h1><br/>Oblivion es un acontecimiento cinematográfico tan original como innovador del director de 'TRON: Legacy' y del productor de 'El planeta de los simios'. En un futuro planeta Tierra espectacular que ha evolucionado hasta ser irreconocible, un hombre se enfrenta al pasado y toma el camino de la redención mientras lucha para salvar a la raza humana. Jack Harper es uno de los últimos mecánicos de aviones no tripulados destinados a la Tierra.";

$texto[] = "<h1>La Purga</h1><br/>Año 2022. En una futura sociedad distópica, el régimen político, llamado Nueva Fundación de los padres de América, ha decidido implantar una medida catárquica: la purga anual, según la cual una noche al año se puede cometer cualquier clase de crimen, sin tener que responder ante la justicia. Así, cuando esta norma se aplique y la vida de las familias corra peligro, se podrá comprobar hasta qué punto están en condiciones de protegerse.";

$texto[] = "<h1>Juegos del Hambre</h1><br/>Todos los años en las ruinas de lo que era una vez América del Norte, la nación de Panem obliga a cada uno de sus doce distritos a enviar a un chico y a una chica, para competir en Los juegos del hambre. Es un entretenimiento rebuscado y una táctica de intimidación por parte del gobierno. Los juegos del hambre son televisados y los “Tributos” tienen que luchar entre ellos hasta quedar solamente un superviviente.";

$texto[] = "<h1>Correr o morir</h1><br/>Cuando Thomas se despierta atrapado en un laberinto enorme, con un grupo de otros niños, él no tiene ninguna memoria del mundo exterior que no sean extraños sueños sobre una misteriosa organización conocida como C.R.U.E.L Sólo juntando fragmentos de su pasado con las pistas que descubre en el laberinto puede Thomas tener la esperanza de descubrir su verdadero propósito y una manera de escapar. Basado en la novela best-seller.";

$textos = $texto["$pelicula"];


?><div id="contenedor2">
<a href="galeria.html" div id="atras">Atrás</a>
      <div class="flip">
        <img src="<?php echo $rutaImagen;?>" class="img" />
        <span class="informacion">
          <?php  echo $textos."<br/><br/>";
		  echo "Tamaño:<br/> $tamanio $medida"."<br/><br/>";
		  echo "Creado:<br/> $sCreado"."<br/><br/>";
	      echo "Modificado:<br/> $sModificado"."<br/><br/>";
		  ?>
         </span>
         
      </div>

   
   </div>
</body>
</html>