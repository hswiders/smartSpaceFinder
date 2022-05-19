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
			<h2 class="mb-3 me-auto">Customers</h2>
			<!-- <div>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Customers</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Customers</a></li>
				</ol>
			</div> -->
		</div>	
		<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
			<div class="customer-search mb-sm-0 mb-3">
				<!-- <div class="input-group search-area">
					<input type="text" class="form-control" placeholder="Search here......">
					<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
				</div> -->
			</div>
			<!-- <div class="d-flex align-items-center flex-wrap">
				<a href="javascript:void(0);" class="btn btn-primary btn-rounded me-3 mb-2"><i class="fas fa-user-friends me-2"></i>+ Add New Customer</a>
				<a href="javascript:void(0);" class="btn bg-white btn-rounded me-2 mb-2 text-black shadow-sm"><i class="fas fa-calendar-times me-3 scale3 text-primary"></i>Filter<i class="fas fa-chevron-down ms-3 text-primary"></i></a>
				<a href="javascript:void(0);" class="btn btn-secondary btn-rounded mb-2"><i class="fas fa-sync"></i></a>
			</div> -->
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
								<th>Email</th>
								<th>Status</th>
								<th>Join Date</th>
								<th>Action</th>
							</tr>
						</thead>
							<tbody>
								@if(!blank($users))
									@php $sn = 0; @endphp
									@foreach($users as $row)
										@php $sn++; @endphp

										<tr>
											<td>{{$sn}}</td>
											<td>{{$row->name}}</td>
											<td>{{$row->email}}</td>
											<td>
												@if($row->status==0)
													<a class="dropdown-item text-success" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Active</a> 
												@else 
													<a class="dropdown-item text-danger " href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Blocked</a>
												@endif
											</td>
											<td>{{date('d-m-Y H:i a', strtotime($row->created_at))}}</td>
											<td>
												@if($row->status==0)
													<a href="{{url('admin/block-unblock')}}?id={{Crypt::encryptString($row->id)}}" onclick="return confirm('Are you soure want to do block?')" class="btn btn-danger shadow btn-xs">Block</a>
												@else 
													<a href="{{url('admin/block-unblock')}}?id={{Crypt::encryptString($row->id)}}" onclick="return confirm('Are you soure want to do active?')" class="btn btn-success shadow btn-xs">Active</a>

												@endif
											</td>
										</tr>
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