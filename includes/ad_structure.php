<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
	<meta name="a  uthor" content="dai" />
	<link rel="stylesheet" type="text/css" href="structure.css" />
	<title>Trang chủ</title>
    
</head>
  
<html>
<body>
    <?php
        require("admin.php"); 
    ?>
	<div id="box">
		<div id="box-left">
			<ul id="menu">
				<li><a href = "ad_structure.php"><b>CƠ CẤU TỔ CHỨC</b></a></li>
				<li><a href = "ad_hoiDong.php">Hội đồng thành viên</a></li>
				<li><a href = "ad_banGD.php">Ban giám đốc</a></li>
				<li><a href = "ad_phongBan.php">Phòng kinh doanh</a></li>
				<li><a href = "ad_phongBan.php">Tổ chức hành chính</a></li>
				<li><a href = "ad_phongBan.php">Kế toán</a></li>
				<li><a href = "ad_phongBan.php">Kỹ thuật</a></li>
			</ul>
		</div>
		<div id="box-right">
			<div id="node">
				<ul id="title">
					<li><b><u>I. SƠ ĐỒ TỔ CHỨC</u></b></li>
				</ul>
			</div>
			<div id="images"></div>
			<div id="produce">
				<ul id = "title">
					<li> <b><u>II. CƠ CẤU</u></b></li>
						<ul id="list">
							<li>1. Hội đồng thành viên</li>
							<li>2. Ban giám đốc</li>
							<li>3. Phòng kinh doanh</li>
							<li>4. Tổ chức hành chính</li>
							<li>5. Kế toán</li>
							<li>6. Kỹ thuật</li>							
						</ul>
				</ul>
			</div>
		</div>
		<div id="footer">
			<ul id="title">
				<li>Developed by A4DSE, 2014, Unversity of Techology and Engineering , 
				E3 144 Xuân Thủy - Cầu Giấy - Hà Nội,
				Email: a4dse1994@gmail.com</li>
			</ul>
		</div>
	</div>
</body>
</html>