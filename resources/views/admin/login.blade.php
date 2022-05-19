<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
	<link rel="shortcut icon" type="{{ asset('assets/image/png') }}" href="{{ asset('assets/images/favicon.png')}}" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<style type="text/css">
    .dz-demo-panel{display: none;}
</style>

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                               
                                <div class="auth-form">
									<div class="text-center mb-3" style="background-color: #fff;">
										<a href="{{url('/')}}">
                                            <img src="{{ asset('assets/images/logo-full.png') }}" alt="" width="100%" style="background-color: #FD683E;"></a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form class="user" method="post" action="{{route('admin.login')}}"> 
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" value="" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" value="" required>
                                        </div>
                                       
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->

    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>
</body>

</html>
