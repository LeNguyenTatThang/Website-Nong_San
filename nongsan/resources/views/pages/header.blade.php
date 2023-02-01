<div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/fontend/images/logo.jpg')}}" alt="" /></a>
                        </div>
                        
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id != null){
                                ?>   
                                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Đăng xuất</a>
                                <?php 
                                    }else{
                                ?>
                                <li><a href="{{URL::to('/login')}}"><i class="fa fa-lock"></i> Đăng nhập </a></li>
                                <li><a href="{{URL::to('/register')}}"><i class="fa fa-key"></i> Đăng kí </a></li>   
                                <?php } ?>
                                
                                <li>
                                    <a><i class="fa fa-user"></i>
                                        <span class="username">
                                            <?php
                                               $name=Session::get('customer_name');
                                                if($name){
                                                    echo $name;
                                                }
                                            ?>
                                        </span>
                                    </a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/san-pham')}}">Danh Sách Sản Phẩm</a></li>
                                    </ul>
                                </li>                                                                    
                                </li> 
                              
                                <li><a href="{{URL::to('/tuyendung')}}">Tuyển dụng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="search_box pull-right">
                            <form action="{{URL::to('/search')}}" method="get"enctype="multipart/form-data">                               
                                <button type="submit" class="btn btn-destroy"><a class="fa fa-search"></a></button>
                                <input type="text" name="keywords_submit" id="txtseach" placeholder="Tìm Kiếm"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->