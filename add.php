<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>them</title>
	<script type="text/javascript" src="java.js"></script>
</head>
<body>
	<form action="" method="post" name="form1" align="center">
		<table align="center">
			<tr>
				<td>mã sản phẩm:</td>
				<td><input type="text" name="txtma"></td>
			</tr>
			<tr>
				<td>tên sản phẩm</td>
				<td><input type="text" name="txtten"></td>
			</tr>
			<tr>
				<td>giá</td>
				<td><input type="text" name="txtgia"></td>
			</tr>
			<tr>
				<td>số lượng</td>
				<td><input type="text" name="txtsoluong"></td>
			</tr>
			<tr>
				<td>mô tả:</td>
				<td><input type="text" name="txtmota"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="them" onclick="return confirm('bạn có muốn thêm k.');" value="thêm">
				</td>
				<td>
					<input type="reset" name="" value="Hủy">
				</td>
			</tr>
		</table><br>
		<button><a href="hienthi.php">Trang chủ</a></button>
	</form>
	
</body>
</html>
<?php 
	if (isset($_POST['them'])) {
		$ma = $_POST['txtma'];
		$ten = $_POST['txtten'];
		$gia = $_POST['txtgia'];
		$soluong = $_POST['txtsoluong'];
		$mota = $_POST['txtmota'];


		$conn = mysqli_connect('localhost','root','','banhang') or die("kết nối thất bại");
		mysqli_set_charset($conn, 'utf8');
		$sql_add = "insert into sanpham(masp, tensp, gia, soluong,mota) values ('$ma','$ten','$gia','$soluong','$mota')";
		$query_add = mysqli_query($conn,$sql_add);
	}
 ?>
