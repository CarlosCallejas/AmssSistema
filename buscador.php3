<html> 
<body> 
  
<?php 
    
    // Connection info. file
	include 'conn.php';	
			
	// Connection variables
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
    
$result = mysql_query("SELECT tweet_text FROM tweetdiadelaselecciones WHERE  LIKE '%$buscar%' ORDER BY nombre", $conn); 
?> 
  
    <script>
        alert("hola");
    alert($result);
    </script>
  
    <script src="demo.js">
        PalabraMasRepetida("baño baño  data baño perro fhgj tsyu gato peRRo)
        </script>
    
    <!-- <script src="demo.js">
        PalabraMasRepetida("$result")
        </script> -->
</body> 
</html> 