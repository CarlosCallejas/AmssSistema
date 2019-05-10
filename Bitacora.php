<html>
    <head>
	    <title>mostrar Bitacora</title>
    </head>

    <BODY>
        <p><a href='PantallaAdmi.html'>Regresar</a></p>
        <table border="1" >
		    <tr>
	    		<td>Id</td>
    			<td>nombre</td>
			    <td>correo</td>
			    <td>Administrador</td>
			    <td>Habilitado</td>	
		    </tr>

            <?php
            include 'conn.php';	
                // Connection variables
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

                if (!$conn) {
                    die("Conexión fallida: " . mysqli_connect_error());
                }
                
                $result = $conn->query("SELECT * FROM user");

                while($mostrar=mysqli_fetch_array($result)){
            ?>
                    <tr>
                        <td><?php echo $mostrar['Id'] ?> </td>
                        <td><?php echo $mostrar['Name'] ?> </td>
                        <td><?php echo $mostrar['Email'] ?> </td>
                        <td><?php echo $mostrar['Administrador'] ?> </td>
                        <td><?php echo $mostrar['Habilitado'] ?> </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <h2>Para descargar la bitacora presionar Cntrl+p </h2>
        <p><a href='logout.php'>Logout</a></p>	
    </BODY>
</html>