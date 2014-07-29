<?php
session_start();
require "conn.php";
$ppid = $_SESSION['ppid'];

$deadline = $_POST['deadline'];
$level = $_POST['level'];
$pname = $_POST['pname'];

$sqlnew = "UPDATE `project` SET `deadline`='$deadline',`level`='$level',`pname`= '$pname' WHERE pid = $ppid ";
$result = mysql_query($sqlnew);
if($result)
{
echo "<script>
alert('Record Updated');
window.location = 'checklist.php';

 </script>";

}
?>