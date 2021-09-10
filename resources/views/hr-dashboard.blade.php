<x-app-layout title="HR Dashboard">
  <div class="main-container index-file">
    <div class="pd-ltr-20">
	  <div class="product-wrap index-activies">
		<div class="product-detail-wrap mb-30">
		  <div class="row">
		    <div class="col-lg-4 col-md-12 col-sm-12">
			  <div class="product-detail-desc pd-20 card-box height employe-availabilty">
				<div class="card-header mb-20 pl-0">
				  <h4 class="card-titl">Employees Availability</h4>
				</div>
				<div class="card-body p-0">
					<div class="row g-2 row-deck">
						<div class="col-md-6 col-sm-6 pr-0">
							<div class="card mb-20">
								<div class="card-body ">
									<i class="fas fa-edit"></i>
									<h6 class="mt-2 mb-0 fw-bold small-14">Attendance</h6>
									<span class="text-muted">400</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="card">
								<div class="card-body ">
									<i class="far fa-clock"></i>
									<h6 class="mt-2 mb-0 fw-bold small-14">Late Coming</h6>
									<span class="text-muted">17</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 pr-0">
							<div class="card mb-20">
								<div class="card-body ">
									<i class="fas fa-ban"></i>
									<h6 class="mt-2 mb-0 fw-bold small-14">Absent</h6>
									<span class="text-muted">06</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="card">
								<div class="card-body ">
									<i class="fas fa-umbrella-beach"></i>
									<h6 class="mt-2 mb-0 fw-bold small-14">Leave Apply</h6>
									<span class="text-muted">14</span> 
								</div>
							</div>
						</div>
					</div>
				</div>
			  </div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="product-detail-desc pd-20 card-box ">

					<div class="card-header pl-0 d-flex justify-content-between">
						<h4 class="card-titl">Total Employees</h4>
						<h4 class="card-titl">30</h4>
					</div>
					<div class="card-body text-center">
						<img src="img/pie-chart.png" class="pie-chart-img">
					</div>

				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="product-detail-desc pd-10 card-box height-100-p">
					<div class="col-md-6 col-lg-6 col-xl-12  flex-column">
						<div class="card bg-primary  mb-3" style="background-color: #A0D9B4  !important;">
							<div class="card-body row">
								<div class="col">
									<i class="fas fa-list"></i>
									<h1 class="mt-3 mb-0 fw-bold text-white">1546</h1>
									<span class="text-white">Applications</span>
								</div>
								<div class="col">
									<img class="img-fluid" src="img/interview.svg" alt="interview">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-12  flex-column">
						<div class="card mb-3">
							<div class="card-body">
								<div class="d-flex align-items-center flex-fill">
									<span class="avatar lg light-success-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-users-alt-2 fs-5"></i></span>
									<div class="d-flex flex-column ps-3  flex-fill">
										<h6 class="fw-bold mb-0 fs-4" style="font-size: 20px;">246</h6>
										<span class="text-muted" style="font-size: 14px;">Interviews</span>
									</div>
									<i class="icofont-chart-bar-graph fs-3 text-muted"></i>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center flex-fill">
									<span class="avatar lg light-success-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-holding-hands fs-5"></i></span>
									<div class="d-flex flex-column ps-3 flex-fill">
										<h6 class="fw-bold mb-0 fs-4" style="font-size: 20px;">101</h6>
										<span class="text-muted" style="font-size: 14px;">Hired</span>
									</div>
									<i class="icofont-chart-line fs-3 text-muted"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-12  flex-column upcomg-interviews">
					<h1>Upcoming Interviews</h1>
					<div class="leave-info-box upcomg-interviews-inn">

						<div class="media align-items-center">
							<a href="{{route('my-profile')}}" class="avatar"><img alt="" src="assets/img/user.jpg"></a>
							<div class="media-body">
								<div class="text-sm my-0">Martin Lewis</div>
								<div class="text-xsm my-0">Ui/UX Designer<span class="text-sm text-muted"><i class="far fa-clock"></i>9.00 - 1:30</span></div>
							</div>
						</div>

					</div>
					<div class="leave-info-box upcomg-interviews-inn">

						<div class="media align-items-center">
							<a href="{{route('my-profile')}}" class="avatar"><img alt="" src="assets/img/user.jpg"></a>
							<div class="media-body">
								<div class="text-sm my-0">Martin Lewis</div>
								<div class="text-xsm my-0">Ui/UX Designer<span class="text-sm text-muted"><i class="far fa-clock"></i>9.00 - 1:30</span></div>
							</div>
						</div>
						
					</div>
					<div class="leave-info-box upcomg-interviews-inn">

						<div class="media align-items-center">
							<a href="{{route('my-profile')}}" class="avatar"><img alt="" src="assets/img/user.jpg"></a>
							<div class="media-body">
								<div class="text-sm my-0">Martin Lewis</div>
								<div class="text-xsm my-0">Ui/UX Designer<span class="text-sm text-muted"><i class="far fa-clock"></i>9.00 - 1:30</span></div>
							</div>
						</div>
						
					</div>
					<div class="leave-info-box upcomg-interviews-inn">

						<div class="media align-items-center">
							<a href="{{route('my-profile')}}" class="avatar"><img alt="" src="assets/img/user.jpg"></a>
							<div class="media-body">
								<div class="text-sm my-0">Martin Lewis</div>
								<div class="text-xsm my-0">Ui/UX Designer<span class="text-sm text-muted"><i class="far fa-clock"></i>9.00 - 1:30</span></div>
							</div>
						</div>
						
					</div>
					<div class="leave-info-box upcomg-interviews-inn">

					<div class="media align-items-center">
						<a href="{{route('my-profile')}}" class="avatar"><img alt="" src="assets/img/user.jpg"></a>
						<div class="media-body">
							<div class="text-sm my-0">Martin Lewis</div>
							<div class="text-xsm my-0">Ui/UX Designer<span class="text-sm text-muted"><i class="far fa-clock"></i>9.00 - 1:30</span></div>
						</div>
				   </div>	
			  </div>
			</div>
		  </div>
	    </div>
	  </div>
	</div>
  </div>
</x-app-layout>

		