<!DOCTYPE html>
<html>
<head>
	<link
	rel="stylesheet"
	href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	/>
	<link
	rel="stylesheet"
	href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
	/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/style1.css" />
</head>
<body>
<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="index.php">Online Book Store</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" 
		         id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" 
		             aria-current="page" 
		             href="index.php">Store</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" 
		             href="">Contact</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" 
		             href="#">About</a>
		        </li>
		        <li class="nav-item">
		          <?php if (isset($_SESSION['user_id'])) {?>
		          	<a class="nav-link" 
		             href="admin.php">Admin</a>
		          <?php }else{ ?>
		          <a class="nav-link" 
		             href="login.php">Login</a>
		          <?php } ?>

		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	<section id="last">
	<!-- heading -->
	<div class="full">
		<h3>Drop a Message</h3>

		<div class="lt">

		<!-- form starting -->
		<form class="form-horizontal"
				method="post" action="mail.php">
			<div class="form-group">
			<div class="col-sm-12">
				<!-- name -->
				<input
				type="text"
				class="form-control"
				id="name"
				placeholder="NAME"
				name="name"
				value=""
				/>
			</div>
			</div>

			<div class="form-group">
			<div class="col-sm-12">
				<!-- email -->
				<input
				type="email"
				class="form-control"
				id="email"
				placeholder="EMAIL"
				name="email"
				value=""
				/>
			</div>
			</div>

			<!-- message -->
			<textarea
			class="form-control"
			rows="10"
			placeholder="MESSAGE"
			name="message">
			</textarea>

			<button
			class="btn btn-primary send-button"
			id="submit"
			type="submit"
			value="SEND" onclick="alert('Submitted Successfully')">
			<i class="fa fa-paper-plane"></i>
			<span class="send-text">SEND</span>
			</button>
		</form>
		<!-- end of form -->
		</div>

		<!-- Contact information -->
		<div class="rt">
		<ul class="contact-list">
			<li class="list-item">
			<i class="fa fa-map-marker fa-1x">
				<span class="contact-text place">
				your address
				</span>
			</i>
			</li>

			<li class="list-item">
			<i class="fa fa-envelope fa-1x">
				<span class="contact-text gmail">
				<a href="mailto:yourmail@gmail.com" title="Send me an email">
					email@gmail.com</a>
				</span>
			</i>
			</li>

			<li class="list-item">
			<i class="fa fa-phone fa-1x">
				<span class="contact-text phone">
				
				</span>
			</i>
			</li>
		</ul>
		</div>
	</div>
	</section>
</body>
</html>
