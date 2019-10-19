<?php 
	$conn = mysqli_connect('localhost','root','','banhang') or die("kết nối thất bại");
	mysqli_set_charset($conn, 'utf8');
	$id = $_GET['ID'];
	$sql_xoa = "delete from sanpham where masp = '$id'";
	$query_xoa = mysqli_query($conn,$sql_xoa);

	if ($query_xoa) {
		echo "bạn đã xóa thành công";
	}else{
		echo "xóa thất bại";
	}
 ?>
 <div>
 	<button><a href="hienthi.php">trang chủ</a></button>
 </div>