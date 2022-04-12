<?php
	require_once"select.php"
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fashion Queen — Fashion Website Template </title>
		<link rel = "shortcut icon" href = "images/logo.png"/>
		<link rel="stylesheet" href="css/dp.css">
		<link rel="stylesheet" href="css/style.css"/>
		<link rel= "stylesheet" href = "css/bootstrap.css"/>
		<link rel = "stylesheet" href="css/slider.css"/>
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">       
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
		<style>
			li
			{
				list-style:none;
				float:left;
				padding:10px;
				margin-left:100px;
			}
			ul
			{
				background:#FFFFFF;
				width:100%;
			}
			ul li a
			{
				color:#111111;
				text-transform:uppercase;
				font-weight:bold;
				font-size:20px;
			}
			ul li a:hover
			{
				text-decoration:none;
				color:white;
			}
			ul li:hover
			{
				background:#FF0000;
			}
			.dropdown-content 
			{
			  display: none;
			  position: absolute;
			  background-color: #e9d8f4;;
			  margin-left:460px;
			  margin-top:50px;
			  z-index:10;
			}
			.dropdown:hover .dropdown-content 
			{
				display: block;
			} 
			</style>
		
	</head>
	<style>
	.heading text-center text-capitalize mb-5{
		     font-family: "Lucida Console", Courier, monospace;
		}
	</style>
	<body>
			<!--banner-->
			<div class ="row" >
				<div class="col-7" >
					<img src="images/banner.jpg" style="width:90%"/>
				</div>
			</div>
			<!--menu-->
			<div class="fluid-container">
				<div class ="row">
						<ul>
							<li><a href="#">TRANG CHỦ</a></li>
							<li><a href="#">THÔNG TIN</a></li>
							<div class="dropdown">
							 <li style="color:#111111;font-weight:bold;font-size: 20px">DANH MỤC</li>
							  <div class="dropdown-content" >
							  <?php
								foreach($dm as $danhmuc){
									echo "<li><a href='#' >".$danhmuc."</a></li>";
								}
								echo "<li><a href='admin\mana_danhmuc.php'>THÊM MỚI DANH MỤC</a></li>"
								?>
							  </div>
							</div>
							<li><a href="#">MÔ HÌNH</a></li>
							<li><a href="#">BÀI ĐĂNG</a></li>
							<li><a href="#">CONTACT</a></li>	
						</ul>							
				</div>
			</div>
				<!--slide anh-->
				<div class="fluid-container">
					  
					
						<div id="carouselExampleFade" class="carousel slide1 carousel-fade" data-ride="carousel" style="margin-top:10px">
							<div class="carousel-item active" >
							  <img class="slide1 " src="images/1.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							  <img class="slide1"src="images/2.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							  <img class="slide1"src="images/3.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							  <img class="slide1"src="images/4.jpg" class="d-block w-100" alt="...">
							</div>
						 </div>
							<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide1="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
						<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide1="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
				</div>
			<!--container-->
			<div class="container" >
				<div class="mess1" style="margin-top:1050px">Welcome To Fashion</div>
				<div class="mess2">Với tinh thần “High Fashion with Low Price”,  là sự lựa chọn đúng đắn cho các bạn gái trẻ yêu thích thời trang, thích thay đổi phong cách theo xu hướng với giá thành hợp lý.
					cam kết là người bạn thân thiết của những tín đồ thời trang “mua sắm thông minh”.
				</div>
				
				<div class="row rowa">
					<div class="col-3">
						<div class="row">
							<div class="col-4"><i class="fas fa-tv fa-3x fa--colors"></i></div>
							<div class="col-8"><h3>165</h3>
								<p>Fashion show</p>
							</div>
						</div>
					</div>

					<div class="col-3">
						<div class="row">
							<div class="col-4"><i class="fas fa-crown fa-3x fa--colorss"></i></div>
							<div class="col-8"><h3>210</h3>
								<p>Fashion show</p>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="row">
							<div class="col-4"><i class="fas fa-camera fa-3x fa--colorsss"></i></div>
							<div class="col-8"><h3>205</h3>
								<p>Fashion show</p>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="row">
							<div class="col-4"><i class="fas fa-calendar-alt fa-3x fa--colorsa"></i></div>
							<div class="col-8"><h3>250</h3>
								<p>Fashion show</p>
							</div>
						</div>
					</div>

				</div>
				
				<div class="row rowb">
					<div class="col-6"><img src="images/duongphan1.jpg" alt="" width="100%" height="auto"></div>
					<div class="col-5">
						<p>About <u style="color: crimson;">Fashion World</u></p>
						<p>Thời trang là một sự thể hiện thẩm mỹ phổ biến tại một thời gian, địa điểm cụ thể, trong một bối cảnh cụ thể bằng cách sử dụng quần áo, giày dép, lối sống, phụ kiện, cách trang điểm, kiểu tóc và tỷ lệ cơ thể. Không như xu hướng thường chỉ bao hàm một sự thể hiện thẩm mỹ riêng biệt và thường kéo dài ngắn hơn một mùa, thời trang là sự thể hiện đặc biệt, được hỗ trợ bởi ngành công nghiệp thời trang mà thường gắn liền với các mùa và bộ sưu tập.
							 Phong cách là một biểu hiện kéo dài qua nhiều mùa và thường được kết nối với các phong trào văn hóa và các dấu hiệu xã hội, biểu tượng, giai cấp và văn hóa (ví dụ: Baroque, Rococo...). Theo nhà xã hội học Pierre Bourdieu, thời trang có nghĩa là "thời trang mới nhất, sự khác biệt mới nhất...</p>
						<a href="http://localhost:81/nhom14/php/index1.php"target="_bank"><button class="btnb">Đọc Thêm</button></a>
						<br><a href="http://localhost:81/nhom14/admin/mana_sanpham.php"target="_bank"><button style="background:red">THÊM SẢN PHẨM</button></a></br>
					</div>
				</div>
             </div>
	<!--video-->
			<div class="video" style="width:100%; margin:auto; background:#333333; margin-top:40px;margin-bottom:30px;font-family:Times New Roman ;">
			    
			    <div class="row" style="color:#EEEEEE;with:100%;margin-left:10px">
				   <h3> FASHION MAGAZINE</<h3>
				   <br>Modeling is not something you excel because you are clever but is based on physical appearance</br>
				</div>			
				<div class="row" style="pading: 100px 200px;">
				    <h3 style="color:#fff; font-weight:bold;font-size:50px; margin:40px;"><br/>WATCH VIDEO</h3>
					 <iframe width="500" height="300" src="https://www.youtube.com/embed/R_5haCzDH4U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					
				</div>
			</div>
           
	<!--Fashion event-->

		<div class="row">

			<pre class="fashion"> Fashion <i class="fas fa-crown fa-1x fa--font-size	"></i> Events</pre>
		</div>
			<div class="row ">
						<div class="col-4 event">
							
							<div class="event">
							<a  href=" http://localhost:81/nhom14/php/fashionshow.php"target="_bank">
							<h5>Fashion <span style="color: red"><ins>Shows</ins></span></h5>
							</a>
							
							<p class="lk">Sự kiện do một số nhà thiết kế thời trang bật mí giới thiệu hàng loạt trang phục hoặc phụ kiện sắp ra mắt trong suốt tuần lễ thời trang.</p>
							
							
							</div>
						
						<div class="event">
							<a href="http://localhost:81/nhom14/php/catwalkshow.php"target="_bank">
							<h5>Catwalk <span style="color: red"><ins>Shows</ins></span></h5>
							</a>
							
							<p class="lk">Một buổi trình diễn thời trang hay show diễn thời trang là sự kiện do một nhà thiết kế thời trang bật mí nhằm giới thiệu loạt trang phục và phụ kiện sắp ra mắt trong suốt tuần lễ thời trang. </p>
						
						</div>
						</div>
						
				<div class="col-4 event">
						

						<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
							<div class="carousel-item active" data-interval = "3000" >
							  <img class="slide" src="images/btl1.png" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item" data-interval="3000">
							  <img class="slide" src="images/btl2.png" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							  <img class="slide" src="images/btl3.png" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							  <img class="slide" src="images/btl4.png" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							  <img class="slide" src="images/btl5.png" class="d-block w-100" alt="...">
							</div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						 
						</div>
				</div>

						<div class="col-4 event">

						   <div class="event">
							<a  href=" http://localhost:81/nhom14/php/modelshow.php"target="_bank">
							<h5>Model <span style="color: red"><ins>Shows</ins></span></h5>
							</a>
						
							<p class="lk">Vai trò quảng bá, trình diễn hoặc quảng cáo các sản phẩm thương mại,hỗ trợ thể hiện trực quan cho những sáng tạo nghệ thuật hoặc tạo dáng chụp ảnh. </p>
						
					
						</div>
						
						<div class="event">
                                 
							<a  href=" http://localhost:81/nhom14/php/rampwalkshow.php"target="_bank">
							<h5>Ramp Walk <span style="color: red"><ins>Shows</ins></span></h5>
							</a>
							
							<p class="lk">Cánh cửa biểu diễn trên sân khấu thời trang- lĩnh vực thời trang chỉ những bước đi nhẹ nhõm, uyển chuyển và khéo léo. </p>
							
							</div>
						</div>
					
			</div>
	<!--blog-->
	
	<section class="blog py-5 my-lg-5 my-3">
		<div class="text-center icon"> <span><h3><i class="fas fa-chess-queen"></i></h3></span> </div>
			<h3 class="heading text-center text-capitalize mb-sm-5 mb-4"> Bài Đọc </h3>
		<div class="container-fluid">
			<div class="row blog-posts">
				<div class="col-lg-4 col-sm-8 blog1 p-sm-5 p-4 bg-black text-white">
					<h3>Tạp chí thời trang</h3>
					<h4 class="py-4">Xu hướng thời trang thu đông 2020 cho phái đẹp</h4>
					<h6><i>Tháng 9 28, 2020</i></h6>
					<a href="http://localhost:81/nhom14/php/single3.php"target="_bank">Đọc Thêm</a>
				</div>
				<div class="col-lg-2 col-sm-4 blogimg p-0">
					<img src="images/model1.jpg">
				</div>
				<div class="col-lg-4 col-sm-8 blog2 p-sm-5 p-4 text-white bg-dark">
					<h3>Tạp chí thời trang</h3>
					<h4 class="py-4">Nguyên tắc phối đồ thu đông 2020 </h4>
					<h6><i>Tháng 9 28, 2020</i></h6>
					<a href="http://localhost:81/nhom14/php/single1.php"target="_bank">Đọc Thêm</a>
				</div>
				<div class="col-lg-2 col-sm-4 blogimg1 p-0">
					<img src="images/model2.jpg">
				</div>
				<div class="col-lg-2 col-sm-4 blogimg2 p-0">
					<img src="images/model3.jpg">
				</div>
				<div class="col-lg-4 col-sm-8 blog2 p-sm-5 p-4 text-white bg-dark">
					<h3>Tạp chí thời trang</h3>
					<h4 class="py-4">Cách phân biệt quần áo chính hãng các thương hiệu nổi tiếng</h4>
					<h6><i>Tháng 9 28, 2020</i></h6>
					<a href="single2.html"><b> Đọc thêm </b></a>
				</div>
				<div class="col-lg-2 col-sm-4 blogimg3 p-0">
					<img src="images/model4.jpg">
				</div>
				<div class="col-lg-4 col-sm-8 blog1 blog3 p-sm-5 p-4 text-white bg-black">
					<h3>Tạp chí thời trang</h3>
					<h4 class="py-4">Top 10 Thương hiệu thời trang công sở nữ nổi tiếng nhất hiện nay</h4>
					<h6><i>Tháng 9 28, 2020</i></h6>
					<a href="http://localhost:81/nhom14/php/single3.php"target="_bank">Đọc Thêm</a>
					
				</div>
			</div>
		</div>
	</section>
				
							
	
        <!--footer-->
		<section class="footer py-5" style="width:100%; position: absolute;background:#222222;margin-top:40px;margin-bottom:30px;color: #FFFFFF;font-family:Times New Roman;display:inline_block;">
	<div class="footer-top py-lg-3">
		<div class="container">
			<div class="row footer-grids">
				<div class="col-lg-4 col-md-6 footer-grid">
					<div class="footer-logo" >
						 <h3><a>Fashion Queen<i class="fas fa-crown fa-1x fa--font-size"></i></a></h3>
     		             <p>--For Top Models--</p>
     		             <p id="phai">Sản phẩm thời trang độc đáo,hợp xu thế, hiện đại thịnh hành</p>			          
						<ol class="mt-4 social" style="display:inline_block; margin-left:-100px">
							<li><a href="https://www.facebook.com/sun21720/" target="_bank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a><i class="fab fa-twitter"></i></a></li>
							<li><a><i class="fab fa-google-plus"></i></a></li>

						</ol>
					</div>
				</div>
				<div class="col-lg-3 ">
					<h5 class="mb-4">Subscribe <i class="fas fa-envelope-open"></i></h5>
					 <form action="users.php" method="post">
                             Nhạp vào tên bạn:</br>
                             <input type="username" name="username" placeholder="Name" required=""></br>
                             <input type="Email" name="Email" placeholder="Email" required=""></br>
                             <button name="gui">Gửi</button>
							 <button name="đăng ký"><a href="http://localhost:81/nhom14/dky_index.php"target="_bank">Đăng ký</a></button>
                      </form>
                    
    
				</div>
			
				<div class="col-lg-2 ">
					<h3 class="mb-4"> links <i class="fas fa-link"></i></h3>
					<ol>
					    
     		            <p><a href="#">Ra thiết kế</a></p>
     		            <p><a href="#">Dịch vụ ngoài</p>	
     		            <p><a href="#">Testimonials</a></p>
     		            <p><a href="#">Lời chứng thực</a></p>
     		            <p><a href="#">Tiếp xúc</a></p>
     	           </ol>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 footer-grid links">
					<h5 class="mb-4">liên hệ chúng tôi <i class="fas fa-map-marker"></i></h5>
					<h5>Tiếp xúc</h5>
			            <p><span>Địa chỉ:</span><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+M%E1%BB%8F+-+%C4%90%E1%BB%8Ba+ch%E1%BA%A5t/@21.0730197,105.7703291,15z/data=!4m8!1m2!2m1!1zxJHhuqFpIGjhu41jIG3hu48gxJHhu4thIGNo4bqldA!3m4!1s0x3134552defbed8e9:0x1584f79c805eb017!8m2!3d21.0723936!4d105.7738397" target="_bank">Số 18 Phố Viên, Đông Ngạc, Bắc Từ Liêm, Hà Nội, Việt Nam</a></p>
			            <p><span>Mobile:</span> +01(24) 3212 4456</p>
			            <p><span>Di động:</span> +01(24) 1366 2145</p>
     		            <p><span>Thư:</span> abc@gmail.com</p>
				</div>
			</div>
		</div>
	</div>
		<div class="wthree_copy_right py-4" style="padding: 550px;">
	            <p>& copy; 2020HH Fashion Queen. All rights reserved | Design by </p>
        </div>
     </div>
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>
