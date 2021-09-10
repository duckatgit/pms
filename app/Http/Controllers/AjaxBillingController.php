<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class AjaxBillingController extends Controller
{
    public function getProjectBilling(Request $request) {

      $data = $request->all();
      $billing_id = $data['billing_id'];
      $tableName='project_billing';

      if(isset($data['billing_hours'])){

      	  $billing_date = $data['billing_date'];
          $billing_status = $data['billing_status'];
          $billing_hours = 0;
          $billing_hours = $data['billing_hours'];

          $updateProjectArray = ['billing_date' => $billing_date, 'billing_status' => $billing_status, 'billing_hours' => $billing_hours];

	      $sql = DB::table($tableName)->where('id', $billing_id)->update($updateProjectArray);

          if($sql){
          	  echo "Billing update successfully";
          }

      }else{

	      $getData = DB::table($tableName)->where('id',$billing_id)->get();
	      if(count($getData) != 0){
	      	foreach ($getData as $data) {
	      
	        $billingdata = '';
	        $billingdata .= '<input type="hidden" name="project_id" value="'.$data->project_id.'" class="form-control" readonly="">
		      <input type="hidden" name="billing_id" value="'.$data->id.'" class="form-control billing_id" readonly="">
		      <div class="modal-body">
		       <div class="task-list-form">
		        <div class="row">
		         <div class="col-md-6">
		          <div class="form-group">
		           <label class="col-form-label">Project Name</label>
		           <input class="form-control" value="'.$data->project_name.'" type="text" readonly="">
		          </div>
		         </div>
		         <div class="col-md-6">
		          <div class="form-group">
		           <label class="col-form-label">Date</label>
		           <input class="form-control billing_date" placeholder="Select Date" type="date" name="billing_date" value="'.$data->billing_date.'">
		          </div>
		         </div>
		       </div>
		       <div class="row">
		         <div class="col-md-6">
		          <div class="form-group">
		           <label class="col-form-label">Status</label>
		           <select class="form-control billing_status" name="billing_status">';
		              
		              if($data->billing_status == "Start"){ 
		                $billingdata .= '<option value="Start" selected>Start</option>';
		              }else{ 
		                $billingdata .= '<option value="Start">Start</option>';
		              }
		              if($data->billing_status == "Progress"){ 
		                $billingdata .= '<option value="Progress" selected>Progress</option>';
		              }else{ 
		                $billingdata .= '<option value="Progress">Progress</option>';
		              }
		              if($data->billing_status == "Complete"){
		                $billingdata .= '<option value="Complete" selected>Complete</option>';
		              }else{ 
		                $billingdata .= '<option value="Complete">Complete</option>';
		              } 
		            $billingdata .= '</select>
		          </div>
		         </div>
		         <div class="col-md-6">
		          <div class="form-group">
		           <label class="col-form-label">Billing Hours</label>
		           <input class="form-control billing_hours" value="'.$data->billing_hours.'" type="number" name="billing_hours" placeholder="00:00">
		           </div>
		         </div>
		        </div>
		       </div>
		      </div>';

	       }
	      }
	      return $billingdata;
      }

    }
}
