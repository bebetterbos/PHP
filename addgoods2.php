<!DOCTYPE HTML>
<html>

<head>
	<title>Add goods</title>
</head>

<body>

	<form name="save" method="post" action="addgoods.php">

		<BR>
		<BR>
		<table width="650" border="1" bgcolor="#FFFFFF" align="center">
			<tr>
				<td colspan="6" bgcolor="#3399CC" align="center" height="21">
					<b>: : Add goods : : </td>
			</tr>
			<tr>
				<td width="200">Good id : </td>
				<td width="400">
					<input type="text" name="goodsId" size="20" maxlength="5"> </td>
			</tr>
			<tr>
				<td width="200">Good Name :</td>
				<td>
					<input type="text" name="goodsName" size="20" maxlength="30"> </td>
			</tr>
			<tr>
				<td width="200">Good price(baht) : </td>
				<td>
					<input type="text" name="goodsPrice" size="20" maxlength="30"> </td>
				</td>
			</tr>
			<tr>
				<td width="200">Good quantity : </td>
				<td>
					<input type="text" name="goodsQuanity" size="20" maxlength="30"> </td>
				</td>
			</tr>



		</table>
		<br>
		<div align="center">
			<input type="submit" name="Submit" value="บันทึกข้อมูล" style="cursor:hand">
			<input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
		</div>
	</form>
</body>

</html>