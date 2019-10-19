<?php 
	$conn = mysqli_connect('localhost','root','','banhang') or die("kết nối thất bại");
	$query = "SELECT * FROM `sanpham`";
	$result = mysqli_query($conn,$query);	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>quản lý bán hàng</title>
</head>
<body>

	<form>
		<h1 align="center" style="color: blue">Quản lý bán hàng</h1>
		<div align="center">
			<input type="text" name="timkiem">
			<button>Seach</button>
			
		</div><br>
		<div align="center"><a href="add.php">Thêm</a></div><br>
		<table align="center" style="background: #dddddd; text-align: center;" border="1px">
			<tr>
				
				<td width="200px">mã sản phẩm</td>
				<td width="200px">tên sản phẩm</td>
				<td width="200px">giá</td>
				<td width="200px">số lượng</td>
				<td width="200px">mô tả</td>
				<td width="50px">Sửa</td>
				<td width="50px">Xóa</td>
			</tr>
		</table>
	</form>
	<?php 
		if (mysqli_num_rows($result)<=0) {
			echo "không có dữ liệu";
		}else{
			while ($row = mysqli_fetch_assoc($result)) { ?>
				<table align="center" border="1px" style="text-align: center;">
					<tr>
						
						<td width="200px"><?php echo $row["masp"]; ?></td>
						<td width="200px"><?php echo $row["tensp"]; ?></td>
						<td width="200px"><?php echo $row["gia"]; ?></td>
						<td width="200px"><?php echo $row["soluong"]; ?></td>
						<td width="200px"><?php echo $row["mota"]; ?></td>
						<td width="50px">
							
								<button>
									<a href="edit.php?ID=<?php echo $row["masp"]; ?> ">Sửa</a>
								</button>
								
							
						</td>
						<td  width="50px">
							<button onclick="return confirm('bạn có chắc chắn xóa!!')">
								<a href="xoa.php?ID=<?php echo $row["masp"]; ?>">Xóa</a>
							</button>
						</td>
					</tr>
				</table>
				<?php
			}
		}
	   ?>
	   

</body>
</html>
