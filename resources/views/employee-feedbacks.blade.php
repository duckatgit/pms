<x-app-layout title="Employee feedbacks">
  <div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="container px-0">
				<!-- <h4 class=" text-blue h4">All Employees
					<div class="search-top">
						<i class="icon-copy fa fa-search" aria-hidden="true"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
					</div>
				</h4> -->
				<div class="data-combined">
					<h4 class="mb-30 text-blue h4">All Employees</h4>
					<div class="right-side-content">
						<div class="search-top">
							<i class="icon-copy fa fa-search" aria-hidden="true"></i>
							<input type="text" class="form-control search-input" placeholder="Search Employee">
						</div>
						<button class="btn-primary form-control" data-toggle="modal" data-target="#task-add" >Add Employee</button>
					</div>
				</div>

				<div class="add-new-employee">					
					<div class="modal fade customscroll" id="task-add" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Add Employee</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body pd-0">
									<div class="task-list-form">
										<ul>
											<li>
												<form>
													<div class="form-group row">
														<label class="col-md-4">Image</label>
														<div class="col-md-8">
															<input type="file" class="form-control">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-4">Name</label>
														<div class="col-md-8">
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-4">Designation</label>
														<div class="col-md-8">
															<textarea class="form-control"></textarea>
														</div>
													</div>
												</form>
											</li>
										</ul>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary">Add</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row employee-feedbacks-row">
					<div class="col-md-3">
						<div class="card-box pricing-card mb-30 employee-card">
							<div class="employee-image"> 
								<img src="img/photo3.jpg" alt="" class="">

							</div>
							<h1>John Doe</h1>
							<h5>Angular Developer</h5>
							
							<table class="table mb-0">
								<td class="border-0 pt-0">
									<a href="{{route('employee-feedbacks2')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
									<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

								</td>
							</table>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card-box pricing-card mb-30 employee-card">
							<div class="employee-image"> 
								<img src="img/photo3.jpg" alt="" class="">

							</div>
							<h1>John Doe</h1>
							<h5>Angular Developer</h5>
							<table class="table mb-0">
								<td class="border-0 pt-0">
									<a href="{{route('employee-feedbacks2')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
									<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

								</td>
							</table>

						</div>
					</div>
					<div class="col-md-3 ">
						<div class="card-box pricing-card mb-30 employee-card">
							<div class="employee-image"> 
								<img src="img/photo3.jpg" alt="" class="">

							</div>
							<h1>John Doe</h1>
							<h5>Angular Developer</h5>
							<table class="table mb-0">
								<td class="border-0 pt-0">
									<a href="{{route('employee-feedbacks2')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
									<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

								</td>
							</table>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card-box pricing-card mb-30 employee-card">
							<div class="employee-image"> 
								<img src="img/photo3.jpg" alt="" class="">

							</div>
							<h1>John Doe</h1>
							<h5>Angular Developer</h5>
							<table class="table mb-0">
								<td class="border-0 pt-0">
									<a href="{{route('employee-feedbacks2')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
									<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

								</td>
							</table>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card-box pricing-card mb-30 employee-card">
							<div class="employee-image"> 
								<img src="img/photo3.jpg" alt="" class="">

							</div>
							<h1>John Doe</h1>
							<h5>Angular Developer</h5>
							<table class="table mb-0">
								<td class="border-0 pt-0">
									<a href="{{route('employee-feedbacks2')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
									<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

								</td>
							</table>

						</div>
					</div>
					<div class="col-md-3 ">
						<div class="card-box pricing-card mb-30 employee-card">
							<div class="employee-image"> 
								<img src="img/photo3.jpg" alt="" class="">

							</div>
							<h1>John Doe</h1>
							<h5>Angular Developer</h5>
							<table class="table mb-0">
								<td class="border-0 pt-0">
									<a href="{{route('employee-feedbacks2')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
									<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

								</td>
							</table>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card-box pricing-card mb-30 employee-card">
							<div class="employee-image"> 
								<img src="img/photo3.jpg" alt="" class="">

							</div>
							<h1>John Doe</h1>
							<h5>Angular Developer</h5>
							<table class="table mb-0">
								<td class="border-0 pt-0">
									<a href="{{route('employee-feedbacks2')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
									<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

								</td>
							</table>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card-box pricing-card mb-30 employee-card">
							<div class="employee-image"> 
								<img src="img/photo3.jpg" alt="" class="">

							</div>
							<h1>John Doe</h1>
							<h5>Angular Developer</h5>
							<table class="table mb-0">
								<td class="border-0 pt-0">
									<a href="{{route('employee-feedbacks2')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
									<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

								</td>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="footer-wrap pd-20 mb-20 card-box">
				Duck Tale IT Services
			</div>-->
		</div>
	</div>
  </div>
</x-app-layout>
