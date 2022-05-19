@include('frontend.includes.header')

  <div class="breadcrumb-area bg-overlay-2" style="background-image:url('{{asset('')}}assets/frontend/images/breadcrumb-2.jpg')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title text-center">
                    <h2 class="page-title">Dashboard</h2>
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li> My account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<div class="py-5 body-bg">
    <div class="container-fluid">
        <div class="row gutters-sm py-5">
            <div class="col-md-3 d-none d-md-block">
            <div class="card">
                <div class="card-body">
                <nav class="nav flex-column nav-pills nav-gap-y-1">
                    <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Profile Information
                    </a>
                    
                    <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Security
                    </a>
                    <a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>Notification
                    </a>
                    <a href="#message" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  class="feather mr-2" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16"><path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/><path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/></svg>Message
                    </a>
                </nav>
                </div>
            </div>
            </div>
            <div class="col-md-9">
            <div class="card">
                <div class="card-header border-bottom mb-3 d-flex d-md-none">
                <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                    <li class="nav-item">
                    <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                    </li>
                    <li class="nav-item">
                    <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
                    </li>
                    <li class="nav-item">
                    <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></a>
                    </li>
                    <li class="nav-item">
                    <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
                    </li>
                    <li class="nav-item">
                        <a href="#message" data-toggle="tab" class="nav-link has-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  class="feather" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16"><path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/><path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/></svg>
                        </a>
                    </li>
                </ul>
                </div>
                <div class="card-body tab-content">
                <div class="tab-pane active" id="profile">
                    <h6>YOUR PROFILE INFORMATION</h6>
                    <hr>
                    
                    <div class="single-input-inner style-bg-border">
                        <label for="fullName">Profile Pic</label><br>
                        <!-- <p class="position-relative">
                            <img src="assets/images/testimonial-1.png" alt="">
                            
                        </p> -->

                        <form id="handleImageAjax" action="{{route('user.do-update-image')}}" method="post" enctype="multipart/form-data">
                            <label for="fileToUpload">
                                <div class="profile-pic" style="background-image: url('{{asset($user->image)}}')">
                                    <span><i class="fa-solid fa-camera"></i> Change Image</span>
                                </div>
                            </label>
                            <input type="File" name="image"  id="fileToUpload">
                            @csrf
                        </form>

                    </div>
                <form method="post" id="handleUpdateAjax" action="{{route('user.do-update-profile')}}" name="postform">
                    <div class="single-input-inner style-bg-border">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="first_nameHelp" placeholder="Enter your first name" value="{{$user->first_name}}">
                        <small id="first_nameHelp" class="form-text text-muted">Your first name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                    </div>
                    @csrf
                    <div class="single-input-inner style-bg-border">
                        <label for="first_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="last_nameHelp" placeholder="Enter your last name" value="{{$user->last_name}}">
                        <small id="last_nameHelp" class="form-text text-muted">Your last name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                    </div>
                    <div class="single-input-inner style-bg-border">
                        <label for="bio">Your Bio</label>
                        <textarea class="form-control autosize" id="bio" name="bio" placeholder="Write something about you" style="overflow: hidden; overflow-wrap: break-word; resize: none; ">{{ $user->bio }}</textarea>
                    </div>
                    <!-- <div class="single-input-inner style-bg-border">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="url" placeholder="Enter your website address" value="http://benije.ke/pozzivkij">
                    </div> -->
                    <div class="single-input-inner style-bg-border">
                        <label for="address">Location</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your location" value="{{ $user->address }}">
                    </div>
                    <div class="single-input-inner style-bg-border">
                        <label for="email">Email</label>
                        <input disabled type="email" class="form-control" id="email" placeholder="Enter your Email" value="{{ $user->email }}">
                    </div>
                    <div class="single-input-inner style-bg-border">
                         <label for="phone">Phone Number</label>
                         <div class="input-group">
                             <span class="input-group-text" >
                                    {{$user->phonecode}}
                                </span>
                                    <input disabled type="text" class="form-control " id="phone" name="phone" placeholder="Enter your Phone Number" value="{{ $user->phone }}">
                         
                         </div>
                        
                        
                        
                    </div>
                   
                    <div class="single-input-inner style-bg-border small text-muted">
                        All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
                    </div>
                    <button type="submit" class="btn btn-base">Update Profile</button>
                    
                </form>
                </div>
                
                <div class="tab-pane" id="security">
                    <h6>SECURITY SETTINGS</h6>
                    <hr>
                    <form class="signin-inner" method="post" id="handleChangePasswordAjax" action="{{route('user.do-change-password')}}" name="postform">
                        <div class="single-input-inner style-bg-border">
                            <label class="d-block">Change Password</label>
                            <input type="password" class="form-control" name="old_password" placeholder="Enter your old password">
                            @csrf
                            <input type="password" class="form-control mt-3" name="password" placeholder="New password">
                            <input type="password" class="form-control mt-3" name="confirm_password" placeholder="Confirm new password">
                            <button type="submit" class="btn btn-base mt-4">Change Password</button>
                        </div>
                    </form>
                    <hr>
                    
                    <!-- <hr>
                    <form>
                    <div class="single-input-inner style-bg-border mb-0">
                        <label class="d-block">Sessions</label>
                        <p class="font-size-sm text-secondary">This is a list of devices that have logged into your account. Revoke any sessions that you do not recognize.</p>
                        <ul class="list-group list-group-sm">
                        <li class="list-group-item has-icon">
                            <div>
                            <h6 class="mb-0">San Francisco City 190.24.335.55</h6>
                            <small class="text-muted">Your current session seen in United States</small>
                            </div>
                            <button class="btn btn-light btn-sm ml-auto" type="button">More info</button>
                        </li>
                        </ul>
                    </div>
                    </form> -->
                </div>
                <div class="tab-pane" id="notification">
                    <h6>NOTIFICATION SETTINGS</h6>
                    <hr>
                    <form>
                    <div class="single-input-inner style-bg-border">
                        <label class="d-block mb-0">Security Alerts</label>
                        <div class="small text-muted mb-3">Receive security alert notifications via email</div>
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                        <label class="custom-control-label" for="customCheck1">Email each time a vulnerability is found</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked="">
                        <label class="custom-control-label" for="customCheck2">Email a digest summary of vulnerability</label>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="tab-pane" id="message">
                    <h6>MESSAGE</h6>
                    <hr>
                    <div class="message">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="message-wrap">
                                    <div class="review-date d-flex justify-content-between align-items-center">

                                        <div class="dropdown">
                                            <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" class="">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                <li>
                                                    <a href="#">
                                                        <i class="ri-user-line"></i>
                                                        View Profile
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="ri-delete-bin-line"></i>
                                                        Removed
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="ri-heart-line"></i>
                                                        Favorite
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="ri-health-book-line"></i>
                                                        Bookmark
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="chat-user">
                                        <img src="assets/images/author-1.png" alt="Image">
                                        <h4>Deborah Roderick</h4>
                                    </div>

                                    <ul class="massage-list">
                                        <li class="left-chat">
                                            <span>10Dec, 2021 8:30PM</span>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <p>Sed porttitor lectus nibh. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit.</p>
                                        </li>
                                        <li class="right-chat">
                                            <span>10Dec, 2021 8:30PM</span>
                                            <img src="assets/images/author-1.png" alt="Image">
                                            <p>Sed porttitor lectus nibh. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit.</p>
                                        </li>
                                        <li class="right-chat">
                                            <p>Sed porttitor lectus nibh. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit.</p>
                                        </li>
                                        <li class="left-chat">
                                            <span>10Dec, 2021 8:30PM</span>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <p>Sed porttitor lectus nibh. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit.</p>
                                        </li>
                                    </ul>

                                    <form>
                                        <div class="single-input-inner style-bg-border d-flex align-items-center m-0">
                                            <input type="text" class="form-control rounded-0" placeholder="Write message">
                                            <button type="submit" class="btn btn-base">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="user-list">
                                    <ul>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Deborah Roderick</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Terry Weaver</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Shannon Ford</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Jesus Blair</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Mildred Garcia</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Reid Arterburn</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Nicholas McKnight</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Ted Stcyr</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Leslie Rodgers</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Evelyn Ruelas</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Wynona Jones</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Jarrett Due</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>William Patterson</h4>
                                        </li>
                                        <li>
                                            <img src="assets/images/author-2.png" alt="Image">
                                            <h4>Christine Bray</h4>
                                        </li>
                                    </ul>
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

    
    
@include('frontend.includes.footer')
 <script>
    $(function(){

     /*Profile Pic On change ==========================*/   
     $(document).on("change", '#fileToUpload', function(){
        $("#handleImageAjax").submit();
     });

     /*Profile Pic Submit ==========================*/
     $(document).on("submit","#handleImageAjax",function(){
            var e=this;
            var formm = new FormData($('#handleImageAjax')[0]);
            console.log(formm)
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                cache:false,
                contentType: false,
                processData: false,
                data:formm,
                dataType: 'json',
                success : function(data){
                if(data.status){
                    Swal.fire({
                      position: '',
                      icon: 'success',
                      title: data.msg,
                      showConfirmButton: false,
                      timer: 1500
                    }).then((result) => {
                      location.reload();
                    })
                    
                }
              }
            }).fail(function(response) {
             
              $(".alert").remove();
               var erroJson = JSON.parse(response.responseText);
               for (var err in erroJson) 
               {
            
                    $("[name='" + err + "']").after("<div  class='label alert-danger'>" + erroJson[err] + "</div>");
               }

            });
        return false;
      });

    });

     /*Edit Profile Update==========================*/
      $(document).on("submit","#handleUpdateAjax",function(){
            var e=this;
       
            $(this).find("[type='submit']").html("Processing..");
            $('.alert-danger').remove();
            $.post($(this).attr('action'),$(this).serialize(),function(data){
              
              $(e).find("[type='submit']").html("Update Profile");
              if(data.status){
               Swal.fire({
                      position: '',
                      icon: 'success',
                      title: data.msg,
                      showConfirmButton: false,
                      timer: 1500
                    }).then((result) => {
                      location.reload();
                    })
              }
              

            }).fail(function(response) {
             
              $(e).find("[type='submit']").html("Update Profile");
              $(".alert").remove();
              var erroJson = JSON.parse(response.responseText);
               for (var err in erroJson) {
            
            $("[name='" + err + "']").after("<div  class='label alert-danger'>" + erroJson[err] + "</div>");
          }

            });
        return false;
      });

      $(document).on("submit","#handleChangePasswordAjax",function(){
            var e=this;
       
            $(this).find("[type='submit']").html("Processing..");
            $('.alert-danger').remove();
            $.post($(this).attr('action'),$(this).serialize(),function(data){
              
              $(e).find("[type='submit']").html("Change Password");
              if(data.status){
                Swal.fire({
                      position: '',
                      icon: 'success',
                      title: data.msg,
                      showConfirmButton: false,
                      timer: 1500
                    }).then((result) => {
                      location.reload();
                    })
              }
              

            }).fail(function(response) {
             //$(this).reset()
              $(e).find("[type='submit']").html("Change Password");
              $(".alert").remove();
              var erroJson = JSON.parse(response.responseText);
               for (var err in erroJson) {
            
            $("[name='" + err + "']").after("<div  class='label alert-danger'>" + erroJson[err] + "</div>");
          }

            });
        return false;
      });

  
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcpNpTtV_czTWzF9IJzqDpAnmcMI3yUlY&libraries=places&callback=initMap" async defer></script>
<script type="text/javascript">
var selected = false;
function initMap() 
{
    //var input = document.getElementById('address');
    var input = document.getElementById('address');

    var autocomplete = new google.maps.places.Autocomplete(input);
   
   // autocomplete.setComponentRestrictions({'country': ['in']});     
    autocomplete.addListener('place_changed', function() 
    {
        var place = autocomplete.getPlace();
        console.log(place);
        selected = true;
          
      // document.getElementById('lattitude').value = place.geometry.location.lat();
      // document.getElementById('longitude').value = place.geometry.location.lng();
      
            if (place) 
      {
          var city = "";
          var state = "";
          var country = "";
          var zipcode = "";
          
         var address_components = place.address_components;
          
          for (var i = 0; i < address_components.length; i++) 
          {
             if (address_components[i].types[0] === "administrative_area_level_1" && address_components[i].types[1] === "political") {
                  state = address_components[i].long_name;    
              }
              if (address_components[i].types[0] === "locality" && address_components[i].types[1] === "political" ) {                                
                  city = address_components[i].long_name;   
              }
              
              if (address_components[i].types[0] === "postal_code" && zipcode == "") {
                  zipcode = address_components[i].long_name;

              }
              
              if (address_components[i].types[0] === "country") {
                  country = address_components[i].long_name;

              }
          }
        $('#city').val(city)
        $('#state').val(state)
        $('#country').val(country)
        $('#zip').val(zipcode)
     } 
     else 
     {
         window.alert('No results found');
     }
  });
   


}
$('#address').on('focus', function() {
  selected = false;
  }).on('blur', function() {
    if (!selected) {
      $(this).val('');
    }
  });
</script>