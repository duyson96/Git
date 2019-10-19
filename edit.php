<?php 
	$conn = mysqli_connect('localhost','root','','banhang') or die("kết nối thất bại");
	mysqli_set_charset($conn, 'utf8');
	$id = $_GET['ID'];
	$sql = "select * from sanpham where masp = '$id'";
	$query_update = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($query_update);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>them</title>
</head>
<body>
	<form action="xuly_sua.php" method="post" name="form1" align="center">
		<table align="center">
			
			<tr>
				<td>mã sản phẩm:</td>
				<td><input type="text" name="txtma" value="<?php echo $row["masp"]; ?>"></td>
			</tr>
			<tr>
				<td>tên sản phẩm</td>
				<td><input type="text" name="txtten" value="<?php echo $row["tensp"]; ?>"></td>
			</tr>
			<tr>
				<td>giá</td>
				<td><input type="text" name="txtgia" value="<?php echo $row["gia"]; ?>"></td>
			</tr>
			<tr>
				<td>số lượng</td>
				<td><input type="text" name="txtsoluong" value="<?php echo $row["soluong"]; ?>"></td>
			</tr>
			<tr>
				<td>mô tả:</td>
				<td><input type="text" name="txtmota" value="<?php echo $row["mota"]; ?>"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="them" onclick="return confirm('bạn có muốn thay đổi dữ liệu không');" value="Sửa" >

				</td>
				<td>
					<input type="reset" name="" value="Hủy">
				</td>
			</tr>
		</table><br>
		<button><a href="hienthi.php">Trang Chủ</a></button>
	</form>
	
</body>
</html>