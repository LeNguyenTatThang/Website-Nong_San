@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Liệt kê danh mục sản phẩm
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
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>Trạng thái</th>  
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_category_product as $key=>$cate_pro)
          <tr>
            <td>{{$cate_pro->category_name}}</td>
            <td><span class="text-ellipsis">{{$cate_pro->category_desc}}</span></td>
            <td><span class="text-ellipsis">
              <?php
              if ($cate_pro->category_status==0) {
                echo 'Còn hàng <i class="fa-regular fa-circle-check"></i>';
              }else{
                echo 'Hết hàng <i class="fa-regular fa-circle"></i>';
              }
              ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="active styling_edit" ui-toggle-class="">
                <i class="fa-solid fa-pen-to-square"></i>
              </a>
              <a onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này ?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" class="active styling_edit" ui-toggle-class="">
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