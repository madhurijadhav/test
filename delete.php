<html>
<head>
<title>Delete</title>
</head>
<body>

<?php

$con = mysqli_connect("localhost","root","","my_db");

$con = new MySQLi("localhost","root","","my_db");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else {
	echo "Successfully Connect to MySQL";
}


$action = isset($_GET['action']) ? $_GET['action'] : "";

if($action=='delete'){ 

    
    $query = "DELETE FROM user WHERE id = ".$mysqli->real_escape_string($_GET['id'])."";
   
    
    if( $mysqli->query($query) ){
        
        echo "User was deleted.";
    }else{
        
        echo "Unable to delete record.";
    }
   
}

$query = "select * from user";

$result = $con->query( $query );

$num_results = $result->num_rows;

//echo "<div><a href='add.php'>Create New Record</a></div>";

if( $num_results ){

    echo "<table border='1'>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>User Name</th>";
        echo "<th>Password</th>";
				echo "<th>Name</th>";
				echo "<th>Address</th>";
				echo "<th>Age</th>";
				echo "<th>DOB</th>";
				echo "<th>Pincode</th>";
        echo "<th>Action</th>";
				
    echo "</tr>";

    while( $row = $result->fetch_assoc() ){
            extract($row);
         
           		  echo "<tr>";
                echo "<td>{$id}</td>";
                echo "<td>{$username}</td>";
                echo "<td>{$password}</td>";
								echo "<td>{$name}</td>";
								echo "<td>{$address}</td>";
								echo "<td>{$age}</td>";
								echo "<td>{$date_of_birth}</td>";
								echo "<td>{$pincode}</td>";
                echo "<td>";
                    echo "<a href='#' onclick='delete_user( {$id} );'>Delete</a>";
                echo "</td>";
            echo "</tr>";
    }
   
    echo "</table>";

}else{
    echo "No records found.";
}
$result->free();
//$mysqli->close();

?>

<script type='text/javascript'>
   
    function delete_user( id ){
        
        var answer = confirm('Are you sure?');
       
        if ( answer ){ 
            
            window.location = 'user_tab.php?action=delete&id=' + id;
        }
    }
</script>