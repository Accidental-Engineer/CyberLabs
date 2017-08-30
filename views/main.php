<html>
<head>
	<title>CyberLabs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script type = "text/JavaScript" src = "<?php echo ROOT_PATH; ?>assets/js/slideshow.js"></script>
	<script type = "text/JavaScript" src = "<?php echo ROOT_PATH; ?>assets/js/jquery/jquery.js"></script>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css"/>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/font-awesome/css/font-awesome.css"/>
	<script>
		$(document).ready(function(){
			slideshow();
		});
	</script>
</head>
<body style = "height: 100%">
			<div class="menu">
					<ul>
						<?php if(isset($_SESSION['is_logged_in'])) : ?>
							<a href="<?php echo ROOT_URL; ?>users/profile">
								<li class="tab"><i class="fa fa-user"></i><span>&nbsp;&nbsp;<?php echo explode(' ', $_SESSION['user_data']['name'])[0]; ?></span></li>
							</a>
							<a href="<?php echo ROOT_URL; ?>users/logout">
								<li class="tab"><i class="fa fa-sign-out" data-linkInfo = "Logout"></i></li>
							</a>
						<?php else: ?>
							<a href="<?php echo ROOT_URL; ?>users/register">
								<li class="tab"><i class="fa fa-user-plus"></i><span>&nbsp;&nbsp;Register</span></li>
							</a>
							<a href="<?php echo ROOT_URL; ?>users/login">
								<li class="tab"><i class="fa fa-sign-in"></i><span>&nbsp;&nbsp;Login</span></li>
							</a>
						<?php endif; ?>
							<a href="<?php echo ROOT_URL; ?>shares">
								<li class="tab">  <i class="fa fa-binoculars"></i><span>&nbsp;&nbsp;Ideas</span></li>
							</a>
							<a href="<?php echo ROOT_URL; ?>">
								<li class="tab">  <i class="fa fa-home"></i><span>&nbsp;&nbsp;Home</span></li>
							</a>
					</ul>
			</div>
    <div class="container">

     <div class="row">
      <?php Messages::display(); ?>
     	<?php require($view); ?>
     </div>

    </div>
</body>
</html>
