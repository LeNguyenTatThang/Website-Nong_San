@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container">
		<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				  <li class="active">Thanh toán giỏ hàng</li>
				</ol>
			</div>

			

			<div class="register-req">
				<p>Vui lòng đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Điền thông tin đặt hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
									{{csrf_field()}}
									<input type="text" name="shipping_email" placeholder="Email"  required="required">	
									<input type="text" name="shipping_name" placeholder="Họ tên"  required="required">
									<input type="text" name="shipping_address" placeholder="Địa chỉ"  required="required">
									<input type="text" name="shipping_phone" placeholder="Số điện thoại"  required="required">
									<textarea name="shipping_notes"  placeholder="Ghi chú đơn hàng của bạn" rows="16"  required="required"></textarea>
									<input type="submit" value="Gui" name="send-order" class = "btn btn-primary">
								</form>
							</div>
							
						</div>
					</div>
									
				</div>
			</div>
			
		</div>
	</section> <!--/#cart_items-->
@endsection