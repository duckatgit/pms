<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class ProjectController extends Controller
{
    // Create Support Form
    public function createProjectForm(Request $request) {
        return view('add-project');
    }

    // Store Support Form data
    public function ProjectForm(Request $request) {
    	$current_userid = Auth::id();
    	//Auth::user()->name; 

        // Form validation
        $request->validate([
            'project_logo' => 'required',
            'project_name' => 'required',
            'project_technology' => 'required',
            'about_project' => 'required',
            'assigned_to' => 'required',
            'assigned_by' => 'required',
            'date' => 'required',
            'month' => 'required',
            'project_username' => 'required',
            'project_password' => 'required',
            'total_hours' => 'required'
        ]);

        $data = $request->input();

        $project_logo = $data['project_name'].'_project_logo.'.$request->project_logo->extension();
        $request->project_logo->move(public_path('img'), $project_logo);

        $project_name = $data['project_name'];
        $project_technology = $data['project_technology'];
        $about_project = $data['about_project'];
        $assigned_to = $data['assigned_to'];
        $assigned_by = $data['assigned_by'];
        $date = $data['date'];
        $month = $data['month'];
        $project_url = $data['project_url'];
        $project_username = $data['project_username'];
        $project_password = $data['project_password'];
        $all_credentials = $data['all_credentials'];
        $total_hours = $data['total_hours'];

        $tableName='projects';
        $getData = DB::table($tableName)->where('project_name',$project_name)->get();

        if(count($getData) == 0){
        	$insertProjectArray = ['user_id' => $current_userid, 'project_logo' => $project_logo, 'project_name' => $project_name, 'project_technology' => $project_technology, 'about_project' => $about_project, 'assigned_to' => $assigned_to, 'assigned_by' => $assigned_by, 'date' => $date, 'month' => $month, 'project_url' => $project_url, 'project_username' => $project_username, 'project_password' => $project_password, 'all_credentials' => $all_credentials, 'total_hours' => $total_hours];

	        DB::table($tableName)->insertGetId($insertProjectArray);

            Session::put('message_success','Form submit successfully');
        }else{
        	Session::put('message_success','Project name already exit.');
        }
        
        return redirect('/add-project');
    }



    // Create Support Form
    public function editProjectForm(Request $request) {
        return view('project-edit');
    }

    // Store Support Form data
    public function ProjectUpdateForm(Request $request) {

        // Form validation
        $request->validate([
            'project_name' => 'required',
            'project_technology' => 'required',
            'about_project' => 'required',
            'assigned_to' => 'required',
            'assigned_by' => 'required',
            'date' => 'required',
            'month' => 'required',
            'project_username' => 'required',
            'project_password' => 'required',
            'total_hours' => 'required'
        ]);

        $data = $request->input();
        $id = $data['id'];
        
        if($request->hasFile('project_logo')){
            $project_logo = $data['project_name'].'_project_logo.'.$request->project_logo->extension();
            $request->project_logo->move(public_path('img'), $project_logo);
        }

        $project_name = $data['project_name'];
        $project_technology = $data['project_technology'];
        $about_project = $data['about_project'];
        $assigned_to = $data['assigned_to'];
        $assigned_by = $data['assigned_by'];
        $date = $data['date'];
        $month = $data['month'];
        $project_url = $data['project_url'];
        $project_username = $data['project_username'];
        $project_password = $data['project_password'];
        $all_credentials = $data['all_credentials'];
        $total_hours = $data['total_hours'];

        $tableName='projects';
        $getData = DB::table($tableName)->where('id',$id)->get();

        if(count($getData) != 0){
        	if($request->hasFile('project_logo')){
        	    $updateProjectArray = ['project_logo' => $project_logo, 'project_name' => $project_name, 'project_technology' => $project_technology, 'about_project' => $about_project, 'assigned_to' => $assigned_to, 'assigned_by' => $assigned_by, 'date' => $date, 'month' => $month, 'project_url' => $project_url, 'project_username' => $project_username, 'project_password' => $project_password, 'all_credentials' => $all_credentials, 'total_hours' => $total_hours];
            }else{
            	$updateProjectArray = ['project_name' => $project_name, 'project_technology' => $project_technology, 'about_project' => $about_project, 'assigned_to' => $assigned_to, 'assigned_by' => $assigned_by, 'date' => $date, 'month' => $month, 'project_url' => $project_url, 'project_username' => $project_username, 'project_password' => $project_password, 'all_credentials' => $all_credentials, 'total_hours' => $total_hours];
            }

	        DB::table($tableName)->where('id', $id)->update($updateProjectArray);

            Session::put('message_success','Project updated successfully');
        }else{
        	Session::put('message_success','Project id not exit.');
        }
        
       return redirect('project-edit/'.$id);
    }



    // Create Support Form
    public function projectBillingForm(Request $request) {
        return view('project-detail');
    }

    // Store Support Form data
    public function AddProjectBilling(Request $request) {
    	$current_userid = Auth::id();

        $request->validate([
            'project_name' => 'required',
            'billing_date' => 'required',
            'billing_status' => 'required'
        ]);

        $data = $request->input();

        $id = $data['project_id'];
        $project_name = $data['project_name'];
        $billing_date = $data['billing_date'];
        $billing_status = $data['billing_status'];
        $billing_hours = 0;
        $billing_hours = $data['billing_hours'];

        $tableName='project_billing';
        $getData = DB::table($tableName)->where([['project_id', '=', $id],['billing_date', '=', $billing_date]])->get();

        if(count($getData) == 0){
        	$insertProjectArray = ['user_id' => $current_userid, 'project_id' => $id, 'project_name' => $project_name, 'billing_date' => $billing_date, 'billing_status' => $billing_status, 'billing_hours' => $billing_hours];

	        DB::table($tableName)->insertGetId($insertProjectArray);

            Session::put('message_success','Billing add successfully');
        }else{
        	// if(isset($data['billing_id'])){
	        // 	$billing_id = $data['billing_id'];

	        //     $updateProjectArray = ['billing_date' => $billing_date, 'billing_status' => $billing_status, 'billing_hours' => $billing_hours];

	        //     DB::table($tableName)->where('id', $billing_id)->update($updateProjectArray);

	        //     Session::put('message_success','Billing update successfully');

         //    }else{
                Session::put('message_success','This Billing is already exit.');
            //}
        }
        
       return redirect('project-detail/'.$id);
    }   
    
}
