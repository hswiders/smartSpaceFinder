<!--**********************************
    Header start
***********************************-->
@include('admin.includes.header')

<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
@include('admin.includes.sidebar')

<!--**********************************
    Sidebar end
***********************************-->

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
		
       
		
		<div class="row page-titles" id="msgdivcont" style="display:none">
			
        </div>
        <!-- row -->
       
        <div class="row">
            @if( Session::has('success')) 
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif

            @if( Session::has('error')) 
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif 

            @error('old_password')
                <div class="alert alert-danger" role="alert">
                {{ $message }}
                </div>
            @enderror
            @error('password')
                <div class="alert alert-danger" role="alert">
                {{ $message }}
                </div>
            @enderror
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <div class="tab-content">
                                    <div id="my-posts" class="tab-pane fade active show">
                                        <div class="settings-form">
                                                <h4 class="text-primary">Update  Profile</h4>
                                                <form method="post" onsubmit="return update_profile(event)" id="profileform">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-3 col-md-12" >
                                                            <label class="form-label">Name</label>
                                                            <input type="text" name="name" placeholder="Type name" value="{{Auth::guard('admin')->user()->name}}" class="form-control" required>
                                                        </div>
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" name="email" placeholder="Email" class="form-control" required value="{{Auth::guard('admin')->user()->email}}">
                                                        </div>
                                                    </div>
                                                    <button id="sub_btn" class="btn btn-primary" type="submit">Update</button>
                                                </form>
                                            </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <div class="tab-content">
                                    <div id="my-posts" class="tab-pane fade active show">
                                        <div class="settings-form">
                                            <h4 class="text-primary">Change Password</h4>
                                                <form method="post" onsubmit="return change_password(event)" id="changepass">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">Password</label>
                                                            <input type="password"  name="old_password" placeholder="Current Password" class="form-control"  required>
                                                        <p id="old_pass"></p>
                                                        </div>
                                                        <div id="result"></div>
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">New Password</label>
                                                            <input type="password" name="password" placeholder="New Password" class="form-control" required>
                                                        <p id="n_pass"></p>
                                                        </div>

                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">Confirm Password</label>
                                                            <input type="password" name="password_confirmation" placeholder="confirm Password" class="form-control" required>
                                                        <p id="c_pass"></p>

                                                        </div>
                                                    </div>
                                                    
                                                    <button class="btn btn-primary" type="submit" id="update">Update</button>
                                                </form>
                                            </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->


	  <!--**********************************
        Footer start
    ***********************************-->
        @include('admin.includes.footer')

    <!--**********************************
        Footer end
    ***********************************-->
<script type="text/javascript">
// admin/change-password
function change_password(event){
event.preventDefault();
    $('.alert-danger').remove();
    $.ajax({
      url: '{{url("admin/update-password")}}',
      type: 'POST',
      cache:false,
      contentType: false,
      processData: false,
      data:new FormData($('#changepass')[0]),
      dataType: 'json',
      beforeSend: function() {
        $('#update').prop('disabled' , true);
        $('#update').text('Processing..');
      },
      success : function(res){
        $('#update').prop('disabled' , false);
        $('#update').text('Update');
          window.location.reload();

        // if (res.status == 1) {
        // }
        // else
        // { 
        //   window.location.reload();

        //     // $('#msgdivcont').html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.old_password[0]+'</div>');




        //     //   $('#result').html(res.error);
        //     // for (var err in res.message) {
            
        //     //   $("[name='" + err + "']").after("<div  class='label alert-danger'>" + res.message[err] + "</div>");
        //     // }
        // }
      },
      error: function(err){
        var old_password = err.responseJSON.errors.old_password; 
        var password = err.responseJSON.errors.password; 
        var c_password = err.responseJSON.errors.password; 
        if(typeof  old_password!=="undefined" && old_password!==null){
            $('#old_pass').html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.old_password[0]+'</div>');

        }
        if(typeof  password!=="undefined" &&password!==null){
            $('#n_pass').html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.password[0]+'</div>');
        }
        if(typeof  c_password!=="undefined" &&c_password!==null){
            $('#c_pass').html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.password[1]+'</div>');
        }
        $('#update').prop('disabled' , false);
      }
    });
}

function update_profile(event) {
    event.preventDefault();
    $('.alert-danger').remove();
    $.ajax({
      url: '{{url("admin/update-profile")}}',
      type: 'POST',
      cache:false,
      contentType: false,
      processData: false,
      data:new FormData($('#profileform')[0]),
      dataType: 'json',
      beforeSend: function() {
        $('#sub_btn').prop('disabled' , true);
        $('#sub_btn').text('Processing..');
      },
      success : function(res){
        $('#sub_btn').prop('disabled' , false);
        $('#sub_btn').text('Update');
          window.location.reload();
      }
    });
}

</script>