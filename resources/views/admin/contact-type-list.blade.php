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
			<h2 class="mb-3 me-auto">Contact Type List</h2>
		</div>	
		<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
			<div class="customer-search mb-sm-0 mb-3">
				
			</div>
			<div class="d-flex align-items-center flex-wrap">
				<a href="javascript::void(0)" class="btn btn-primary btn-rounded me-3 mb-2"  data-bs-toggle="modal" data-bs-target="#addContactTypeModal"><i class="fas fa-user-friends me-2"></i>+ Add Contact Type</a>
				
			</div>
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
								<th>Sn.</th>
								<th>Contact Type</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if(!blank($contactType))
								@php $sn = 1; @endphp
								@foreach($contactType as $row)

									<tr>
										<td class="tbl-bx">{{$sn}}</td>
										<td>{{$row->contact_type}}</td>
										
										<td>
                                            <a href="javascript:;" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="#updateContactTypeModal{{$row->id}}"><i class="fas fa-pencil-alt"></i></a>
                                             <a href="javascript:void(0)" onclick="deleContactType({{$row->id}})" id="delBtn{{$row->id}}" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fa fa-trash"></i></a>

                                        </td>
									</tr>


<div class="modal fade" id="updateContactTypeModal{{$row->id}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Contact Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div id="msgdiv{{$row->id}}"></div>
            <form method="post" onsubmit="return updateContactType(event, '{{$row->id}}')" id="updateContactType{{$row->id}}" enctype="multipart/form-data">
            	@csrf
                <input type="hidden" name="id" value="{{$row->id}}">
                <div class="modal-body">
                    
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Name</label>
                                <input type="text"  name="contact_type" placeholder="Contact type name.." class="form-control" value="{{$row->contact_type}}" required>
                            </div>
                             <p id="contact_type_field_err{{$row->id}}"></p>
                        </div>
                        
                        <button class="btn btn-primary" id="upbtn{{$row->id}}" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
									@php $sn++; @endphp
								@endforeach
							@endif
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
    </div>
</div>



<div class="modal fade" id="addContactTypeModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Contact Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div id="msgdiv{{$row->id}}"></div>
            <form method="post" onsubmit="return addContactType(event)" id="addContactType" enctype="multipart/form-data">
            	@csrf
                <div class="modal-body">
                    
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Name</label>
                                <input type="text"  name="contact_type" placeholder="Contact type name.." class="form-control" value="" required>
                            </div>
                             <p id="contact_type_field_err"></p>
                        </div>
                        
                        <button class="btn btn-primary" id="upbtn" type="submit">Add</button>
                </div>
            </form>
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
    	function updateContactType(event,  fid) {
		    event.preventDefault();
		    $('.alert-danger').remove();
		    var data = new FormData($('#updateContactType'+fid)[0]);
		    $.ajax({
		        url: '{{url("admin/update-contact-type")}}',
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
			        var contact_type = err.responseJSON.errors.contact_type; 
			        if(typeof  contact_type!=="undefined" && contact_type!==null){
			            $('#contact_type_field_err'+fid).html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.contact_type[0]+'</div>');
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