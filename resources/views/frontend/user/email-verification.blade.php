@include('frontend.includes.header')
<div class="property-page-area pd-top-120 pd-bottom-90 body-bg">
  <div class="page-header header-filter login" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
    <div class="container">

       <div class="login_area">
      <div class="row" style="justify-content: center;margin-top: 30px;margin-bottom: 40px;">

       <!--  <div class="col-md-6">
            <div class="login_left_section">

            </div>
        </div> -->
        <div class="col-md-6">
              <div class="card card-login">
            
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Email Verification</h4>
              </div>
              <p class="description text-center">Please verify your email address</p>
              <div class="card-body">
								<div class="login-error">{!! Session::get('msg1') !!}</div>
                 <div class="login_area ">
             
               <div class="login_form">                
								
								<div class="msg">{!! Session::get('msg') !!}</div>
								<p>You need to verify your email address. We've sent an email to <b><u>{{ $user->email }}</u></b> to verify your address. Please click the link in that email to continue.</p>
								{{-- <p>Click <a href="javascript:void(0);" onclick="resend_verification_link();">here</a> to resend verification link.</p> --}}
							 
								<p class="tett_sinn text-center">
								 Or click here to <a href="{{ route('user.logout') }}">Logout</a>
								</p>
								<!-- <h4 class="or_line">
									<span>OR</span>
								</h4> -->
								
						 </div>
              
            </div>
              </div>
              <br>
          </div>
        </div>
       
      </div>
    </div>
      
    </div>
    </div>
 </div> 
      
@include('frontend.includes.footer')
<script>
function resend_verification_link() {
	$.ajax({
		type: 'POST',
		dataType: 'JSON',
		url:'',
		beforeSend: function () {
			$('.loading-overlay').show();
			$('.msg').html('');
		},
		success: function (resp) {
			$('.loading-overlay').hide();
			if (resp.status == 1) {
				$('.msg').html('<div class="alert alert-success">Verification link has been sent successfully, please check your email</div>');
			} else if (resp.status == 3) {
				$('.msg').html('<div class="alert alert-danger">Your account is already verified, please contact to administration</div>');
			} else if (resp.status == 2) {
				$('.msg').html('<div class="alert alert-danger">Your account is blocked, please contact to administration</div>');
			} else {
				$('.msg').html('<div class="alert alert-danger">Something went wrong, Please try again</div>');
			}
		}

	})
}
</script>