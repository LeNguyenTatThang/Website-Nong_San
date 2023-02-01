<!DOCTYPE html>
<html lang="en">
<head>
    @include('pages.Master')
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        @include('pages.header')
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        @include('pages.slide')
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($category as $key =>$cate)                          
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>                          
                            @endforeach
                        </div><!--/category-products-->                    
                    </div>
                </div>                
                <div class="col-sm-9 padding-right">
                    @yield('content') 
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        @include('pages.footer')
    </footer><!--/Footer-->

    <script src="{{asset('public/fontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/fontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/fontend/js/main.js')}}"></script>
</body>
</html>