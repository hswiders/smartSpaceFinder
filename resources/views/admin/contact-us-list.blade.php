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
			<h2 class="mb-3 me-auto">Contact Us List</h2>
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
			<div class="col-xl-12">
				<div class="table-responsive">
					<table id="example3" class="display" style="min-width: 845px">
						<thead>
							<tr>
								<th>Sn.</th>
								<th>Name</th>
								<th>Contact Type</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Subject</th>
								<th>Message</th>
								<th>Created</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if(!blank($contactUs))
								@php $sn = 1; @endphp
								@foreach($contactUs as $row)

									<tr>
										<td class="tbl-bx">{{$sn}}</td>
										<td>{{$row->name}}</td>
										<td>
											@php 
												$contact_type = \App\Models\ContactType::select('contact_type')->take(1)->first();
											@endphp
											{{$contact_type->contact_type}}
										</td>
										<td>{{$row->email}}</td>
										<td>{{$row->phone}}</td>
										<td>{{$row->subject}}</td>
										<td class="text-ov">{{$row->message}}</td>
										<td class="text-ov">{{date('d-m-Y h:i a', strtotime($row->created_at))}}</td>
										<td>
                                            <a href="javascript:;" class="btn btn-primary shadow btn-xs" data-bs-toggle="modal" data-bs-target="#viewContactDetailModal{{$row->id}}">View</a>
                                        </td>
									</tr>

<div class="modal fade" id="viewContactDetailModal{{$row->id}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Contact Us Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div id="msgdiv{{$row->id}}"></div>
                <div class="modal-body">
                    
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Name: </label>
                                <span><strong>{{$row->name}}</strong></span>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Contact Type: </label>
                                <span><strong>
                                	@php 
										$contact_type = \App\Models\ContactType::select('contact_type')->take(1)->first();
									@endphp
									{{$contact_type->contact_type}}
								</strong></span>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Email: </label>
                                <span><strong>{{$row->email}}</strong></span>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Subject: </label>
                                <span><strong>{{$row->subject}}</strong></span>
                            </div>
                           <div class="mb-3 col-md-12">
                                <label class="form-label">Message: </label>
                                <p><strong>{{$row->message}}</strong></p>
                            </div>
                             
                        </div>
                        
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