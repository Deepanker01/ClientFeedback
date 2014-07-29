</html>
<head>
<style>
 table { 
color: #333;
font-family: Helvetica, Arial, sans-serif;
width: 840px; 
border-collapse: 
collapse; border-spacing: 0; 
}

td, th { 
border: 1px solid transparent; /* No more visible border */
height: 30px; 
transition: all 0.3s;  /* Simple transition for hover effect */
}

th {
background: #DFDFDF;  /* Darken header a bit */
font-weight: bold;
}

td {
background: #FAFAFA;
text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */ 
tr:nth-child(even) td { background: #F1F1F1; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */ 
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; } /* Hover cell effect! */
 
</style>

</head>
</html>
<?php
session_start();
$q = $_GET['q'];
$cid = $_SESSION['cid'];
require "conn.php";

mysql_select_db("client");

$sql="SELECT * FROM project WHERE pname LIKE '%$q%' AND cid='$cid'" ;

$result = mysql_query($sql);


echo "<table border='1' cellpadding='11' id='table' style=' height: 10%; width: 100%' ;float:center;'>
<tr>
<th>Name</th>
<th>deadline</th>
<th>Level</th>
</tr>";
	if($result === FALSE) {
	    die(mysql_error()); // TODO: better error handling
	}
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td> <a href='details.php?pid=".$row['pid']."' >";
  
  echo  $row['pname'] . " </a></td> ";
  echo "<td>" . $row['deadline'] . "</td>";
 echo "<td>" . $row['level'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

?>