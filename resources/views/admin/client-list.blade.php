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
			<h2 class="mb-3 me-auto">Clinet List</h2>
			<div>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Clinet</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Clinet</a></li>
				</ol>
			</div>
		</div>	
		<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
			<div class="customer-search mb-sm-0 mb-3">
				<div class="input-group search-area">
					<input type="text" class="form-control" placeholder="Search here......">
					<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
				</div>
			</div>
			<div class="d-flex align-items-center flex-wrap">
				<a href="javascript:void(0);" class="btn btn-primary btn-rounded me-3 mb-2"><i class="fas fa-user-friends me-2"></i>+ Add New Clinet</a>
				<a href="javascript:void(0);" class="btn bg-white btn-rounded me-2 mb-2 text-black shadow-sm"><i class="fas fa-calendar-times me-3 scale3 text-primary"></i>Filter<i class="fas fa-chevron-down ms-3 text-primary"></i></a>
				<a href="javascript:void(0);" class="btn btn-secondary btn-rounded mb-2"><i class="fas fa-sync"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="table-responsive">
					<table class="table display mb-4 dataTablesCard order-table shadow-hover  card-table text-black" id="example7">
						<thead>
							<tr>
								<th>
									<div class="form-check ms-2">
									  <input class="form-check-input" type="checkbox" value="" id="checkAll">
									  <label class="form-check-label" for="checkAll">
									  </label>
									</div>  
								</th>
								<th>Customer ID</th>
								<th>Join Date</th>
								<th>Customer Name</th>
								<th>Location</th>
								<th>Total Spent</th>
								<th>Last Order</th>
								
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="tbl-bx">
									<div class="form-check ms-2">
									  <input class="form-check-input" type="checkbox" value="" id="customCheckBox1">
									  <label class="form-check-label" for="customCheckBox1">
									  </label>
									</div>
								</td>
								<td>#0001234</td>
								<td class="wspace-no">26 March 2020, 12:42 AM</td>
								<td>Olivia Shine</td>
								<td class="text-ov">35 Station Road London</td>
								<td class="text-ov">$82.46</td>
							
							<td><span class="btn bgl-danger text-danger btn-rounded btn-sm">$8.13</span></td>
								<td>
									<div class="dropdown ml-auto">
										<div class="btn-link" data-bs-toggle="dropdown" >
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="tbl-bx">
									<div class="form-check ms-2">
									  <input class="form-check-input" type="checkbox" value="" id="customCheckBox2">
									  <label class="form-check-label" for="customCheckBox2">
									  </label>
									</div>
								</td>
								<td>#0001234</td>
								<td class="wspace-no">26 March 2020, 12:42 AM</td>
								<td>James WItcwicky</td>
								<td class="text-ov">Corner Street 5th London</td>
								<td class="text-ov">$82.46</td>
							
								<td><span class="btn bgl-success text-success btn-rounded btn-sm">$8.13</span></td>
								<td>
									<div class="dropdown ml-auto">
										<div class="btn-link" data-bs-toggle="dropdown" >
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="tbl-bx">
									<div class="form-check ms-2">
									  <input class="form-check-input" type="checkbox" value="" id="customCheckBox3">
									  <label class="form-check-label" for="customCheckBox3">
									  </label>
									</div>
								</td>
								<td>#0001234</td>
								<td class="wspace-no">26 March 2020, 12:42 AM</td>
								<td>Veronica</td>
								<td class="text-ov">21 King Street London</td>
								<td class="text-ov">$82.46</td>
							
								<td><span class="btn bgl-danger text-danger btn-rounded btn-sm">$14.89</span></td>
								<td>
									<div class="dropdown ml-auto">
										<div class="btn-link" data-bs-toggle="dropdown" >
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="tbl-bx">
									<div class="form-check ms-2">
									  <input class="form-check-input" type="checkbox" value="" id="customCheckBox4">
									  <label class="form-check-label" for="customCheckBox4">
									  </label>
									</div>
								</td>
								<td>#0001234</td>
								<td class="wspace-no">26 March 2020, 12:42 AM</td>
								<td>Emilia Johanson</td>
								<td class="text-ov">67 St. John’s Road London</td>
								<td class="text-ov">$82.46</td>
							
								<td><span class="btn bgl-success text-success btn-rounded btn-sm">$450.42</span></td>
								<td>
									<div class="dropdown ml-auto">
										<div class="btn-link" data-bs-toggle="dropdown" >
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="tbl-bx">
									<div class="form-check ms-2">
									  <input class="form-check-input" type="checkbox" value="" id="customCheckBox5">
									  <label class="form-check-label" for="customCheckBox5">
									  </label>
									</div>
								</td>
								<td>#0001234</td>
								<td class="wspace-no">26 March 2020, 12:42 AM</td>
								<td>Jessica Wong</td>
								<td class="text-ov">11 Church Road London</td>
								<td class="text-ov">$82.46</td>
							
								<td><span class="btn bgl-danger text-danger btn-rounded btn-sm">$82.46</span></td>
								<td>
									<div class="dropdown ml-auto">
										<div class="btn-link" data-bs-toggle="dropdown" >
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="tbl-bx">
									<div class="form-check ms-2">
									  <input class="form-check-input" type="checkbox" value="" id="customCheckBox6">
									  <label class="form-check-label" for="customCheckBox6">
									  </label>
									</div>
								</td>
								<td>#0001234</td>
								<td class="wspace-no">26 March 2020, 12:42 AM</td>
								<td>Roberto Carlo</td>
								<td class="text-ov">544 Manor Road London</td>
								<td class="text-ov">$82.46</td>
							
								<td><span class="btn bgl-danger text-danger btn-rounded btn-sm">$681.45</span></td>
								<td>
									<div class="dropdown ml-auto">
										<div class="btn-link" data-bs-toggle="dropdown" >
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="tbl-bx">
									<div class="form-check ms-2">
									  <input class="form-check-input" type="checkbox" value="" id="customCheckBox7">
									  <label class="form-check-label" for="customCheckBox7">
									  </label>
									</div>
								</td>
								<td>#0001234</td>
								<td class="wspace-no">26 March 2020, 12:42 AM</td>
								<td>David Horison</td>
								<td class="text-ov">981 St. John’s Road London</td>
								<td class="text-ov">$82.46</td>
							
								<td><span class="btn bgl-danger text-danger btn-rounded btn-sm">$82.46</span></td>
								<td>
									<div class="dropdown ml-auto">
										<div class="btn-link" data-bs-toggle="dropdown" >
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="tbl-bx">
									<div class="form-check ms-2">
									  <input class="form-check-input" type="checkbox" value="" id="customCheckBox8">
									  <label class="form-check-label" for="customCheckBox8">
									  </label>
									</div>
								</td>
								<td>#0001234</td>
								<td class="wspace-no">26 March 2020, 12:42 AM</td>
								<td>Franky Sihotang</td>
								<td class="text-ov">6 The Avenue London</td>
								<td class="text-ov">$82.46</td>
							
								<td><span class="btn bgl-danger text-danger btn-rounded btn-sm">$681.45</span></td>
								<td>
									<div class="dropdown ml-auto">
										<div class="btn-link" data-bs-toggle="dropdown" >
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</div>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
											<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
										</div>
									</div>
								</td>
							</tr>
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