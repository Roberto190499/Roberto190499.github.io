<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<div id="h1">
	<button class="menu1" onclick="location.href='https://www.facebook.com/profile.php?id=100054213202901'"><img src="./administrador/archivos/diseño/f.png" width="25" height="25"></button>
	<button class="menu1" onclick="location.href='https://www.instagram.com/rhinosfitnessgym/'"><img src="./administrador/archivos/diseño/i.png" width="25" height="25"></button>
	<button class="menu1" onclick=""><img src="./administrador/archivos/diseño/t.png" width="25" height="25"> <FONT SIZE=5><b><u> 3332354220</u></b></font></button>
<a href="Entrenamientos/index.php" class="boton">Inicia sesion</a>
	<br>
<br>
<img src="./administrador/archivos/diseño/logobb12.png" width="150" height="150">
	
	<button class="menu" onclick="window.location='ubicacion.php'"  ><img src="./administrador/archivos/diseño/inicio.png" width="25" height="25"><b>  UBICACIÓN</b></button>
	<button class="menu" onclick="window.location='conocenos.php'" ><img src="./administrador/archivos/diseño/inicio.png" width="25" height="25"><b>  CONOCENOS</b></button>
	<button class="menu" onclick="window.location='Servicios.php'" ><img src="./administrador/archivos/diseño/inicio.png" width="25" height="25"><b>  SERVICIOS</b></button>
    <button class="menu2" onclick="window.location='index1.php'" disabled ><img src="./administrador/archivos/diseño/inicio.png" width="25" height="25"><b>  HOME</b></button>
</div>
<title>Home</title>
 <script src="Administrador/JS/jquery-3.3.1.min.js"></script>
<script>
 function recibe(){  
     id=<?php echo " $id";?>

     document.Forma01.method = 'post'
     document.Forma01.action = 'salva_carrito.php'
     document.Forma01.submit();
		//  }else(
		//alert('Error: Faltan campos por llenar');}
	  };
			
		
		</script>
 
 
 
 <style>
	 .boton {
  background-color: #4CAF50; /* Color de fondo */
  border: none; /* Sin borde */
  color: white; /* Color de texto */
  padding: 12px 24px; /* Tamaño del botón */
  text-align: center; /* Centrado */
  text-decoration: none;
  display: inline-block;
  font-size: 16px; /* Tamaño de fuente */
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px; /* Borde redondeado */
}

.boton:hover {
  background-color: #3e8e41; /* Color de fondo al pasar el mouse */
}
  #h1{
	   background-color: #ffffff;

		}

		.menu1{background-color: #fff;
			cursor: pointer;
		 border:0; 
		 color: #000 ;
		 float: right;
 }
 .menu2 {
  display: inline-block;
  font-size: 15px;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #0000ff;
  background-color: #ffffff;
  opacity: 1.0;
  border: 1;
  border-radius: 15px;
  float : right;
}
 
 .menu{background-color: #fff;
	    
		 border:0; 
		 cursor: pointer;
		 color: #000 ;
		 font-size: 15px;
		 float: right;
 }
  	
.td {
		  height: 300;
		  width : 33%;
		  color:#efb810;
		  font-size: 20px;
		  float: left;
		}
		
		
		body{
		background: linear-gradient(to bottom, #fff, #000);

		}
 footer {
  background:  #48AAAD;
  color:#FFFFFF;
  height: 63px;
  clear:both;
  width:100%;
 }
#h2{
	
		background-color: #000000;
        width: 100%;
		font-size: 18px;
}
#h3{
		width: 83.3%;
		color: red;
		border: 3px solid #000000;
		
}
#h4{
	background-image: url("./administrador/archivos/diseño/fondo_uno.jpg");
	background-repeat: no-repeat;
	width: 100%;
	background-size: 100% ;
	color: #ffffff;
}
#h5{
	width: 60%;
	float: left;

}
.h5{
	display: inline-block;
  padding: 10px 20px;
  background-color: #ff0000;
  color: #ffffff;
  border: 2px solid #ffffff;
  border-radius: 4px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
	}

	.h5:hover {
		background-color: #e60000;
}
	
.play{
}
</style>

</head>

<body>
<div id="h2" >
<div id="h4" >
<div id="h5" >
<br><br><br>
<center>
	<FONT SIZE=6><B> POR SOLO $350 AL MES<BR> Y<BR> SIN COSTO DE INSCRIPCIÓN</B></FONT>
	<br><br><br>
	¡Bienvenido a Rhino's Fitness Gym! Ofrecemos un ambiente cómodo, limpio y<br> 
	seguro con equipos de última generación y entrenadores altamente capacitados.<br>
	Estamos abiertos de lunes a sábado de 6 am a 11 pm y los domingos de 7 am a 2 pm.<br>
	Únete a nuestra comunidad hoy para mejorar tu salud y bienestar. ¡Te esperamos!<br><br><br><br><br><br>
	<button class="h5" onclick="window.location='Socios/index.php'"><b><U>  INSCRIBETE</b></button>

	<br><br><br><br><br>
	<button class="play" onclick="location.href='https://youtu.be/TmhvzxQzUrg'" ><img src="./administrador/archivos/diseño/play.png"></button>
	<br><br><br><br></center>
<br><br>
</div>


<center>
<?php

require "./administrador/funciones/conecta.php";
$con = conecta();
$idU = $_SESSION['idU'];
$nombre = $_SESSION['nombre'];


$sql = "SELECT *
		FROM banners
		WHERE status = 1 AND eliminado = 0";
$res = mysql_query($sql, $con);
$num = mysql_num_rows($res);

	
$archivo     = mysql_result($res, 0, "archivo");
$url         = mysql_result($res, 0, "url");
$eliminado     = mysql_result($res, 0, "eliminado");

	echo "<div class=\"columna\" ><a href=\"$url\"target=\"_blank\"><img src=\"./administrador/archivos/usuarios/$archivo\"></a></div>";
/*$archivo     = mysql_result($res, 1, "archivo");
$url         = mysql_result($res, 1, "url");
$eliminado     = mysql_result($res, 1, "eliminado");

	echo "<div class=\"columna\" ><a href=\"$url\"target=\"_blank\"><img src=\"./administrador/archivos/usuarios/$archivo\"width=\"600\" height=\"200\"></a></div>";

$i=rand(0, $num-1);


$archivo     = mysql_result($res, $i, "archivo");
$url         = mysql_result($res, $i, "url");
$eliminado     = mysql_result($res, $i, "eliminado");

	echo "<div class=\"columna\" ><a href=\"$url\"target=\"_blank\"><img src=\"./administrador/archivos/usuarios/$archivo\"width=\"600\" height=\"200\"></a></div>";
$n=0;*/

$sql = "SELECT *
		FROM productos
		WHERE status = 1 AND eliminado = 0 and stock < 1 AND stock > 0";
$res = mysql_query($sql, $con);
$num = mysql_num_rows($res);
echo "<br><br><center><br><br></center>";

for ($i = 0; $i < $num; $i++){
if($n<3){
	$n++;	
	$id 		= mysql_result($res, $i, "id");
	$nombre     = mysql_result($res, $i, "nombre");
	$codigo  = mysql_result($res, $i, "codigo");
	$costo  = mysql_result($res, $i, "costo");
	$stock  = mysql_result($res, $i, "stock");
	$eliminado  = mysql_result($res, $i, "eliminado");
	$archivo  = mysql_result($res, $i, "archivo");
	
    echo "<div class=\"td\"><center>";
	echo "<button id=\"$id\" onclick=\"window.location='detalle_producto.php?id=$id'\">";
	echo "<div class=\"concepto2\"><center><img src=\"./administrador/archivos/usuarios/$archivo\" width=\"100\" height=\"100\"></center><br></div>";
	echo "<div >$id<br></div>";
	echo "<br><div> $nombre <br></div>";
	echo "<div >$ $costo<br></div>";
	echo "<label for=\"cantidad\">cantidad:</label>";

	echo "</button><br>";
	
	//echo "<input type=\"number\" name=\"cantidad\" value =\"0\" min=\"0\" max=\"$stock\">";
	//echo "<input type=\"submit\" value=\"Agregar\" onclick=\"recibe(); return false;\" />";
	//echo "<div><button>Agregar: <br></button><div>";
	
	?>
<form name="Forma01" method="post" action="salva_carrito.php?id=<?php echo "$id" ?>" >
    <input type="number" name="cantidad" value ="0" min="0" max="<?php echo "$stock";?>">
    <input type="submit" value="Agregar" onclick="recibe(); return false;" />
	</form>
	<?php
	echo "</center></div>";
	}
}
?>
</div></div></center>

</body>
<footer>
<br><center><A HREF="http://localhost/Cliente01%20-%20HOSPITAL/Derechos%20reservados.pdf">TODOS LOS DERECHOS RESERVADOS 2020</A> |<A HREF="http://localhost/Cliente01%20-%20HOSPITAL/Términos%20y%20condiciones.pdf"> TERMINOS Y CONDICIONES</A> | <A HREF="http://localhost/Cliente01%20-%20HOSPITAL/Aviso%20de%20privacidad.pdf">POLITICAS DE PRIVACIDAD</A> | <A HREF="https://www.facebook.com/Empresa-_____-100897025219087">REDES SOCIALES</a></center>
</footer>
</html>