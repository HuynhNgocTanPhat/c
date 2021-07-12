<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Live Dinner Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="user/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="user/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('user/css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{URL::asset('user/css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{URL::asset('user/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::asset('user/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
@include('giaodienchinh.Type.header');
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>THÔNG TIN VỀ CHÚNG TUI</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1><span>Khám Phá Về Chúng Tui</span></h1>
						<h2>Nhà hàng Nam Bộ – Hiện thân hoàn hảo của tầng cao ẩm thực xa hoa, cao cấp đương đại. 
							Với tầm nhìn mang đến một không gian ẩm thực sang trọng, dịch vụ chuyên nghiệp cùng nhiều món ăn đẳng cấp dành riêng cho giới thượng lưu tại Sài Gòn. 
							Nam Bộ Quán cam kết mang đến những trải nghiệm ẩm thực tinh tuý đến từ những gì chất lượng nhất và thật nhất, xứng đáng với “giá trị tài chính” mà khách hàng đã bỏ ra để đến với chúng tôi.  </h2>
						<!-- <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a> -->
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="user/images/about-img.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-md-12">
					<div class="inner-pt">
						<!-- <p>Sed tincidunt, neque at egestas imperdiet, nulla sapien blandit nunc, sit amet pulvinar orci nibh ut massa. Proin nec lectus sed nunc placerat semper. Duis hendrerit elit nec sapien porttitor, ut pretium ipsum feugiat. Aenean volutpat porta nisi in gravida. Curabitur pulvinar ligula sed facilisis bibendum. Nullam vitae nulla elit. </p>
						<p>Integer purus velit, eleifend eu magna volutpat, porttitor blandit lectus. Aenean risus odio, efficitur quis erat eget, mattis tristique arcu. Fusce in ante enim. Integer consectetur elit nec laoreet rutrum. Mauris porta turpis nec tellus accumsan pellentesque. Morbi non quam tempus, convallis urna in, cursus mauris. </p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->


	@include('giaodienchinh.contactinfo');
	@include('giaodienchinh.Type.footer');
<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

<!-- ALL JS FILES -->
<script src="{{URL::asset('user/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::asset('user/js/popper.min.js')}}"></script>
<script src="{{URL::asset('user/js/bootstrap.min.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{URL::asset('user/js/jquery.superslides.min.js')}}"></script>
<script src="{{URL::asset('user/js/images-loded.min.js')}}"></script>
<script src="{{URL::asset('user/js/isotope.min.js')}}"></script>
<script src="{{URL::asset('user/js/baguetteBox.min.js')}}"></script>
<script src="{{URL::asset('user/js/form-validator.min.js')}}"></script>
<script src="{{URL::asset('user/js/contact-form-script.js')}}"></script>
<script src="{{URL::asset('user/js/custom.js')}}"></script>
</body>
</html>