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
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>THỰC ĐƠN</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>THỰC ĐƠN</h2>
						<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p> -->
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Tổng Hợp Thực Đơn</a>
						<a class="nav-link" id="v-pills-morning-tab" data-toggle="pill" href="#v-pills-morning" role="tab" aria-controls="v-pills-morning" aria-selected="false">Thực Đơn Sáng</</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Thực Đơn Trưa</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Thực Đơn Tối</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Đồ Uống</a>
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
							<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/1.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bún Bò Huế</h4>
											<p></p>
											<h5> 30.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/2.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bánh Mì Opla</h4>
											<p></p>
											<h5> 20.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/3.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bánh Cuốn</h4>
											<p></p>
											<h5> 15.000 - 40.000 đồng</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/4.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bánh Mì Thập Cẩm</h4>
											<p></p>
											<h5> 20.000 đồng</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/5.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Cơm Tấm</h4>
											<p></p>
											<h5> 25.000 đồng</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/6.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Phở Bò</h4>
											<p></p>
											<h5> 35.000 đồng</h5>
										</div>
									</div>
								</div>			
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/7.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>SaLad Trộn</h4>
											<p></p>
											<h5> 25.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/8.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Sườn Xào Chua Ngọt</h4>
											<p></p>
											<h5> 130.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/9.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Tôm Rim Nước Dừa</h4>
											<p></p>
											<h5> 90.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="user/images/10.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Đùi Ớt Xào Xả Ớt</h4>
											<p></p>
											<h5> 95.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="user/images/11.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bò Xào Rau Củ</h4>
											<p></p>
											<h5> 70.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="user/images/12.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Canh Chua Cá Lóc</h4>
											<p></p>
											<h5> 30.000 đồng</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="user/images/14.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Cà Phê</h4>
											<p></p>
											<h5> 20.000 - 36.000 đồng</h5>
										</div>
									</div>
							    </div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="user/images/15.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>MatCha Đá Xay</h4>
											<p></p>
											<h5> 30.000 - 59.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="user/images/16.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Trà Hồng Đào</h4>
											<p></p>
											<h5> 15.000 - 25.000 đồng</h5>
										</div>
									</div>
								</div>
							</div>
							
						</div>

						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="user/images/14.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Cà Phê</h4>
											<p></p>
											<h5> 20.000 - 36.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="user/images/15.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Matcha Đá Xay</h4>
											<p></p>
											<h5> 30.000 - 59.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="user/images/16.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Trà Hồng Đào</h4>
											<p></p>
											<h5> 15.000 - 25.000 đồng</h5>
										</div>
									</div>
								</div>
							</div>
							
						</div>

						<div class="tab-pane fade" id="v-pills-morning" role="tabpanel" aria-labelledby="v-pills-morning-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/1.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bún Bò Huế</h4>
											<p></p>
											<h5> 30.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/2.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bánh Mì Opla</h4>
											<p></p>
											<h5> 20.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/3.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bánh Cuốn</h4>
											<p></p>
											<h5> 15.000 - 40.000 đồng</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/4.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bánh Mì Thập Cẩm</h4>
											<p></p>
											<h5> 20.000 đồng</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/5.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Cơm Tấm</h4>
											<p></p>
											<h5> 25.000 đồng</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/6.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Phở Bò</h4>
											<p></p>
											<h5> 35.000 đồng</h5>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/7.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>SaLad Trộn</h4>
											<p></p>
											<h5> 25.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/8.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Sườn Xào Chua Ngọt</h4>
											<p></p>
											<h5> 130.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/9.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Tôm Rim Nước Dừa</h4>
											<p></p>
											<h5> 90.000 đồng</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="user/images/13.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Cá Chiên Nước Mắm</h4>
											<p></p>
											<h5> 76.000 đồng</h5>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="user/images/10.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Đùi Ớt Xào Xả Ớt</h4>
											<p></p>
											<h5> 95.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="user/images/11.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bò Xào Rau Củ</h4>
											<p></p>
											<h5> 70.000 đồng</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="user/images/12.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Canh Chua Cá Lóc</h4>
											<p></p>
											<h5> 30.000 đồng</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						<!-- " If you're not the one cooking, stay out of the way and compliment the chef. " -->
						" Nếu bạn không phải là người nấu ăn, hãy tránh xa và khen đầu bếp."
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>ĐỐI TÁC</h2>
						<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="user/images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<!-- <h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p> -->
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="user/images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<!-- <h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p> -->
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="user/images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<!-- <h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p> -->
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
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