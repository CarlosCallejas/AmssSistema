<html> 
    <body>  
     <?php 
     // Connection info. file
	    include 'conn.php';	
		
    	// Connection variables
	    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
    }

    if(isset($_GET['fecha'])){
        $datos=array();
        $buscarFecha =$conn->escape_string($_GET['fecha']);
        // $consulta="SELECT tweet_text FROM tweetdiadelaselecciones WHERE tweet_date LIKE '%$buscarFecha%'";
        // $query=mysqli_query($conn,$consulta);
        $c=0;
        $queryText="";
        $query = $conn->query("SELECT tweet_text FROM tweetdiadelaselecciones WHERE tweet_date LIKE '%$buscarFecha%'");
        while($queryArr =  mysqli_fetch_row($query)){
            $datos=$queryArr[$c];
            $queryText .= $datos;
            $c++;
        }
        echo $queryText; 
    }       
    ?>
    <div class="result-count">    
        
    </div> 
    
    <!--  <script>
    // Document.write(" ");
    // </script>
  
    // <script src="demo.js">
    //     PalabraMasRepetida("baño baño  data baño perro fhgj tsyu gato peRRo)
    //     </script>
    
     <script src="demo.js">
    //     PalabraMasRepetida("$result")
    //     </script> --> 

    </body> 
</html>
