<!DOCTYPE html>
<html>


<head>
  
  <title>Tickets Confirmation page, v4</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- W3.CSS link -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- DataTables CSS and script links -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

    <link href="../Contents/Content.css" rel="stylesheet" />
  
</head>
 
<body>
    <ul class="navbar-customized bg-danger">
            <li><a href="#"><b>Little Ceasar Arena</b></a></li>
            <li><a href="/Views/Arena.html">Arena Page</a></li>
            <li><a href="/Views/Events.html">Events Page</a></li>
            <li><a href="/Views/Tickets.html">Tickets Page</a></li>
        </ul>
  <div class="container ticket-Confirmation-page">

    <!-- Title -->
    <div class="leftTitle">
      <h1>Little Ceasar Arena Ticket Confimation</h1>
    </div>
    

  
  <?php
    $filename= $_POST["CustomerName"];
    $filename.=".sale";
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    
    fwrite($myfile,$_POST["CustomerName"]."\n");
    
    fwrite($myfile,$_POST["EmailAddress"]."\n");
    
    fwrite($myfile,$_POST["EventDate"]."\n");
    
    fwrite($myfile,$_POST["SeatType"]."\n");
    
    fwrite($myfile,$_POST["NumberOfTickets"]."\n");
    
    fwrite($myfile,$_POST["SeatCost"]."\n");
    
    fwrite($myfile,$_POST["Subtotal"]."\n");
    
    fwrite($myfile,$_POST["Tax"]."\n");
    
    fwrite($myfile,$_POST["Total"]."\n");
    
    fwrite($myfile,$_POST["Total"]."\n");
    
    fwrite($myfile,$_POST["PaymentType"]."\n");
    
    fclose($myfile);
    ?>
  <div class="col-md-6">
        <div>
        See you soon in our arena! Here are your ticket details.
        </div>
        <table class="ticket-Confirmation-tbl">
          <tr>
            <td>CustomerName</td>
            <td>
              <?php
              echo($_POST["CustomerName"])
              ?>
            </td>
          </tr>
          <tr>
            <td>CustomerEmail</td>
            <td><?php
              echo($_POST["EmailAddress"])
              ?>
              </td>
          </tr>
           <tr>
            <td>EventDate</td>
            <td><?php
              echo($_POST["EventDate"])
              ?>
              </td>
          </tr>
          <tr>
            <td>SeatType</td>
            <td><?php
              echo($_POST["SeatType"])
              ?>
              </td>
          </tr>
          <tr>
            <td>NumberOfTickets</td>
            <td><?php
              echo($_POST["NumberOfTickets"])
              ?>
              </td>
          </tr>
          <tr>
            <td>SeatCost</td>
            <td><?php
              echo($_POST["SeatCost"])
              ?>
              </td>
          </tr>
          <tr>
            <td>Subtotal</td>
            <td>
            <?php
              echo($_POST["Subtotal"])
              ?>
            </td>
          </tr>

          <tr>
            <td>Tax</td>
            <td>
            <?php
              echo($_POST["Tax"])
              ?>
            </td>
          </tr>
          <tr>
            <td>Total</td>
            <td>
            <?php
              echo($_POST["Total"])
              ?>
            </td>
          </tr>
          <tr>
            <td>PaymentType</td>
            <td>
            <?php
              echo($_POST["PaymentType"])
              ?>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-6">
          <img 
            src="../Images/ArenaSeatingChart/seating-chart-01-little-seasar.JPG" class="arena-seating-chart" 
            alt="Image Missing!">
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
 
</html>
