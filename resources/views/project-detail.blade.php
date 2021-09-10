<x-app-layout title="Project Details">

<?php 
  $tableName='projects';

  $id = Request::segment(2);

  $getData = DB::table($tableName)->where('id', $id)->get();
  if(count($getData) >= 1){
    foreach ($getData as $data) {
       $project_logo = $data->project_logo;
       $project_name = $data->project_name;
       $project_technology = $data->project_technology;
       $assigned_to = $data->assigned_to;
       $assigned_by = $data->assigned_by;
       $date = $data->date;
       $created_at = $data->created_at;
       $project_url = $data->project_url;
       $project_username = $data->project_username;
       $project_password = $data->project_password;
       $all_credentials = $data->all_credentials;
       $progress_number = $data->progress_number;
       $total_hours = $data->progress_number;
    }
  }
?>

<div class="main-container">
<div class="pd-ltr-20 xs-pd-20-10">
  <div class="min-height-200px">
   <div class="edit-single-project">
    <a href="{{route('all-project')}}"><button class="btn-primary form-control back">Back</button></a>
    <a href="{{route('project-edit')}}/{{ $id }}"><button class="btn-primary form-control">Edit</button></a>
  </div>
  <div class="product-wrap">
    <div class="product-detail-wrap mb-30">
     <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12">
       <div class="product-detail-desc pd-20 card-box ">
        <div class="project-detail-image">
         <img src="{{asset('img')}}/{{$project_logo}}" alt="" class="project-logo">
       </div>
       <div class="image-bottom-content">
        <div class="credentials-div">
          <h1 class="credentials">Credentials:</h1>
          <div class="data-project">
           <label>Username:</label>
           <h6>{{ $project_username }}</h6>
         </div>
         <div class="data-project">
           <label>Password:</label>
           <h6>{{ $project_password }}</h6>
         </div>
         <div class="data-project">
           <label>Other Credentials:</label>
           <h6>{{ $all_credentials }}</h6>
         </div>
       </div>
       <div class="credentials-div">
         <div class="data-project">
           <label>Progress:</label>
           <h6><span class="text-success float-right">{{ $progress_number }}%</span></h6>
         </div>
         <div class="data-project">
           <div class="progress progress-xs mb-0" style="height: 18px;">
            <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="" style="width: {{ $progress_number }}%" data-original-title="{{ $progress_number }}%"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="product-detail-desc pd-20 card-box mt-3">
    <h1 class="credentials" style="margin:0 0 20px 0;">Assigned Team:</h1>
    <div class="w_user">
      <img class="rounded-circle" src="{{asset('img')}}/avatar4.jpg" alt="">
      <div class="wid-u-info">
        <?php
           $user = Auth::user();
           echo $username = $user->name;
           echo $useremail = $user->email;
        ?>
        <h5 style="font-size: 14px;">Fidel Tonn</h5>
        <span style="font-size: 12px;">info@thememakker.com</span>
        <p class="text-muted m-b-0" style="font-size: 14px;">Project Lead</p>                                    
      </div>
      <hr>
    </div>
  </div>
</div>
<div class="col-lg-8 col-md-12 col-sm-12">
  <div class="product-detail-desc pd-20 card-box ">
    <div class="data-project">
     <label>Project Name:</label>
     <h6>{{ $project_name }}</h6>
   </div>
   <div class="data-project">
     <label>Project Language:</label>
     <h6>{{ $project_technology }}</h6>
   </div>
   <div class="data-project">
     <label>Assigned To:</label>
     <h6>{{ $assigned_to }}</h6>
   </div>
   <div class="data-project">
     <label>Assigned By:</label>
     <h6>{{ $assigned_by }}</h6>
   </div>
   <div class="data-project">
     <label>Date & Time:</label>
     <h6>{{ $created_at }}</h6>
   </div>
   <div class="data-project">
     <label>Total Project Billing:</label>
     <h6>{{ $total_hours }} Hours</h6>
   </div>
   <div class="data-project">
     <label>Url:</label>
     <h6><a href="">{{ $project_url }}</a></h6>
   </div>
   <div class="data-project">
     <label>Deadline:</label>
     <h6><a href="">{{ $date }}</a></h6>
   </div>
   <div class="data-project">
     <label>Project Leader:</label>
     <h6>
      <a href="">
        <img src="{{asset('img')}}/photo1.jpg" alt="" style="height: 30px;width: 30px;border-radius: 50%;border: 2px solid #d0d0d0;">
      </a>
    </h6>
  </div>
  <div class="data-project">
   <label>Team:</label>
   <h6>
    <a href="">
      <img src="{{asset('img')}}/photo1.jpg" alt="" style="height: 30px;width: 30px;border-radius: 50%;border: 2px solid #d0d0d0;">
      <img src="{{asset('img')}}/photo6.jpg" alt="" style="height: 30px;width: 30px;border-radius: 50%;border: 2px solid #d0d0d0;margin-left: -15px;">
      <img src="{{asset('img')}}/photo8.jpg" alt="" style="height: 30px;width: 30px;border-radius: 50%;border: 2px solid #d0d0d0;margin-left: -15px;">
      <img src="{{asset('img')}}/photo9.jpg" alt="" style="height: 30px;width: 30px;border-radius: 50%;border: 2px solid #d0d0d0;margin-left: -15px;">
      <img src="{{asset('img')}}/photo1.jpg" alt="" style="height: 30px;width: 30px;border-radius: 50%;border: 2px solid #d0d0d0;margin-left: -15px;">
    </a>
  </h6>
</div>
</div>



<div class="product-detail-desc pd-20 card-box mt-3 scrolled">
  <h1 class="credentials">Task Assign Timeline:</h1>
  <div class="card scrolled-card">
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
      <div class="timeline-item warning">
        <span class="date">02 Jun 2018</span>
        <h6>Task Assigned</h6>
        <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
        <div class="msg">
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>


        </div>
      </div>        
      <div class="timeline-item warning">
        <span class="date">02 Jun 2018</span>
        <h6>Add new code on GitHub</h6>
        <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Folisise Chosielie</a></span>

      </div>
      <div class="timeline-item danger">
        <span class="date">04 Jun 2018</span>
        <h6>Project Reports</h6>
        <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>

      </div>
      <div class="timeline-item dark">
        <span class="date">05 Jun 2018</span>
        <h6>Project on Goinng</h6>
      </div>
    </div>
  </div>

  <div class="message-bar">
    <div class="message-inner">
      <a class="link attach-icon" href="#"><img src="{{asset('img')}}/attachment.png" alt=""></a>
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

<div class="product-detail-desc pd-20 card-box mt-3 scrolled" style="height: auto !important;">
  <h1 class="credentials" style="display: flex;align-items: center;justify-content: space-between;">Task Assign Timeline:
    <i class="icon-copy fa fa-plus-circle" data-toggle="modal" data-target="#task-add" style="cursor: pointer;"></i>
  </h1>
  <div class="add-new-employee">          
    <div class="modal fade customscroll" id="task-add" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Assign Task</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form action="" method="post">
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <input type="hidden" name="project_id" value="{{ $id }}" class="form-control task_project_id" readonly="">
          <div class="modal-body pd-0">
            <div class="task-list-form">
              <ul>
                <li>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-md-12 text-left">Today Date</label>
                          <div class="col-md-12">
                            <input class="form-control assign_date" placeholder="Select Date" type="date" name="assign_date">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-md-12 text-left">Task Name</label>
                          <div class="col-md-12">
                            <input type="text" name="task_name" class="form-control task_name">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-md-12 text-left">Assigned To</label>
                          <div class="col-md-12">
                            <input type="text" name="task_assigned_to" class="form-control task_assigned_to">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-md-12 text-left">Estimate Time</label>
                          <div class="col-md-12">
                            <input type="number" name="task_estimate_time" class="form-control task_estimate_time">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-md-12 text-left">Task Description</label>
                          <div class="col-md-12">
                            <textarea name="task_description" class="form-control task_description"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" onclick="assignedTask()" class="btn btn-primary">Add</button>
            <!-- <input type="submit" name="submit_task" value="Add" class="btn btn-primary"> -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="scrolled-card">
    <table class="data-table table hover multiple-select-row nowrap">
      <thead>
        <tr>
          <th>Today Date</th>
          <th>Task Name</th>
          <th>Task Description</th>
          <th>Assign To</th>
          <th>Estimate Time</th>

        </tr>
      </thead>
      <tbody>
        <?php 
        $current_userid = Auth::id();
        $tableName='assign_task';

        $getData = DB::table($tableName)->where([['user_id', '=', $current_userid],['project_id', '=', $id]])->get();
        if(count($getData) >= 1){
          foreach ($getData as $data) {
            ?>
            <tr>
             <td>{{ $data->date }}</td>
             <td>{{ $data->task_name }}</td>
             <td style="width: 200px;word-break: break-word;">{{ $data->task_description }}</td>
             <td>{{ $data->assigned_to }}</td>
             <td>{{ $data->estimate_time }} Hours</td>
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
</div>
</div>
<div class="detailed-data-row">
 <div class="col-lg-12 col-md-12 col-sm-12 p-0 daily-biiling">
  <div class="product-detail-desc pd-20 card-box height-100-p">
   <div class="d-flex add-daily-billing-div">
    <h1 class="credentials">Daily Billing and Status:</h1>
    <button class="btn-primary form-control" data-toggle="modal" data-target="#billing-add">Add Daily Billing</button>
    <div class="modal fade customscroll" id="billing-add" tabindex="-1" role="dialog">
     <div class="modal-dialog modal-dialog-centered edit-feedback-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Billing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('project-detail') }}/{{ $id }}" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type="hidden" name="project_id" value="{{ $id }}" class="form-control" readonly="">
      <div class="modal-body">
        <div class="task-list-form">
         <div class="row">
          <div class="col-md-6">
           <div class="form-group">
            <label class="col-form-label">Project Name</label>
            <input type="text" name="project_name" value="{{ $project_name }}" class="form-control" readonly="">
            <!-- <select class="form-control" name="project_name">
              <?php 
              $tableName='projects';
              $getData = DB::table($tableName)->get();
              if(count($getData) >= 1){
                foreach ($getData as $data) { ?>
                    <option value="{{ $data->project_name }}">{{ $data->project_name }}</option>
              <?php  
                }
              }
              ?>
            </select> --> 
          </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
          <label class="col-form-label">Date</label>
          <input class="form-control" placeholder="Select Date" type="date" name="billing_date">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
       <div class="form-group">
        <label class="col-form-label">Status</label>
        <select class="form-control" name="billing_status">
            <option value="Start">Start</option>
            <option value="Progress">Progress</option>
            <option value="Complete">Complete</option>
        </select> 
      </div>
    </div>
    <div class="col-md-6">
     <div class="form-group">
      <label class="col-form-label">Billing Hours</label>
      <input class="form-control" value="" type="number" name="billing_hours" placeholder="00:00">
    </div>
  </div>
</div>
</div>
</div>
<div class="modal-footer">
  <!--<button type="button" class="btn btn-primary">Save</button>-->
  <input type="submit" value="Save" class="btn btn-primary btn-rounded btn-lg"/>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</form>
</div>
</div>
</div>
</div>
<table class="data-table table hover multiple-select-row nowrap">
  <thead>
   <tr>
    <th class="table-plus datatable-nosort">Date</th>
    <th>Status</th>
    <th>Billing Hours</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  <?php 
  $current_userid = Auth::id();
  $tableName='project_billing';

  if(Request::segment(3) != ''){
    $delete_id = Request::segment(3);
    DB::table($tableName)->where('id',$delete_id)->delete();
  }
  
  if(Request::segment(2) != ''){
    $id = Request::segment(2);
  }

  $getData = DB::table($tableName)->where([['project_id', '=', $id],['user_id', '=', $current_userid]])->get();
  if(count($getData) >= 1){
    foreach ($getData as $data) {
      $billing_id = $data->id; ?>
      <tr>
        <td class="table-plus">{{ $data->billing_date }}</td>
        <td class="{{ $data->billing_status }}-project"><span>{{ $data->billing_status }}</span></td>
        <td>{{ $data->billing_hours }} Hours</td>
        <td>
         <i class="icon-copy fa fa-pencil edit-billing" aria-hidden="true" data-toggle="modal" data-target="#billing-edit" data-id="{{$billing_id}}"></i>
         <a href="/project-detail/{{ $id }}/{{ $billing_id }}"><i class="icon-copy fa fa-trash" aria-hidden="true"></i></a>
         </td>
       </tr>
    <?php
    }
  } 
  ?>
</tbody>
</table>

<div class="modal fade customscroll" id="billing-edit" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered edit-feedback-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLongTitle">Edit Billing</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <form action="" method="post">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      <div class="edit-billing-ajax"></div>
      <div class="modal-footer">
        <button type="button" onclick="updateBilling()" id="update-billing" class="btn btn-primary btn-rounded btn-lg">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
     </form>
    </div>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>
<!-- <div class="footer-wrap pd-20 mb-20 card-box">
 DuckTale IT Services
</div> -->
</div>
</div>
</x-app-layout>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      
<script>
   $(document).ready(function() {

    $(".edit-billing").click(function(e){
      e.preventDefault();

      var _token = "<?php echo csrf_token() ?>";
      var billing_id = $(this).attr("data-id");

      $.ajax({
         type:'POST',
         url:'/getbillingdata',
         data:{_token:_token, billing_id:billing_id},
         success:function(data) {
            //alert(data);
            $(".edit-billing-ajax").empty();
            $(".edit-billing-ajax").append(data);
         }
      });
    });
  });
</script>

<script>
function updateBilling(){ 
  var _token = "<?php echo csrf_token() ?>";
  var billing_id = $('.billing_id').val();
  var billing_date = $('.billing_date').val();
  var billing_status = $('.billing_status').val();
  var billing_hours = $('.billing_hours').val();

  $.ajax({
     type:'POST',
     url:'/getbillingdata',
     data:{_token:_token, billing_id:billing_id, billing_date:billing_date, billing_status:billing_status, billing_hours:billing_hours},
     success:function(data) {
        //alert(data);
        location.reload(true)
     }
  });
}
</script>

<script>
function assignedTask(){ 
  var _token = "<?php echo csrf_token() ?>";
  var project_id = $('.task_project_id').val();
  var assign_date = $('.assign_date').val();
  var task_name = $('.task_name').val();
  var task_assigned_to = $('.task_assigned_to').val();
  var task_estimate_time = $('.task_estimate_time').val();
  var task_description = $('.task_description').val();

  $.ajax({
     type:'POST',
     url:'/assignedtask',
     data:{_token:_token, project_id:project_id, assign_date:assign_date, task_name:task_name, task_assigned_to:task_assigned_to, task_estimate_time:task_estimate_time, task_description:task_description},
     success:function(data) {
        //alert(data);
        location.reload(true)
     }
  });
}
</script>