<!--**********************************
    Header start
***********************************-->
@include('admin.includes.header')
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

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
			<h2 class="mb-3 me-auto">Addons List</h2>
			
		</div>	
		
		<div class="row">
			@if( Session::has('success')) 
                <div class="alert alert-success alert-dismissible">
                  <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> {{ Session::get('success') }}
                </div>
            
            @endif
			<div class="col-xl-12">
				<div class="table-responsive">
					<table id="example3" class="display" style="min-width: 845px">
						<thead>
							<tr>
								<th>Sn.</th>
								<th>Name</th>
								<!-- <th>Email Notification</th>
								<th>Number Of Email Notification</th>
								<th>SMS Notification</th>
								<th>Number Of SMS Notification</th>
								<th>Number Of Property</th> -->
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if(!blank($addons))
								@php $sn = 1; @endphp
								@foreach($addons as $row)
									<tr>
										<td class="tbl-bx">{{$sn}}</td>
										<td>{{$row->name}}</td>
										<!-- <td class="wspace-no">@if($row->email_notification==0)No @else Yes @endif</td>
										<td>{{$row->number_of_email_notification}}</td>
										<td class="text-ov">@if($row->sms_notfication==0)No @else Yes @endif</td>
										<td class="text-ov">{{$row->number_of_sms_notfication}}</td>
										<td class="text-ov">{{$row->number_of_property}}</td> -->
										<td>
                                            <a href="javascript:;" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="#updateAreaModal{{$row->id}}"><i class="fas fa-pencil-alt"></i></a>
                                             <!-- <a href="javascript:;" id="delbtn2" onclick="deleteRow(2)" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fa fa-trash"></i></a> -->
                                        </td>
									</tr>


<div class="modal fade" id="updateAreaModal{{$row->id}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Addons</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div id="msgdiv{{$row->id}}"></div>
            <form method="post" onsubmit="return updateAddons(event, '{{$row->id}}')" id="updateAddons{{$row->id}}" enctype="multipart/form-data">
            	@csrf
                <input type="hidden" name="id" value="{{$row->id}}">
                <div class="modal-body">
                    
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Name</label>
                                <input type="text"  name="name" placeholder="Addon name.." class="form-control" value="{{$row->name}}" required>
                                <p id="name_err{{$row->id}}"></p>
                            </div>
                            <!-- <div class="mb-3 col-md-12">
                                <label class="form-label">Email Notification</label>
                                <input type="checkbox" name="email_notification" id="email_notifi{{$row->id}}"  class="form-check-input" value="1" onclick="emailNotification('{{$row->id}}')" @if($row->email_notification==1) checked @endif>
                            </div>

                            <div class="mb-3 col-md-12" id="email_number{{$row->id}}" style="display: @if($row->email_notification==0) none @else block @endif">
                                <label class="form-label">Number Of Email Notification</label>
                                <input type="number" name="number_of_email_notification" placeholder="Number of email notification.." class="form-control" value="{{$row->number_of_email_notification}}" id="email_number_input{{$row->id}}">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">SMS Notification</label>
                                <input type="checkbox" name="sms_notfication" class="form-check-input" value="1" onclick="smsNotification('{{$row->id}}')" id="sms_notifi{{$row->id}}" @if($row->sms_notfication==1) checked @endif>
                            </div>
                            <div class="mb-3 col-md-12" id="sms_number{{$row->id}}" style="display: @if($row->sms_notfication==0) none @else block @endif">
                                <label class="form-label">Number Of SMS Notification</label>
                                <input type="number" name="number_of_sms_notfication" placeholder="Number of sms notification.." class="form-control" value="{{$row->number_of_sms_notfication}}" id="sms_number_input{{$row->id}}">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Number Of Property</label>
                                <input type="number" name="number_of_property" placeholder="Number of Property.." class="form-control" value="{{$row->number_of_property}}">
                            </div> -->
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
   //  	function emailNotification(rid){
   //  		if ($("#email_notifi"+rid).is(":checked")) {
   //  			$('#email_number'+rid).css('display', 'block');
   //  			$('#email_number_input'+rid).attr('required', 'required');

			// }else{
   //  			$('#email_number'+rid).css('display', 'none');
   //  			$('#email_number_input'+rid).removeAttr('required');
   //  			$('#email_number_input'+rid).val('');


			// }
   //  	}

   //  	function smsNotification(rid){
   //  		if ($("#sms_notifi"+rid).is(":checked")) {
   //  			$('#sms_number'+rid).css('display', 'block');
   //  			$('#sms_number_input'+rid).attr('required', 'required');
			// }else{
   //  			$('#sms_number'+rid).css('display', 'none');
   //  			$('#sms_number_input'+rid).removeAttr('required');
   //  			$('#sms_number_input'+rid).val('');
			// }
   //  	}

function updateAddons(event,  fid) {
    event.preventDefault();
    $('.alert-danger').remove();
    var data = new FormData($('#updateAddons'+fid)[0]);


    $.ajax({
        url: '{{url("admin/update-addons")}}',
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
              console.log(result);
              window.location.reload();

            // if(result.status == 1)
            // {
            //   window.location.reload();
            // }
            // else
            // {
            //   console.log(result.message);
            //   for (var err in result.message) {
            
            //   $("[name='" + err + "']").after("<div  class='label alert-danger'>" + result.message[err] + "</div>");
            //   }
            // }
        },
        error: function(err){
            var name = err.responseJSON.errors.name; 
            // console.log(name);
            if(typeof  name!=="undefined" && name!==null){
                $('#name_err'+fid).html('<div class="alert alert-danger" role="alert">'+err.responseJSON.errors.name[0]+'</div>');
            }
            $('#upbtn'+fid).prop('disabled' , false);
         }
    });
    return false;
  }




    </script>


