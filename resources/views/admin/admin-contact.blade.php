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
			<h2 class="mb-3 me-auto">Admin Contact</h2>
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
								<th>Email</th>
								<th>Phone</th>
								<th>Address</th>
								<th>Info</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if(!blank($adminContactDetail))
								<tr>
									<td>{{$adminContactDetail->email}}</td>
									<td>{{$adminContactDetail->phone}}</td>
									<td>{{$adminContactDetail->address}}</td>
									<td>{{$adminContactDetail->info_details}}</td>
									
									<td>
                                        <a href="javascript:;" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="#updateContactTypeModal{{$adminContactDetail->id}}"><i class="fas fa-pencil-alt"></i></a>
                                    </td>
								</tr>
								



<div class="modal fade" id="updateContactTypeModal{{$adminContactDetail->id}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div id="msgdiv{{$adminContactDetail->id}}"></div>
            <form method="post" onsubmit="return updateContact(event, '{{$adminContactDetail->id}}')" id="updateContact{{$adminContactDetail->id}}" enctype="multipart/form-data">
            	@csrf
                <input type="hidden" name="id" value="{{$adminContactDetail->id}}">
                <div class="modal-body">
                    
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Email</label>
                                <input type="email"  name="email" placeholder="Enter email.." class="form-control" value="{{$adminContactDetail->email}}" required>
                             	<p id="email_err{{$adminContactDetail->id}}"></p>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Phone</label>
                                <input type="text"  name="phone" placeholder="Enter email.." class="form-control" value="{{$adminContactDetail->phone}}" required>
                             	<p id="phone_err{{$adminContactDetail->id}}"></p>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control" rows="5" required>{{$adminContactDetail->address}}</textarea>
                             	<p id="address_err{{$adminContactDetail->id}}"></p>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">More Information</label>
                                <textarea name="info_details" class="form-control" rows="5" required>{{$adminContactDetail->info_details}}</textarea>
                             	<p id="info_details_err{{$adminContactDetail->id}}"></p>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary" id="upbtn{{$adminContactDetail->id}}" type="submit">Update</button>
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
    	function updateContact(event,  fid) {
		    event.preventDefault();
		    $('.alert-danger').remove();
		    var data = new FormData($('#updateContact'+fid)[0]);
		    $.ajax({
		        url: '{{url("admin/update-admin-contact")}}',
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
			        var phone = err.responseJSON.errors.phone; 
			        if(typeof  phone!=="undefined" && phone!==null){
			            $('#phone_err'+fid).html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.phone[0]+'</div>');
			        }
			        // var cont_phone = err.responseJSON.errors.phone; 
			        // if(typeof  cont_phone!=="undefined" && cont_phone!==null){
			        //     $('#phone_err'+fid).html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.phone[1]+'</div>');
			        // }

			        var email = err.responseJSON.errors.email; 
			        if(typeof  email!=="undefined" && email!==null){
			            $('#email_err'+fid).html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.email[0]+'</div>');
			        }
			        var address = err.responseJSON.errors.address; 
			        if(typeof  address!=="undefined" && address!==null){
			            $('#address_err'+fid).html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.address[0]+'</div>');
			        }

			        var info_details = err.responseJSON.errors.info_details; 
			        if(typeof  info_details!=="undefined" && info_details!==null){
			            $('#info_details_err'+fid).html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.info_details[0]+'</div>');
			        }

			        
			        $('#upbtn'+fid).prop('disabled' , false);
			     }
		    });
		    return false;
		  }



		  function addContactType(event) {
		    event.preventDefault();
		    $('.alert-danger').remove();
		    var data = new FormData($('#addContactType')[0]);
		    $.ajax({
		        url: '{{url("admin/add-contact-type")}}',
		        data: data,
		        processData: false,
		        contentType: false,
		        type: 'POST',
		        dataType:'json',
		        beforeSend: function() {        
		            $('#upbtn').prop('disabled' , true);
		            $('#upbtn').text('Processing..');
		          },
		        success: function(result){
		            $('#upbtn').prop('disabled' , false);
		            $('#upbtn').text('Update');
		              window.location.reload();
		        },
		        error: function(err){
			        var contact_type = err.responseJSON.errors.contact_type; 
			        if(typeof  contact_type!=="undefined" && contact_type!==null){
			            $('#contact_type_field_err').html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.contact_type[0]+'</div>');
			        }
			        $('#upbtn').prop('disabled' , false);
			     }
		    });
		    return false;
		  }


		  function deleContactType(id) {
		    if(confirm('Are you soure want to delete?')){
			    $.ajax({
			        url: '{{url("admin/del-contact-type")}}',
			        data: { "_token": "{{ csrf_token() }}", "id": id},
			        type: 'POST',
			        dataType:'json',
			        beforeSend: function() {        
		            	$('#delBtn'+id).prop('disabled' , true);
		          	},
			        success: function(result){
			            $('#delBtn'+id).prop('disabled' , false);
			              window.location.reload();
			        },
			    });
		    }
		    return false;
		  }
    </script>