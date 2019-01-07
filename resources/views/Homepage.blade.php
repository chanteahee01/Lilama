<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<title>Lilama-Store</title>
	<link rel="stylesheet" href="{{asset('../public/css/app.css')}}">
	<link rel="stylesheet" href="{{asset('../public/css/header.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
	<!--Start-Page-->
	<div class="container-fluid">
      
      <div class="row one"> <!--Header-page-->
       
        <div class="col-md-4">
          <form class="form-inline">
			  <div class="form-group">
				  <input type="search" class="form-control" placeholder="Nhập sản phẩm cần tìm kiếm" size='35'>
				  <button type="button" class="btn btn-primary"><i class="fas fa-search-plus">Tìm Kiếm</i></button>			  
			  </div>
		  </form>   
		</div>
		<div class="col-md-8">
            <nav class="nav justify-content-end">
			  <a class="nav-link" href="#"><i class="fas fa-check">Kiểm tra đơn hàng</i></a>
			  <a class="nav-link" href="#"><i class="fas fa-cart-plus">Giỏ hàng</i></a>
			  <a class="nav-link " href="#"><i class="fas fa-sign">Đăng ký</i></a>
			  <a class="nav-link" href="#"><i class="fab fa-sign-in-alt">Đăng nhập</i></a>
			</nav>
		</div>	
       
	  </div> <!--End-Header-->
 
 
	    <div class="row two"> 

            <div class="col-lg-3">
               <div class="list-group"><!--ListProduct-->
				    <span class="list-group-item"><i class="fas fa-list ">Danh Mục Sản Phẩm</i></span>
				   @foreach ($typeproduct as $item)					   				 
				   <a href="#" class="list-group-item ">{{$item->cate_name}}</a>			  
				     @endforeach
			   </div>
			</div><!--ListProduct-->

			<div class="col-lg-8"> <!--Slider-->
         
       
     jjjjj
     
     
			</div><!--End-Slider-->
		</div>   
		<div class="main-container">
			fff
		</div>
	
		<div class="row">
            <footer style="color:red; width: 1200px;">
			   Copyright © 2018 Lương Ngọc Khánh-Tin24A1-UNETI
		   </footer>
        </div>
           
	 
	</div>	

   
</body>
</html>