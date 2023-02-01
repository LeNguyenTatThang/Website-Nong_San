@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Liệt kê sản phẩm
    </div>
     <?php
      $messages=Session::get('message');
      if($messages){
        echo '<span class="text-alert">'.$messages.'</span>';
        Session::put('message',null);
      }
     ?>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Hình sản phẩm</th>
            <th>Mô tả sản phẩm</th>
            <th>Danh mục</th>  
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_product as $key=>$cate_pro)
          <tr>
            <td>{{$cate_pro->product_name}}</td>
            <td>{{$cate_pro->product_price}}</td>
            <td><img src="public/uploads/product/{{$cate_pro->product_image}}" height="100" width="100"></td>
            <td>{{$cate_pro->product_desc}}</td>
            <td>{{$cate_pro->category_name}}</td>
            <td>
              <a href="{{URL::to('/edit-product/'.$cate_pro->product_id)}}" class="active styling_edit" ui-toggle-class="">
                <i class="fa-solid fa-pen-to-square"></i>
              </a>
              <a href="{{URL::to('/delete-product/'.$cate_pro->product_id)}}" class="active styling_edit" ui-toggle-class="">
                <i class="fa-solid fa-delete-left"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection