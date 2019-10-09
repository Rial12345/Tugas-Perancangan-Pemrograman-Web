<?php
//koneksi ke database
$koneksi = new mysqli("localhost","root","","KompasSport");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MR KUN Online Shop</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">MR KUN_OS</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Terakhir Dibuka : 4 Oktober 2019 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li><a href="index.php"><i class="fa fa-Home fa-3x"></i> Home</a></li>
                    <li><a href="index.php?halaman=produk"><i class="fa fa-Home fa-3x"></i> produk</a></li>
                    <li><a href="index.php?halaman=pembelian"><i class="fa fa-Home fa-3x"></i> pembelian</a></li>
                    <li><a href="index.php?halaman=pelanggan"><i class="fa fa-Home fa-3x"></i> pelanggan</a></li>
                    <li><a href="index.php?halaman=logout"><i class="fa fa-Home fa-3x"></i> logout</a></li>
                </ul>
               
            </div>
            
        </nav>  
        <div id="page-wrapper" >
            <div id="page-inner">
            <?php
            if (isset($_GET['halaman']))
            {
                if ($_GET['halaman']=="produk")
                {
                    include 'produk.php';
                } 
                elseif  ($_GET ['halaman']=="pembelian")
                {
                    include 'pembelian.php';
                }
                elseif ($_GET['halaman']=="pelanggan")
                {
                    include 'pelanggan.php'; 
                }
            }
            else
            {
                include 'home.php';
            }         
            ?>
    </div>
            </div>
        </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <script src="assets/js/custom.js"></script>
    
</body>
</html>