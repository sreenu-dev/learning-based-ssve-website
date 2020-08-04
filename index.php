<!doctype html>
<html lang="en">
  <head>
  	<title>SSVE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			            <nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
                                    <center><h1><a href="index.html" class="logo"><img src="images/namalu.png" height=100px width=100px></a><span>SSVE</span></h1></center>
	        <ul class="list-unstyled components mb-5">
	          <li>
                      <a href="index.php">Home</a>
	          </li>
	          <li>
	              <a href="#">About</a>
	          </li>
                  <li>
	            <a href="#expenses" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Expenses</a>
	            <ul class="collapse list-unstyled" id="expenses">
                <li>
                    <a href="#">Personal</a>
                </li>
	            </ul>
	          </li>
	          <li>
              <a href="#shop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Shop</a>
              <ul class="collapse list-unstyled" id="shop">
                <li>
                    <a href="#">Contacts</a>
                </li>
                <li>
                    <a href="#">Items</a>
                </li>
                <li>
                    <a href="Billing.php">Billing</a>
                </li>
                <li>
                    <a href="#">Bills/Invoices</a>
                </li>
                <li>
                    <a href="#">Payments</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#">Portfolio</a>
	          </li>
	          <li>
              <a href="#">Contact</a>
	          </li>
	        </ul>

	        <div class="mb-5">
						<h3 class="h6">Subscribe for newsletter</h3>
						<form action="#" class="colorlib-subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <!--<h2 class="mb-4">Sidebar #02</h2>-->
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
        <h2 class="mb-4">Quote of the Day</h2>
        <p>
            <?php 
            $command= "python python\quote.py";
            $excuted= shell_exec($command);
            echo $excuted;
//            include './get_quote.php';?>
        </p>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>