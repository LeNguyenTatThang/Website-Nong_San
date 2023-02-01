<!DOCTYPE html>
<html lang="en">
<head>
    @include('pages.Master')
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		@include('pages.header')
	</header><!--/header-->
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="login-form" align="center"><!--login form-->
						<h2>Đăng nhập tài khoản của bạn</h2>
						<form action="{{URL::to('/login-p')}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
							<input type="email" placeholder="Email" name="customer_email"  required="required"/>
							<input type="password" placeholder="Mật khẩu" name="customer_password"  required="required"/></br>
							<button type="submit" class="btn btn-default">Đăng Nhập</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<footer id="footer"><!--Footer-->
		@include('pages.footer')
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/fontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/fontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/fontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/fontend/js/main.js')}}"></script>
</body>
</html>