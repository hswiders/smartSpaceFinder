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
    <!-- row -->
	<div class="container-fluid">
		<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
			<h2 class="mb-3 me-auto">Admin Social Detail</h2>
		</div>	
		<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
			<div class="customer-search mb-sm-0 mb-3">
				
			</div>
			<!-- <div class="d-flex align-items-center flex-wrap">
				<a href="javascript::void(0)" class="btn btn-primary btn-rounded me-3 mb-2"  data-bs-toggle="modal" data-bs-target="#addContactTypeModal"><i class="fas fa-user-friends me-2"></i>+ Add Contact Type</a>
				
			</div> -->
		</div>
		<div class="row">
			@if( Session::has('success')) 
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif
			<div class="col-xl-12">
				<div class="table-responsive">
					<table id="example3" class="display" style="min-width: 845px">
						<thead>
							<tr>
								<th>Facebook</th>
								<th>Instagram</th>
								<th>Youtube</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if(!blank($adminSocialLinks))
								<tr>
									<td>{{$adminSocialLinks->facebook}}</td>
									<td>{{$adminSocialLinks->youtube}}</td>
									<td>{{$adminSocialLinks->instagram}}</td>
									
									<td>
                                        <a href="javascript:;" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="#updateContactTypeModal{{$adminSocialLinks->id}}"><i class="fas fa-pencil-alt"></i></a>
                                    </td>
								</tr>
								



<div class="modal fade" id="updateContactTypeModal{{$adminSocialLinks->id}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Social</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div id="msgdiv{{$adminSocialLinks->id}}"></div>
            <form method="post" onsubmit="return updateSocial(event, '{{$adminSocialLinks->id}}')" id="updateSocial{{$adminSocialLinks->id}}" enctype="multipart/form-data">
            	@csrf
                <input type="hidden" name="id" value="{{$adminSocialLinks->id}}">
                <div class="modal-body">
                    
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Facebook</label>
                                <input type="url"  name="facebook" placeholder="Enter facebook url.." class="form-control" value="{{$adminSocialLinks->facebook}}" required>
                             	<p id="facebook_err{{$adminSocialLinks->id}}"></p>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Youtube</label>
                                <input type="url"  name="youtube" placeholder="Enter youtube url.." class="form-control" value="{{$adminSocialLinks->youtube}}" required>
                             	<p id="youtube_err{{$adminSocialLinks->id}}"></p>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Instagram</label>
                                <input type="url"  name="instagram" placeholder="Enter instagram url.." class="form-control" value="{{$adminSocialLinks->instagram}}" required>
                             	<p id="instagram_err{{$adminSocialLinks->id}}"></p>
                            </div>

                        </div>
                        
                        <button class="btn btn-primary" id="upbtn{{$adminSocialLinks->id}}" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
							@endif
							</pre>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
    </div>
</div>




<!-- Modal -->
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
    	function updateSocial(event,  fid) {
		    event.preventDefault();
		    $('.alert-danger').remove();
		    var data = new FormData($('#updateSocial'+fid)[0]);
		    $.ajax({
		        url: '{{url("admin/update-admin-social")}}',
		        data: data,
		        processData: false,
		        contentType: false,
		        type: 'POST',
		        dataType:'json',
		        beforeSend: function() {        
		            $('#upbtn'+fid).prop('disabled' , true);
		            $('#upbtn'+fid).text('Processing..');
		          },
		        success: function(result){
		            $('#upbtn'+fid).prop('disabled' , false);
		            $('#upbtn'+fid).text('Update');
		              window.location.reload();
		        },
		        error: function(err){
			        var facebook = err.responseJSON.errors.facebook; 
			        if(typeof  facebook!=="undefined" && facebook!==null){
			            $('#facebook_err'+fid).html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.facebook[0]+'</div>');
			        }
			        var youtube = err.responseJSON.errors.youtube; 
			        if(typeof  youtube!=="undefined" && youtube!==null){
			            $('#youtube_err'+fid).html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.youtube[0]+'</div>');
			        }
			        var instagram = err.responseJSON.errors.instagram; 
			        if(typeof  instagram!=="undefined" && instagram!==null){
			            $('#instagram_err'+fid).html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.instagram[0]+'</div>');
			        }

			        
			        $('#upbtn'+fid).prop('disabled' , false);
			     }
		    });
		    return false;
		  }



		  // function addContactType(event) {
		  //   event.preventDefault();
		  //   $('.alert-danger').remove();
		  //   var data = new FormData($('#addContactType')[0]);
		  //   $.ajax({
		  //       url: '{{url("admin/add-contact-type")}}',
		  //       data: data,
		  //       processData: false,
		  //       contentType: false,
		  //       type: 'POST',
		  //       dataType:'json',
		  //       beforeSend: function() {        
		  //           $('#upbtn').prop('disabled' , true);
		  //           $('#upbtn').text('Processing..');
		  //         },
		  //       success: function(result){
		  //           $('#upbtn').prop('disabled' , false);
		  //           $('#upbtn').text('Update');
		  //             window.location.reload();
		  //       },
		  //       error: function(err){
			 //        var contact_type = err.responseJSON.errors.contact_type; 
			 //        if(typeof  contact_type!=="undefined" && contact_type!==null){
			 //            $('#contact_type_field_err').html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.contact_type[0]+'</div>');
			 //        }
			 //        $('#upbtn').prop('disabled' , false);
			 //     }
		  //   });
		  //   return false;
		  // }


		  // function deleContactType(id) {
		  //   if(confirm('Are you soure want to delete?')){
			 //    $.ajax({
			 //        url: '{{url("admin/del-contact-type")}}',
			 //        data: { "_token": "{{ csrf_token() }}", "id": id},
			 //        type: 'POST',
			 //        dataType:'json',
			 //        beforeSend: function() {        
		  //           	$('#delBtn'+id).prop('disabled' , true);
		  //         	},
			 //        success: function(result){
			 //            $('#delBtn'+id).prop('disabled' , false);
			 //              window.location.reload();
			 //        },
			 //    });
		  //   }
		  //   return false;
		  // }
    </script>