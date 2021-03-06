<?php 
	$objCatalogue = new Catalogue();
	$cats = $objCatalogue->getCategories();

	$objBusiness = new Business();
	$business = $objBusiness->getBusiness();
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="eCommerce tutorial">
	<meta name="keywords" content="HTML,CSS,PHP,MySQL,ecommerce">
	<meta name="author" content="Alex Tenche">
	<title>eCommerce</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link href="css/custom.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
	#navigation li {
		list-style: none;
		margin-left: 0;
	}
	#navigation{
		margin-left: 0;
		padding: 0;
	}
	.footer{
	background: #333;
	color: #fff;
	height: 70px;
	text-align:  center;
	padding-top: 20px;
}
.panel-heading-dark{
	background: #333333 !important;
	color: #fff !important;
}
* {
    margin: 0;
}
html, body {
    height: 100%;
}
.container {
    min-height: 100%;
    height: auto !important;
    height: 100%;
    margin: 0 auto -50px; /* the bottom margin is the negative value of the footer's height */
}
.footer, .push {
    height: 50px; /* .push must be the same height as .footer */
}
.panel-heading-green{
	background: #3b7e14 !important;
	color: #fff !important;
}
	</style>
</head>

<body>


	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="/eCommerce/" class="navbar-brand"><?php echo $business['name']; ?></a>
			</div>

			<div class="collapse navbar-collapse">
				<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-success">Log In</button>
				</form>
			</div>

		</div>
	</div>



	<!--<div id="header">
	<div id="header_in">
		<h5><a href="/"><?php echo $business['name']; ?></a></h5>
		<?php
			/*if (Login::isLogged(Login::$_login_front)) {
				echo '<div id="logged_as">Logged in as: <strong>';
				echo Login::getFullNameFront(Session::getSession(Login::$_login_front));
				echo '</strong> | <a href="?page=orders">My orders</a>';
				echo ' | <a href="?page=logout">Logout</a></div>';				
			} else {
				echo '<div id="logged_as"><a href="?page=login">Login</a></div>';
			}*/
		?>
	</div>
	</div>-->

<div class="container">
	<div class="row">
		<div class="col-md-4" id="left">
			<?php require_once('basket_left.php'); ?>

			<div class="panel panel-default panel-list">
					<div class="panel-heading panel-heading-dark">
						<h3 class="panel-title">Categories</h3>
					</div>

					<!--List group-->
					<ul class="list-group" id="navigation">
					<?php foreach($cats as $cat) :
					echo "<li class='list-group-item'><a href=\"?page=catalogue&amp;category=".$cat['id']."\"";
					echo Helper::getActive(array('category' => $cat['id']));
					echo ">";
					echo Helper::encodeHtml($cat['name']);
					echo "</a></li>";
				endforeach; ?>
						
						<!--<li class="list-group-item"><a href="#">Other Console Games</a></li>-->
					</ul>
				</div>


							
		</div>


		<div class="col-md-8" id="right">