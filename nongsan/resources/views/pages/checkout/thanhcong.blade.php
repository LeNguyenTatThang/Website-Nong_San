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
					
                    <div class="alert alert-success" role="alert"> Đặt hàng thành công. </div>
					
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