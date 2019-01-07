<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<title>Lilama-Store</title>
	<link rel="stylesheet" href="{{asset('../public/css/app.css')}}">
	<link rel="stylesheet" href="{{asset('../public/css/dasaboard.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<script>
   $(document).ready(function() {
    $("product").click(function() {
        $("#product-1").slideToggle("slow");
    });
    
  
});

</script>
<script src="{{asset('../public/js/app.js')}}"></script>
</head>


<body>
	<!--Start-Page-->
	<div class="container-fluid">
      <div class="header"> <!--Header-page-->
        <div class="left">
          <h3>Dasaboard</h3>
		</div>
		<div class="right">
            <nav class="nav justify-content-end">
			  <a class="nav-link" href="#"><i class="fas fa-check">Kiểm tra đơn hàng</i></a>
			  
			</nav>
		</div>	  
	  </div> <!--End-Header-->
	    <div class="row two"> 
            <div class="col-lg-3">
               <div class="list-group"><!--ListProduct-->
				       <span class="list-group-item"><h5>Dasaboard</h5></span>
								<li class="list-group-item">
									<i class="fas fa-user-clock">
									<a href="">Quản Lý User</a>
									<b class="caret"></b>
									</i>
								</li>
								<li class="list-group-item">
									<i class="fas fa-list-ul    ">
										<a href="">Quản Lý Danh Mục</a>
									</i>
								</li> 
								<li class="list-group-item">
									<i class="fas fa-product-hunt ">
										<a href="">Quản Lý Sản Phẩm</a>
									</i>
								</li>
								<li class="list-group-item">
									<i class="fas fa-money-bill    ">
										<a href="">Hóa Đơn</a>
									</i>
								</li>	<li class="list-group-item">
								   <i class="fas fa-newspaper    ">
										 <a href="">Quản lý News</a>
									 </i>
								</li>        
			</div><!--ListProduct-->
			<div class="col-lg-9"> <!--Slider-->
                  <table class="table table-bordered">  .
					  fff
					  .. </table> 
				
			</div><!--End-Slider-->
		</div>   
	</div>	
</body>
</html>