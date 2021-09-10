<x-app-layout title="Project Edit">
<?php 
  $tableName='projects';

  $id = Request::segment(2);

  $getData = DB::table($tableName)->where('id', $id)->get();
  if(count($getData) >= 1){
    foreach ($getData as $data) {
       $project_logo = $data->project_logo;
       $project_name = $data->project_name;
       $project_technology = $data->project_technology;
       $about_project = $data->about_project;
       $assigned_to = $data->assigned_to;
       $assigned_by = $data->assigned_by;
       $date = $data->date;
       $month = $data->month;
       $created_at = $data->created_at;
       $project_url = $data->project_url;
       $project_username = $data->project_username;
       $project_password = $data->project_password;
       $all_credentials = $data->all_credentials;
       $progress_number = $data->progress_number;
       $total_hours = $data->total_hours;
    }
  }
?>
   <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10 project-edit">
			<div class="edit-single-project">
				<a href="{{route('project-detail')}}/{{ $id }}"><button class="btn-primary form-control">Back</button></a>
			</div>
			<div class="min-height-200px Add-project-page-padding">
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30 ">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Project</h4>
						</div>
					</div>
                    
                    @if(Session::has('message'))
				        <p class="alert {{ Session::get('alert-class', 'alert-info alert-danger') }}">{{ Session::get('message') }} {{Session::forget('message')}}</p>
				    @endif

				    @if(Session::has('message_success'))
				        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message_success') }} {{Session::forget('message_success')}}</p>
				    @endif
					<form action="{{route('project-edit')}}/{{ $id }}" method="post" enctype="multipart/form-data">
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
						<div class="form-group row Add-new-project-field">
							<input name="id" class="form-control" type="text" value="{{ $id }}" hidden="">
							<label class="col-form-label">Project Logo</label>
							<div class="">
								<input name="project_logo" class="form-control" type="file">
								<img src="{{asset('img')}}/{{ $project_logo }}" class="project-logo">
							</div>
						</div>

						<div class="form-group row Add-new-project-field">
							<label class="col-form-label">Project Name</label>
							<div class="">
								<input name="project_name" class="form-control {{ $errors->has('project_name') ? 'error' : '' }}" value="{{ $project_name }}" type="text" readonly="">
								@if ($errors->has('project_name'))
						        <div class="error">
						            {{ $errors->first('project_name') }}
						        </div>
						        @endif
							</div>
						</div>
						
						<div class="form-group row Add-new-project-field">
							<label class="col-form-label">Project Technology</label>
							<div class="">
								<select name="project_technology" class="form-control {{ $errors->has('project_technology') ? 'error' : '' }}">
						            <option value="">Select Technology</option>
						            <?php
						            if($project_technology == "Angular"){ ?>
						                <option value="Angular" selected>Angular</option>
							        <?php }else{ ?>
                                        <option value="Angular">Angular</option>
							        <?php } 
						            if($project_technology == "Node"){ ?>
						                <option value="Node" selected>Node</option>
							        <?php }else{ ?>
                                        <option value="Node">Node</option>
							        <?php } 
						            if($project_technology == "React"){ ?>
						                <option value="React" selected>React</option>
							        <?php }else{ ?>
                                        <option value="React">React</option>
							        <?php } 
						            if($project_technology == "Full Stack"){ ?>
						                <option value="Full Stack" selected>Full Stack</option>
							        <?php }else{ ?>
                                        <option value="Full Stack">Full Stack</option>
							        <?php } 
						            if($project_technology == "Java"){ ?>
						                <option value="Java" selected>Java</option>
							        <?php }else{ ?>
                                        <option value="Java">Java</option>
							        <?php } 
						            if($project_technology == "Python"){ ?>
						                <option value="Python" selected>Python</option>
							        <?php }else{ ?>
                                        <option value="Python">Python</option>
							        <?php }
						            if($project_technology == "Ruby"){ ?>
						                <option value="Ruby" selected>Ruby</option>
							        <?php }else{ ?>
                                        <option value="Ruby">Ruby</option>
							        <?php }
						            if($project_technology == "IOS"){ ?>
						                <option value="IOS" selected>IOS</option>
							        <?php }else{ ?>
                                        <option value="IOS">IOS</option>
							        <?php }
							        if($project_technology == "PHP"){ ?>
						                <option value="PHP" selected>PHP</option>
							        <?php }else{ ?>
                                        <option value="PHP">PHP</option>
							        <?php }
							        if($project_technology == "Wordpress"){ ?>
						                <option value="Wordpress" selected>Wordpress</option>
							        <?php }else{ ?>
                                        <option value="Wordpress">Wordpress</option>
							        <?php }
							        if($project_technology == "Shopify"){ ?>
						                <option value="Shopify" selected>Shopify</option>
							        <?php }else{ ?>
                                        <option value="Shopify">Shopify</option>
							        <?php }
							        if($project_technology == "Laravel"){ ?>
						                <option value="Laravel" selected>Laravel</option>
							        <?php }else{ ?>
                                        <option value="Laravel">Laravel</option>
							        <?php }
							        if($project_technology == "CodeIgniter"){ ?>
						                <option value="CodeIgniter" selected>CodeIgniter</option>
							        <?php }else{ ?>
                                        <option value="CodeIgniter">CodeIgniter</option>
							        <?php } ?>
						        </select>
						        @if ($errors->has('project_technology'))
						        <div class="error">
						            {{ $errors->first('project_technology') }}
						        </div>
						        @endif
							</div>
						</div>
                        <div class="form-group row Add-new-project-field">
					       <label class="col-form-label">About Project</label>
					       <div class="">
					        <input type="text" name="about_project" value="{{ $about_project }}" class="form-control {{ $errors->has('about_project') ? 'error' : '' }}" placeholder="">
					        @if ($errors->has('about_project'))
					        <div class="error">
					            {{ $errors->first('about_project') }}
					        </div>
					        @endif
					      </div>
					    </div>
						<div class="form-group row Add-new-project-field">
							<label class="col-form-label">Assigned To</label>
							<div class="">
								<input name="assigned_to" class="form-control {{ $errors->has('assigned_to') ? 'error' : '' }}" value="{{ $assigned_to }}" type="text">
								@if ($errors->has('assigned_to'))
						        <div class="error">
						            {{ $errors->first('assigned_to') }}
						        </div>
						        @endif
							</div>
						</div>
						<div class="form-group row Add-new-project-field">
							<label class="col-form-label">Assigned By</label>
							<div class="">
								<input name="assigned_by" class="form-control {{ $errors->has('assigned_by') ? 'error' : '' }}" value="{{ $assigned_by }}" type="text">
								@if ($errors->has('assigned_by'))
						        <div class="error">
						            {{ $errors->first('assigned_by') }}
						        </div>
						        @endif
							</div>
						</div>

						<div class="form-group row Add-new-project-field">
							<label class="col-form-label">Deadline Date</label>
							<div class="">
								<input name="date" class="form-control {{ $errors->has('date') ? 'error' : '' }}" value="{{ $date }}" placeholder="Select Date" type="date">
								@if ($errors->has('date'))
						        <div class="error">
						            {{ $errors->first('date') }}
						        </div>
						        @endif
							</div>
						</div>
						<div class="form-group row Add-new-project-field">
							<label class="col-form-label">Month</label>
							<div class="">
								<select name="month" class="form-control {{ $errors->has('month') ? 'error' : '' }}">
						            <option value="">Select Month</option>
						            <?php
						            if($month == '01'){ ?>
						                <option value="01" selected>January</option>
							        <?php }else{ ?>
                                        <option value="01">January</option>
							        <?php } 
						            if($month == '02'){ ?>
						                <option value="02" selected>February</option>
							        <?php }else{ ?>
                                        <option value="02">February</option>
							        <?php } 
						            if($month == '03'){ ?>
						                <option value="03" selected>March</option>
							        <?php }else{ ?>
                                        <option value="03">March</option>
							        <?php } 
						            if($month == '04'){ ?>
						                <option value="04" selected>April</option>
							        <?php }else{ ?>
                                        <option value="04">April</option>
							        <?php } 
						            if($month == '05'){ ?>
						                <option value="05" selected>May</option>
							        <?php }else{ ?>
                                        <option value="05">May</option>
							        <?php } 
						            if($month == '06'){ ?>
						                <option value="06" selected>June</option>
							        <?php }else{ ?>
                                        <option value="06">June</option>
							        <?php }
						            if($month == '07'){ ?>
						                <option value="07" selected>July</option>
							        <?php }else{ ?>
                                        <option value="07">July</option>
							        <?php }
						            if($month == '08'){ ?>
						                <option value="08" selected>August</option>
							        <?php }else{ ?>
                                        <option value="08">August</option>
							        <?php }
							        if($month == '09'){ ?>
						                <option value="09" selected>September</option>
							        <?php }else{ ?>
                                        <option value="09">September</option>
							        <?php }
							        if($month == '10'){ ?>
						                <option value="10" selected>October</option>
							        <?php }else{ ?>
                                        <option value="10">October</option>
							        <?php }
							        if($month == '11'){ ?>
						                <option value="11" selected>November</option>
							        <?php }else{ ?>
                                        <option value="11">November</option>
							        <?php }
							        if($month == '12'){ ?>
						                <option value="12" selected>December</option>
							        <?php }else{ ?>
                                        <option value="12">December</option>
							        <?php } ?>
						        </select>
						        @if ($errors->has('month'))
						        <div class="error">
						            {{ $errors->first('month') }}
						        </div>
						        @endif
							</div>
						</div>

						<div class="credentialsfor-newp">
							<h6>Credentials</h6>
							<div class="form-group row Add-new-project-field">
								<label class="col-form-label">URL</label>
								<div class="">
									<input name="project_url" class="form-control {{ $errors->has('project_url') ? 'error' : '' }}" Value="{{ $project_url }}" type="url">
									@if ($errors->has('project_url'))
							        <div class="error">
							            {{ $errors->first('project_url') }}
							        </div>
							        @endif
								</div>
							</div>
							<div class="form-group row Add-new-project-field">
								<label class="col-form-label">Username</label>
								<div class="">
									<input name="project_username" class="form-control {{ $errors->has('project_username') ? 'error' : '' }}" Value="{{ $project_username }}" type="text">
									@if ($errors->has('project_username'))
							        <div class="error">
							            {{ $errors->first('project_username') }}
							        </div>
							        @endif
								</div>
							</div>
							<div class="form-group row Add-new-project-field">
								<label class="col-form-label">Password</label>
								<div class="">
									<input name="project_password" class="form-control {{ $errors->has('project_password') ? 'error' : '' }}" Value="{{ $project_password }}" type="text">
									@if ($errors->has('project_password'))
							        <div class="error">
							            {{ $errors->first('project_password') }}
							        </div>
							        @endif
								</div>
							</div>
							<div class="form-group row Add-new-project-field">
						      <label class="col-form-label">All Credentials</label>
						      <div class="">
						        <textarea type="text" name="all_credentials" class="form-control" placeholder="">{{ $all_credentials }}</textarea>
						      </div>
						    </div>
						</div>

						<div class="credentialsfor-newp">
							<h6>Billing Hours</h6>
							<div class="form-group row Add-new-project-field">
								<label class="col-form-label">Total Hours</label>
								<div class="">
									<input name="total_hours" class="form-control {{ $errors->has('total_hours') ? 'error' : '' }}" Value="{{ $total_hours }}" type="text">
									@if ($errors->has('total_hours'))
							        <div class="error">
							            {{ $errors->first('total_hours') }}
							        </div>
							        @endif
								</div>
							</div>
						</div>
						<div class="cta add-project-submit" style="text-align: center">
							<input type="submit" value="Submit" class="btn btn-primary btn-rounded btn-lg"/>
						</div>
						
					</form>
					<div class="collapse collapse-box" id="basic-form1" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="copy-pre">
								<form>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Text</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" type="text" placeholder="Johnny Brown">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Search</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" placeholder="Search Here" type="search">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Email</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" value="bootstrap@example.com" type="email">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">URL</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" value="https://getbootstrap.com" type="url">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" value="1-(111)-111-1111" type="tel">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Password</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" value="password" type="password">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Number</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" value="100" type="number">
										</div>
									</div>
									<div class="form-group row">
										<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Date</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control date-picker" placeholder="Select Date" type="text">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Month</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control month-picker" placeholder="Select Month" type="text">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Time</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control time-picker" placeholder="Select time" type="text">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Select</label>
										<div class="col-sm-12 col-md-10">
											<select class="custom-select col-12">
												<option selected="">Choose...</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Color</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" value="#563d7c" type="color">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" value="50" type="range">
										</div>
									</div>
								</form>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms End -->
			</div>
			<!-- <div class="footer-wrap pd-20 mb-20 card-box">
				Ducktale It Services
			</div> -->
		</div>
	</div>
</x-app-layout>