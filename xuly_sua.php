<?php 
	$conn = mysqli_connect('localhost','root','','banhang') or die("kết nối thất bại");
	mysqli_set_charset($conn, 'utf8');
	$ma = $_REQUEST['txtma'];
	$ten = $_REQUEST['txtten'];
	$gia = $_REQUEST['txtgia'];
	$soluong = $_REQUEST['txtsoluong'];
	$mota = $_REQUEST['txtmota'];
	$sql_edit = "update sanpham SET masp='$ma',tensp='$ten',gia='$gia',soluong='$soluong',mota='$mota' where masp = '$ma'";
	$query_edit = mysqli_query($conn,$sql_edit);
	header('location:hienthi.php');

 ?>
 <div>
 	<button><a href="hienthi.php">Trang chủ</a></button>
 </div>