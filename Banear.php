<html>
    <body>
        <?php
            include 'conn.php';	
			
            // Connection variables
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            // Check connection
            if (!$conn) {
                die("Conexión fallida: " . mysqli_connect_error());
            }
        
            include 'conn.php';	
			
			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Conexión fallida: " . mysqli_connect_error());
            }

            $email=$_POST['email'];

            $que = "UPDATE user SET Habilitado=0 WHERE Email='$email'";

            $conn->query($que);
        ?>
        <p><a href='Bitacora.php'>Checar Registros</a></p>
    </body>
</html>