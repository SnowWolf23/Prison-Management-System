<html>
<head>
  <title>View office's transfer </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='BLACK' width='100%' height='100%' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='WHITE' valign='top'>

<?php


$db_name="prison";
$tbl_name="officer";
$conn=mysqli_connect("localhost", "root","") or die(mysqli_error());

mysqli_select_db($conn,"$db_name")or die("cannot connect");

$sel= mysqli_query($conn,"select * from $tbl_name   ");
echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='gr'>
<caption><h3>OFFICER TRANSFER  INFORMATION</h3></caption>
<tr bgcolor='WHITE'>
<th width='3%'> Officer Id</th>
<th width='3%'> Station Id</th>
<th width='10%'>Phone Number</th>
<th width='15%'>From Prison</th>
<th width='10%'>To Prison</th>
<th width='10%'>Date of Transfer</th>
</tr>";

   while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='white'>";
echo  "<td width='3%'>".$row ['Officer_Id']."</td>";
echo  "<td width='3%'>".$row ['Station_Id']."</td>";
echo  "<td width='10%'>".$row ['Telephone']."</td>";
echo  "<td width='7%'>".$row ['From_Prison']."</td>";
echo  "<td width='10%'>".$row ['To_Prison']."</td>";
echo  "<td width='10%'>".$row ['Dateoftransfer']. "</td>";

echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
		  
			<td align="center" height='4%'><a href="adminpanel.php" target="_parent">BACK <b>|</b></a>
			<a href="deltransfer.php" target="_parent">DELETE  <b></b></a>
			
		
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