<html>
<head>
  <title>Case file Prisoners officer </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='black' width='100%' height='100%' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='white' valign='top'>

<?php


$db_name="prison";
$tbl_name="court";

$conn=mysqli_connect("localhost", "root","") or die(mysqli_error());
mysqli_select_db($conn,"$db_name")or die("cannot connect");

$sel= mysqli_query($conn,"select * from $tbl_name");
echo"<table align='center' width='100%'  bgcolor='black' border='0' cellpadding='3' cellspacing='2' bgcolor='white'>
<caption><h3>COURT INFORMATION</h3></caption>
<tr bgcolor='white'>
<th width='3%'>National id</th>
<th width='10%'>Fie Number</th>
<th width='10%'>Date of trial</th>
<th width='15%'>Sentence</th>
<th width='10%'>Location</th>
</tr>";

   while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='white'>";

echo  "<td width='3%'>".$row ['National_id']."</td>";
echo  "<td width='7%'>".$row ['File_number']."</td>";
echo  "<td width='10%'>".$row ['Dateoftrial']."</td>";
echo  "<td width='10%'>".$row ['Sentence']. "</td>";
echo  "<td width='10%'>".$row ['Location']."</td>";


echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" height='4%' bgcolor='black'><a href="officerpanel.php" target="_parent" >BACK <b></b></a>
			
			
		
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