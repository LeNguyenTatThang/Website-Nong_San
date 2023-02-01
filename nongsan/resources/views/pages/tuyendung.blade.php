<!DOCTYPE html>
<html lang="en">
<head>
    @include('pages.Master')
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        @include('pages.header')
    </header><!--/header-->
    
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Tuyển dụng thành viên</h2>

        <li><center>Chúng tôi hiện chưa có nhu cầu tuyển dụng!</center></li>
        </br></br></br></br>
    </div>

    
    
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