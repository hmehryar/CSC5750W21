<?php
  //==================================================================
  //
  // Title: Send Data With AJAX and GET Response
  // Description:
  //   This PHP script sends data received from the client using GET
  // back to the client.  You must copy this and associated files to a
  // server to run it.
  // 
  //==================================================================
  echo "This is the server speaking.\n";
  echo "Here is the data you (the client) sent me using AJAX and GET: ";
  echo $_GET["first"] . ' ' . $_GET["last"];
?>
