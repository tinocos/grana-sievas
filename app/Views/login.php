<?php 
    $language = \Config\Services::language();
    $language->setLocale('en_US'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Sievas V2 - GRANA Internacional </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="../css/bootstrap-extend.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="../css/master_style.css">

	<!-- UltimatePro Admin skins -->
	<link rel="stylesheet" href="../css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition bg-img" style="background-image: url(../images/banner.jpg);" data-overlay="1">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
							<img src="../images/logo_grana_bg.png" />
						</div>
						<div class="p-30 content-bottom rounded bg-img box-shadowed" style="background-image: url(../../images/auth-bg/bg.jpg);" data-overlay="8">
							<form action="../index.html" method="post">
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent bt-0 bl-0 br-0 no-radius text-white"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control pl-15 bg-transparent bt-0 bl-0 br-0 text-white" placeholder="<?php echo lang('Translate.usuario'); ?>">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text  bg-transparent bt-0 bl-0 br-0 text-white"><i class="ti-lock"></i></span>
										</div>
										<input type="password" class="form-control pl-15 bg-transparent bt-0 bl-0 br-0 text-white" placeholder="<?php echo lang('Translate.password'); ?>">
									</div>
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="checkbox text-white">
										<input type="checkbox" id="basic_checkbox_1" >
										<label for="basic_checkbox_1"><?php echo lang('Translate.recuerdame'); ?></label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 <div class="fog-pwd text-right">
										<a href="javascript:void(0)" class="text-white hover-info"><i class="ion ion-locked"></i> <?php echo lang('Translate.recordar_password'); ?></a><br>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info btn-block margin-top-10"><?php echo lang('Translate.iniciar_sesion'); ?></button>
									</div>
									<!-- /.col -->
								  </div>
							</form>														

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<!-- jQuery 3 -->
	<script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- popper -->
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
