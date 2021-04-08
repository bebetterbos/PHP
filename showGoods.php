<!DOCTYPE html>
<html>

<head>
	<title>show goods</title>
	<meta charset="utf-8">
</head>

<body>

	<CENTER>
		<H3>Show Goods</H3>
	</CENTER>
	<BR>
	<div align="center">
		<A HREF="addGoods2.php">Add good</A>
	</div>
	<BR>

	<?php
$hostname = "localhost";
$username = "root";
$password = "12345";
$dbname = "departmentstore";
$conn = mysqli_connect( $hostname, $username, $password, $dbname);
if ( ! $conn ) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
mysqli_set_charset($conn,"utf8");
$sqltxt = mysqli_query($conn,"SELECT * FROM goods order by goodsId")
or die (mysqli_error($conn));
echo "<form name='save' method='post' action='editGoods.php'>";
echo "<table width=\"400\" border=\"0\" bordercolor=\"D1D7DA\" ";
echo "align = \"center\" valign = \"top\" >";
echo " <br><b><tr align=\"center\" bgcolor=\"#0099CC\">";
echo "<td width =\"30\" align=\"center\">#</font></td>";
echo "<td width =\"100\" align=\"center\" >Goods ID</td>";
echo "<td align=\"center\" width = \"200\">Goods Name</td>";
echo "<td align=\"center\" width = \"200\">Goods Price</td>";
echo "<td align=\"center\" width = \"200\">Goods Quantity</td>";
echo "<td align=\"center\" width =\"80\" >Edit</a></font></td>\n</b>";
echo "<td align=\"center\" width =\"80\" >Delete</a></font></td>\n</b>";
$a=1;
while ( $rs = mysqli_fetch_array ( $sqltxt ) )
{
echo "<tr align=\"center\" bgcolor=\"#CCFFFF\">";
echo "<td align=\"center\" bgcolor =\"#0099CC\">$a</td>";
echo "<td align=\"center\"> ";
echo "<a href=\"detailbook.php?id=$rs[0]\">$rs[0]</a></td>";
echo "<td align=\"center\">$rs[1]</td>";
echo "<td align=\"center\">$rs[2]</td>";
echo "<td align=\"center\">$rs[3]</td>";
echo "<td align=\"center\"> <a href=\"editGoods.php?goodsId='. $rs[0].'";
echo "onclick=\"return confirm(' Edit $rs[1] ')\">[Edit] ";
echo "<td align=\"center\"> <a href=\"deleteGoods.php?id=$rs[0]\" ";
echo "onclick=\"return confirm(' ยืนยันการลบข้อมูลหนังสือ $rs[1] ')\">[Delete] ";
echo "</a></font></td>\n";
$a++;
}
echo "</form>";
?>
	</tr>
	</table>
	<?php
mysqli_close($conn);
