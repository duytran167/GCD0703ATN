<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATNPCStore</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="pxslider/jquery.bxslider.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="pxslider/jquery.bxslider.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#slider").bxSlider({
                    auto:true,
                    speed:500,
                    autoControls: true,
                });
            });
        </script>
</head>
<body>
	<header>
	<div class="menu">
		<div class= "logo">
			<h1> ATN</h1>	
	</div>
    	<ul>
    		<li><a href="#" style="background: #f1f1f1">View</a></li>
    		<li>
    			<a href="file:///D:/duy_tran/index2.html">Insert</a>
    			<ul class="sub-menu">
    				<li><a href="#">Season 1</a></li>
    				<li><a href="#">Season 2</a></li>
    				<li><a href="#">Special</a></li>
    			</ul>
    		</li>
    		<li><a href="#">Update</a>
    			<ul class="sub-menu">
    				<li><a href="#">Season 1</a></li>
    				<li><a href="#">Season 2</a></li>
    				<li><a href="#">Special</a></li>
    			</ul>
    		</li>
    		<li><a href="#">Deleted</a>
    			<ul class="sub-menu">
    				<li><a href="#">Season 1</a></li>
    				<li><a href="#">Season 2</a></li>
    				<li><a href="#">Special</a></li>
    			</ul>
    		</li>
    		<li><a href="#">MORE</a>
    			<ul class="sub-menu">
    				<li><a href="https://www.facebook.com/duytran1607">Facebook</a></li>
    				<li><a href="https://instagram.com/ditranne/">Instagram</a></li>
    				<li><a href="#">Help</a></li>
    				
    			</ul>
    		</li>
    		<li><a><img src="images/logo6.png" style="width: 22%"></a></li>
    		<li><a><img src="images/logo3.jpg"></a></li>
    		<li><a><img src="images/logo4.png"></a></li>
    		
    	</ul>
    

    </header>

    <div class="img">
    	<img src="images/anh1.jpg" style="width: 100%">
    </div>
        <div class="row">
        	<div class="col-md-12">
        		<h1>Most Polular</h1>
        	</div>
        </div>
        <div class="row" >
            <div class="col-md-2" id="item">
            <div id="card">
                <a href="detail.html"><img src="images/ao1.png" alt="images"></a>
                <div class="card-body">
                    <h3><a href="#">OVERSIZE TEE SS1</a></h3>
                    <h5>399.000 đ</h5>
                </div>
            </div>
            <div id="card">
                <a href="detail.html"><img src="images/ao2.png" alt="images"></a>
                <div class="card-body">
                    <h3><a href="#">DENIM JACKET SS1</a></h3>
                    <h5>699.000 đ</h5>
                </div>
            </div>
            <div id="card">
                <a href="detail.html"><img src="images/quan1.png" alt="images"></a>
                <div class="card-body">
                    <h3><a href="#">BLACK CARGO PANTS</a></h3>
                    <h5>549.000 đ</h5>
                </div>
            </div>
            <div id="card">
                <a href="detail.html"><img src="images/quan2.png" alt="images"></a>
                <div class="card-body">
                    <h3><a href="#">BLACK JEANS PANTS</a></h3>
                    <h5>599.000 đ</h5>
                </div>
            </div>
        </div>     
        </div>
    <div class="row" id="sliders">
            <div id="slider">
                <div><img src="images/slider1.png" id="large" ></div>
                <div><img src="images/slider2.png" id="large" ></div>
                <div><img src="images/slider5.jpg" id="large" ></div>
            </div>
        </div>
</body>
<footer>
	<div><h2>Supported by HYPEBEAST and DUYTRAN®
<p>Copyright in 2019©</p>
<p>Contact in email: duytranstreet@gmail.com</p>
<p>--------------------------------------------</p>
</h2>


<div class="footer">
  <p>SHOPPING</p>
</div>
</footer>
</html>
