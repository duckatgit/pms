<x-app-layout title="Assigned Task Details">
    <div class="main-container assigned-task-details">
		<div class="">
			<div class="assigned-task-add">
				<div class="assigned-task-add-left">
					<div class="fixed0header">
						<button>Add Task</button>
					</div>

					<div class="all-tasks">
						<ul>
							<li>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
									<label class="custom-control-label" for="customCheck">Loream ipsum is a dummy context</label>
								</div>
								
							</li>
							<li>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
									<label class="custom-control-label" for="customCheck1">Loream ipsum is a dummy context</label>
								</div>
								
							</li>
							<li>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck2" name="example1">
									<label class="custom-control-label" for="customCheck2">Loream ipsum is a dummy context</label>
								</div>
								
							</li>
							<li>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck3" name="example1">
									<label class="custom-control-label" for="customCheck3">Loream ipsum is a dummy context</label>
								</div>
								
							</li>
							<li>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck4" name="example1">
									<label class="custom-control-label" for="customCheck4">Loream ipsum is a dummy context</label>
								</div>
								
							</li>
						</ul>
					</div>
				</div>

				<div class="assigned-task-add-right">
					<div class="fixed0header">
						<button>Mark Complete</button>
					</div>
					<div class="assigned-task-add-right-top">
						<h1>Angular WOrk Ludmil Phase-1</h1>

						<div class="project-assign row">
							<div class="col-md-6">
								<div class="assignee-info d-flex">
									<div class="avatar">
										<img alt="" src="img/avatar-02.jpg">
									</div>
									<div class="assigned-info">
										<div class="task-head-title" style="color: #8e8e8e;font-size: 12px;">Assigned To</div>
										<div class="task-assignee" style="font-size: 12px;font-weight: 600;">John Doe</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="assignee-info d-flex">
									<div class="avatar">
										<img alt="" src="img/avatar-02.jpg">
									</div>
									<div class="assigned-info">
										<div class="task-head-title" style="color: #8e8e8e;font-size: 12px;">Due Date</div>
										<div class="task-assignee" style="font-size: 12px;font-weight: 600;color: #f62d51;">26-4-2021</div>
									</div>
								</div>
							</div>
						</div>

						<div class="description" style=" margin: 40px 10px 0;">
							<textarea class="form-control" placeholder="Description" style="height: 90px;"></textarea>
						</div>
						<div class="card scrolled-card" style="margin: 20px 15px;height: 260px;">
							<div class="body">
								<div class="timeline-item green">
									<span class="date">Just now</span>
									<h6>iNext - One Page Responsive Template</h6>
									<span>Project Lead: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
								</div>
								<div class="timeline-item warning">
									<span class="date">02 Jun 2018</span>
									<h6>Add Team Members</h6>
									<span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
									<div class="msg">
										<p>web by far While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="assigned-task-add-right-bottom">
						<div class="message-bar">
							<div class="message-inner">
								<a class="link attach-icon" href="#"><img src="img/attachment.png" alt=""></a>
								<div class="message-area">
									<div class="input-group mb-0">
										<textarea class="form-control" placeholder="Type Task Assign"></textarea>
										<span class="input-group-append ">
											<button class="btn btn-primary" type="button"><i class="fa fa-send"></i></button>
										</span>
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