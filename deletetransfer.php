<html>
<head>
  <title>Delete prisoners</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='black' width='100%' height='100%' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='white' valign='top'>

<?php
ob_start();
$conn=mysqli_connect("localhost", "root","") or die(mysqli_error());
mysqli_select_db($conn,"prison");
$result=mysqli_query($conn,"select * from transfer");
?>


<?php
//To delete:
if(isset($_POST["delete"])){
$id=$_POST["Dateoftransfer"];
$delete=mysqli_query($conn,"delete from transfer where Dateoftransfer='$_POST[Dateoftransfer]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deletetransfer.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deletetransfer.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='black'>
<caption><b><h3>DELETE TRANSFER</h3> </b></caption>
<tr bgcolor='white'>
<th width='3%'>Sl.No</th>
<th width='3%'>National ID</th>
<th width='10%'>File Number</th>
<th width='15%'>From Prison</th>
<th width='10%'>To Prison</th>
<th width='10%'>Date of Transfer</th>
<th width='10%'>Delete</th>


</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"Dateoftransfer\" value=\"$row[Dateoftransfer]\"></td>
<td>$row[National_id]</td>
<td>$row[File_num]</td>
<td>$row[From_prison]</td>
<td>$row[To_prison]</td>
<td>$row[Dateoftransfer]</td>

<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}
print"</table>";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center" height='4%'>
			<a href="viewtransfer.php" target="_parent">BACK<b></b></a>
			
		
          </tr>
           <tr>
            <td colspan='3' align='center' bgcolor='white' height='1'>
					&copy; <strong>
					SSarkar(+917596918164)</strong></td>
          </tr>
	</table>
</body>
</head>
</html>

