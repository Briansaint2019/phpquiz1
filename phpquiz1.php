<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nested Loop Multiplication Table quiz1</title>
</head>
<body>
<h2>Nested Loop Multiplication Table</h2>

<?php
//Generate an HTML table

echo "<table border=\"1\">";

//Generate table data showing the numbers 1-7 multiplied by each other, 

//starting with the rows. 

for ($row=1; $row<=7; $row++){

    echo "<tr>\n";
  
    //Generate each entry in the row to create the columns.
  
    for ($col=1; $col<=7; $col++){
  
      //First, do the math.
  
      $x=$col * $row;
  
      //Then send the value to the table with the table data tags.   
  
      echo "<td>$x</td>\n";
  
    }
  
    echo "</tr>";
  
  }


?>

</body>
</html>