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
			<h2 class="mb-3 me-auto">Plans List</h2>
			<!-- <div>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Property</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Property</a></li>
				</ol>
			</div> -->
		</div>	
		<!-- <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
			<div class="customer-search mb-sm-0 mb-3">
				<div class="input-group search-area">
					<input type="text" class="form-control" placeholder="Search here......">
					<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
				</div>
			</div>
		</div> -->
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
								<th>Plan Name</th>
								<!-- <th>Email Notification</th>
								<th>SMS Notification</th> -->
								<th>Price</th>
								<th>Description</th>
								<th>Number Of Property</th>
								<th>Addons Name</th>
								<!-- <th>Created</th> -->
								<th>Action</th>
								
								<!-- <th></th> -->
							</tr>
						</thead>
						<tbody>
							@if(!blank($plans))
								@php $sn = 1; @endphp
								@foreach($plans as $row)

									<tr>
										<td class="tbl-bx">{{$sn}}</td>
										<td>{{$row->name}}</td>
										<!-- <td class="wspace-no">@if($row->email_notification==0)No @else Yes @endif</td>
										<td class="text-ov">@if($row->sms_notfication==0)No @else Yes @endif</td> -->

										<td>{{$row->price}}</td>
										<td class="text-ov">{{$row->description}}</td>
										<td class="text-ov">{{$row->number_of_property}}</td>
										<td class="text-ov">
											<?php 
												if(!empty($row->addonId)){
													$adArr = explode(',', $row->addonId);
													foreach ($adArr as $key => $addId) {
														$addon_name = \App\Models\Addons::select('name')->where('id', $addId)->take(1)->first();
														if(!empty($addon_name->name)){
															echo $addon_name->name.', ';
														}
													}
												}
											?>

											
										</td>
										<td>
                                            <a href="javascript:;" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="#updatePlanModal{{$row->id}}"><i class="fas fa-pencil-alt"></i></a>
                                        </td>
									</tr>


<div class="modal fade" id="updatePlanModal{{$row->id}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Plan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div id="msgdiv{{$row->id}}"></div>
            <form method="post" onsubmit="return updatePlans(event, '{{$row->id}}')" id="updatePlans{{$row->id}}" enctype="multipart/form-data">
            	@csrf
                <input type="hidden" name="id" value="{{$row->id}}">
                <div class="modal-body">
                    
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Name</label>
                                <input type="text"  name="name" placeholder="Plan name.." class="form-control" value="{{$row->name}}" required>
                            </div>
                             <div class="mb-3 col-md-12">
                                <label class="form-label">Price</label>
                                <input type="number" name="price" placeholder="Plan price.." class="form-control" value="{{$row->price}}">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Description</label>
                                <textarea type="text" name="description"  class="form-control" value="1" >{{$row->description}}</textarea> 
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Number Of Property</label>
                                <input type="number" name="number_of_property" placeholder="Number of Property.." class="form-control" value="{{$row->number_of_property}}">
                            </div>
                            <h4>Addons</h4>
                            @if(!blank($addons))
                            	@foreach($addons as $addon)
                            	<div class="mb-3 col-md-12">
                            		<label class="form-label">{{$addon->name}} </label>
		                        	<input type="checkbox" name="addon_id[]" class="form-check-input" <?= (in_array($addon->addon_id, explode(',', $row->addonId))) ? 'checked' : ''; ?> value="{{$addon->addon_id}}">
		                        </div>
                            	@endforeach
                            @endif
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
    	function updatePlans(event,  fid) {
		    event.preventDefault();
		    $('.alert-danger').remove();
		    var data = new FormData($('#updatePlans'+fid)[0]);


		    $.ajax({
		        url: '{{url("admin/update-plans")}}',
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
		        }
		    });
		    return false;
		  }
    </script>