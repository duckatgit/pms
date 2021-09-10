<x-app-layout title="Project Management">
   <div class="main-container">

	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">

			<div class="container px-0">
				<div class="data-combined">
					<h4 class="mb-30 text-blue h4">All Projects</h4>
					<div class="right-side-content">
						<div class="search-top">
							<i class="icon-copy fa fa-search" aria-hidden="true"></i>
							<input type="text" class="form-control search-input" placeholder="Search project">
						</div>
						<a href="{{route('add-project')}}"><button class="btn-primary form-control">Add New Project</button></a>
					</div>

				</div>

				<div class="row">

					<div class="All-projects-bg">
						<table class="data-table table hover multiple-select-row nowrap">
							<thead>
								<tr>
									<th>Logo</th>
									<th>Project Name</th>
									<th>Deadline</th>
									<th>Progress</th>
									<th>Lead</th>
									<th>Team</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="img/product-img1.jpg" class="td-logo-img"></td>
									<td class="table-plus">Loai</td>
									<td>5, July 2021</td>
									<td>
										<div class="progress progress-xs" style="width: 60%;">
											<div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;background-color: #5c8ed4"></div>                                                
										</div>
										<small>Completion with: 48%</small>
									</td>
									<td>
										<img src="img/avatar1.jpg" data-toggle="tooltip" data-placement="top" style=" width: 35px;height: 35px;border-radius: 3px;object-fit: cover;">
									</td>
									<td>
										<img src="img/chat-img1.jpg" class="td-logo-img">
										<img src="img/profile-photo.jpg" class="td-logo-img">
										<img src="img/photo3.jpg" class="td-logo-img">
									</td>
									<td class="progress-project">
										<span>Active</span>
									</td>
									<td>
										<a href="{{route('project-detail')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
										<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

									</td>
								</tr>

								<tr>
									<td><img src="img/product-img1.jpg" class="td-logo-img"></td>
									<td class="table-plus">Loai</td>
									<td>5, July 2021</td>
									<td>
										<div class="progress progress-xs" style="width: 60%;">
											<div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;background-color: #5c8ed4"></div>                                                
										</div>
										<small>Completion with: 48%</small>
									</td>
									<td>
										<img src="img/avatar1.jpg" data-toggle="tooltip" data-placement="top" style=" width: 35px;height: 35px;border-radius: 3px;object-fit: cover;">
									</td>
									<td>
										<img src="img/chat-img1.jpg" class="td-logo-img">
										<img src="img/profile-photo.jpg" class="td-logo-img">
										<img src="img/photo3.jpg" class="td-logo-img">
									</td>
									<td class="progress-project">
										<span>Active</span>
									</td>
									<td>
										<a href="{{route('project-detail')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
										<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

									</td>
								</tr>

								<tr>
									<td><img src="img/product-img1.jpg" class="td-logo-img"></td>
									<td class="table-plus">Loai</td>
									<td>5, July 2021</td>
									<td>
										<div class="progress progress-xs" style="width: 60%;">
											<div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;background-color: #f3ad06"></div>                                                
										</div>
										<small>Completion with: 48%</small>
									</td>
									<td>
										<img src="img/avatar1.jpg" data-toggle="tooltip" data-placement="top" style=" width: 35px;height: 35px;border-radius: 3px;object-fit: cover;">
									</td>
									<td>
										<img src="img/chat-img1.jpg" class="td-logo-img">
										<img src="img/profile-photo.jpg" class="td-logo-img">
										<img src="img/photo3.jpg" class="td-logo-img">
									</td>
									<td class="start-project">
										<span>Pending</span>
									</td>
									<td>
										<a href="{{route('project-detail')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
										<i class="icon-copy fa fa-trash" aria-hidden="true"></i>

									</td>
								</tr>
								<tr>
									<td><img src="img/upload-file-img.jpg" class="td-logo-img"></td>
									<td class="table-plus">Loai</td>
									<td>5, July 2021</td>
									<td>
										<div class="progress progress-xs" style="width: 60%;">
											<div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;background-color: #ff3024"></div>                                                
										</div>
										<small>Completion with: 48%</small>
									</td>
									<td>
										<img src="img/avatar1.jpg" data-toggle="tooltip" data-placement="top" style=" width: 35px;height: 35px;border-radius: 3px;object-fit: cover;">
									</td>
									<td>
										<img src="img/chat-img1.jpg" class="td-logo-img">
										<img src="img/profile-photo.jpg" class="td-logo-img">
										<img src="img/photo3.jpg" class="td-logo-img">
									</td>
									<td>
										<span class="casual">Closed</span>
									</td>
									<td>
										<a href="{{route('project-detail')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
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