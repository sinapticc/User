<!DOCTYPE html>
<html lang="en" dir="rtl" >

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>


    <link href="/css/style/style.css" rel="stylesheet">
    <link href="/css/skins.css" rel="stylesheet">
    <link href="/css/dark-style.css" rel="stylesheet">
    <link href="/css/colors/default.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="/img/brand/favicon.ico" type="image/x-icon" />


    <!-- Bootstrap css-->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css-->
    <link href="/plugins/web-fonts/icons.css" rel="stylesheet" />
    <link href="/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/web-fonts/plugin.css" rel="stylesheet" />

    <!-- Style css-->
    <link href="/css/style/style.css" rel="stylesheet">
    <link href="/css/skins.css" rel="stylesheet">
    <link href="/css/dark-style.css" rel="stylesheet">
    <link href="/css/colors/default.css" rel="stylesheet">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="/css/colors/color.css">

    <!-- Select2 css -->
    <link href="/plugins/select2/css/select2.min.css" rel="stylesheet">


    <!-- Sidemenu css-->
    <link href="/css/sidemenu/sidemenu.css" rel="stylesheet">





	</head>

	<body class="main-body leftmenu">


		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-3 pt-3 p-2 pos-absolute">
									<img src="/img/brand/logo-light.png" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="/img/svgs/user.svg" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">گذرواژه خود را بازنشانی کنید</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">میتوانید با وارد کردن ایمیل خود، رمز عبور خود را بازیابی کنید</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
											<div class="clearfix"></div>
											<h5 class="text-right mb-2">رمز عبور را فراموش کرده اید</h5>

											<form action="{{route('forget.password.post')}}" method="POST">
												@csrf
												<div class="form-group text-right">
													<label>پست الکترونیک</label>
													<input class="form-control" placeholder="ایمیل خود را وارد کنید" type="text" value="" name="email">
												</div>
												<button class="btn ripple btn-main-primary btn-block">پیوند تنظیم مجدد را درخواست کنید</button>
											</form>
											<div class="card-footer border-top-0 pr-0 mt-3 text-right">
												<p>آیا رمز عبور خود را به یاد آوردید؟</p>
												<p class="mb-0"> <a href="login">وارد شوید</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->


<!-- Jquery js-->
<script src="/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="/plugins/bootstrap/js/popper.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Select2 js-->
<script src="/plugins/select2/js/select2.min.js"></script>


<!-- Custom js -->
<script src="/js/custom.js"></script>

<!-- Switcher js -->
<script src="/switcher/js/switcher-rtl.js"></script>








	</body>

</html>
