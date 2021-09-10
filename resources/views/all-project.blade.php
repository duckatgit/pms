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
					<div class="row project-manaement-row">
						<div class="All-projects-bg">
							<table class="data-table table hover multiple-select-row nowrap">
								<thead>
									<tr>
										<th>Logo</th>
										<th>Project Name</th>
										<th>Deadline</th>
										<th>Progress</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                <?php 
                                $current_userid = Auth::id();
                                $tableName='projects';
                                
                                if(Request::segment(2) != ''){
                                	$id = Request::segment(2);
                                	DB::table($tableName)->where('id',$id)->delete();
                                }

                                $getData = DB::table($tableName)->where('user_id',$current_userid)->get();
                                if(count($getData) >= 1){
                                  foreach ($getData as $data) {
                                ?>
									<tr>
										<td><img src="/img/{{ $data->project_logo }}" class="td-logo-img"></td>
										<td class="table-plus">{{ $data->project_name }}</td>
										<td>{{ $data->date }}</td>
										<td>
											<div class="progress progress-xs" style="width: 60%;">
												<div class="progress-bar" role="progressbar" aria-valuenow="{{ $data->progress_number }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $data->progress_number }}%;background-color: #5c8ed4"></div>
											</div>
											<small>Completion with: {{ $data->progress_number }}%</small>
										</td>
										<td class="progress-project {{ $data->status }}">
											<span>{{ $data->status }}</span>
										</td>
										<td>
											<a href="{{ route('project-detail') }}/{{ $data->id }}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
											
											<a href="all-project/{{ $data->id }}"><i class="icon-copy fa fa-trash" aria-hidden="true"></i></a>
										</td>
									</tr>
								<?php
								  }
							    }
								?>
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
