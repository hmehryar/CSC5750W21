
<?php
// serves as an interface between the client pages and the database dbTickets 
//connecting to db


$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "dbtickets";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}



$methodName=$_GET['Request'];
//echo $methodName."<br/>";
// Display result 


if (   $methodName == "update") {
    $id= $_GET['id'];
    $quantity=$_GET['quantity'];
    echo $id;
    echo $quantity;
    echo "Im gonna update";
} elseif (  $methodName=="list") {
   // echo "list: Begin<br/>";

    $sql = "SELECT * FROM dbtickets.tbTickets";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $rows = array();
    while($row = mysqli_fetch_assoc($result)) {
//        echo "ID: " . $row["ID"]. " - Name: " . $row["Name"]. " - Event: " . $row["Event"]." - EventDate: " . $row["EventDate"]
//       ." - Tickets: " . $row["Tickets"]." - Total: " . $row["Total"]."<br>";
            $rows[] = $row;
    }
    // decode the JSON from the database as we build the array that will be converted back to json
    $jsonObject = array('data' => $rows);
    print json_encode($jsonObject, JSON_UNESCAPED_SLASHES);
    //print json_encode($rows);
    } else {
        echo "0 results";
    }

    //echo "list: End";
} elseif ( $methodName=="add") {
echo "add: Begin";
	//$id= $_GET['id'];
    $Name= $_GET['Name'];
    $Event= $_GET['Event'];
    $EventDate= $_GET['EventDate'];
    $Tickets= $_GET['Tickets'];
    $Total= $_GET['Total'];
    //echo $id;
    echo $Name;
    echo $Event;
    echo $EventDate;
    echo $Tickets;
    echo $Total;
    $sql="INSERT INTO `dbtickets`.`tbtickets` (`Name`, `Event`, `EventDate`, `Tickets`, `Total`) VALUES ('".$Name."', '".$Event."', '".$EventDate."', '".$Tickets."', '".$Total."')";
    //$sql="INSERT INTO tbtickets (Name, Event, EventDate, Tickets, Total) VALUES (".$Name."', '".$Event."', '".$EventDate."', '.$Tickets.', '.$Total.')";
    //$sql = "INSERT INTO tbTickets (Name, Event, EventDate, Tickets, Total) VALUES ('".$Name."', '".$Event."', '".$EventDate."', '.$Tickets.', '.$Total.')";
    $result = mysqli_query($conn, $sql);
    echo "<br/>";
    echo mysqli_insert_id($conn);
    echo "add: End";
    }else {
    echo "Doing Nothing";
}
mysqli_close($conn);
?>