<x-app-layout title="Today Leaves">
   <div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="container px-0">
				<div class="data-combined">
					<h4 class="mb-30 text-blue h4">Employess On Leave Today</h4>
					<div class="right-side-content">
						<div class="search-top">
							<i class="icon-copy fa fa-search" aria-hidden="true"></i>
							<input type="text" class="form-control search-input" placeholder="Search Employee">
						</div>
					</div>
				</div>
				<div class="row today-leaves-row">
					<div class="All-projects-bg">
						<table class="data-table table hover multiple-select-row nowrap">
							<thead>
								<tr>
									<th>Employee Name</th>
									<th>Leave Type</th>
									<th>From</th>
									<th>To</th>
									<th>Reason</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-plus">John Doe</td>
									<td><span class="paid">Paid</span></td>
									<td>12-7-2021</td>
									<td>13-7-2021</td>
									<td>Due to covid-19</td>
									<td>
										<a href="{{route('project-detail')}}"><i class="icon-copy fa fa-pencil" aria-hidden="true"></i></a>
										<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

									</td>
								</tr>
								<tr>
									<td class="table-plus">John Doe</td>
									<td><span class="casual">Casual</span></td>
									<td>12-7-2021</td>
									<td>13-7-2021</td>
									<td>Due to covid-19</td>
									<td>
										<a href="{{route('project-detail')}}"><i class="icon-copy fa fa-pencil" aria-hidden="true"></i></a>
										<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

									</td>
								</tr>
								<tr>
									<td class="table-plus">John Doe</td>
									<td><span class="vacation">vacation</span></td>
									<td>12-7-2021</td>
									<td>13-7-2021</td>
									<td>Due to covid-19</td>
									<td>
										<a href="{{route('project-detail')}}"><i class="icon-copy fa fa-pencil" aria-hidden="true"></i></a>
										<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

									</td>
								</tr>
								<tr>
									<td class="table-plus">John Doe</td>
									<td><span class="No-info">No Info</span></td>
									<td>12-7-2021</td>
									<td>13-7-2021</td>
									<td>Due to covid-19</td>
									<td>
										<a href="{{route('project-detail')}}"><i class="icon-copy fa fa-pencil" aria-hidden="true"></i></a>
										<i class="icon-copy fa fa-trash" aria-hidden="true"></i>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- <div class="footer-wrap pd-20 mb-20 card-box">
				Duck Tale IT Services
			</div> -->
		</div>
	</div>
</div>
</x-app-layout>