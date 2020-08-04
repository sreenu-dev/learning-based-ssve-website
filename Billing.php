<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
  	<title>Billing</title>
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
        <div id="content" class="p-4 p-md-5 pt-5">

        <!--<h2 class="mb-4">Sidebar #02</h2>-->
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
        <h2 class="mb-4">Billing Details</h2>
        <p>
            <?php 
                include './connection.php'
            ?>
        </p>
        <form action="bill_acquire.php" method="POST">
        <table>
            <tr><td><b>Customer Name:</b></td><td><input class="input-group-text" type="text" name="cust_name"></td></tr>
            <tr><td>Bill No:</td><td><input type="number" name="bill_no" class="input-group-text"></td></tr>
            <tr><td>Date:</td><td><input type="date" name="date" class="input-group-lg"</td></tr>
        </table>
            <table class="table-bordered" id="items">
                <thead><td></td><td>Item NO</td><td>Item Name</td><td>Item Cost</td><td>Quantity</td><td>Rate</td></thead>
            <tbody>
                <tr><td><input type="checkbox" name="select"></td><td><input type="number" name="item_no" class="small"></td><td><input type="text" name="item_name" class="small"></td><td><input type="text" name="item_cost" class="small"></td><td><input type="number" name="quantity" class="small"></td><td><input type="text" name="rate" class="small"></td></tr>
            </tbody>
            <tfoot>
            <td colspan="3" style="text-align: center"><button type="button" id="add_item">Add Item</button></td><td colspan="3" style="text-align: center"><button type="button" id="remove_item">Remove Items</button></td>
            </tfoot>
            </table>
        </form>
      </div>
        </div>
       <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/billing_jquery.js"></script>
    </body>
</html>
