<?php 
	
	if(isset($_GET["action"]))
	{
		include("header.php");
		$action=$_GET["action"];
		if($action=="DanhSachKH")
		{
			include("khachhang.php");
		}
		
		if($action=="DanhSachTK")
		{
			include("taikhoan.php");
		}
		if($action=="TKTours")
		{
			include("thongketours.php");
		}
		if($action=="TKDanhMuc")
		{
			include("thongkedanhmuc.php");
		}
		if($action=="DanhSachTours")
		{
			include("tour.php");
		}
		if($action=="DSDatTours")
		{
			include("dattour.php");
		}
		include("footer.php");
	}
	else
	{
		include("login.php");
	}
	

 ?>