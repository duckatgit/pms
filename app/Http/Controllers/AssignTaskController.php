<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class AssignTaskController extends Controller
{
    public function assignTask(Request $request) {
    	$current_userid = Auth::id();
        $data = $request->all();

        $id = $data['project_id'];
        $assign_date = $data['assign_date'];
        $task_name = $data['task_name'];
        $task_assigned_to = $data['task_assigned_to'];
        $task_estimate_time = $data['task_estimate_time'];
        $task_description = $data['task_description'];

        $tableName='assign_task';
        $getData = DB::table($tableName)->where([['project_id', '=', $id],['date', '=', $assign_date],['task_name', '=', $task_name],['assigned_to', '=', $task_assigned_to]])->get();

        if(count($getData) == 0){
        	$insertProjectArray = ['user_id' => $current_userid, 'project_id' => $id, 'date' => $assign_date, 'task_name' => $task_name, 'assigned_to' => $task_assigned_to, 'estimate_time' => $task_estimate_time, 'task_description' => $task_description];

	        DB::table($tableName)->insertGetId($insertProjectArray);

            //Session::put('message_success','Task asssign successfully');
            echo "Task asssign successfully";
        }else{
            echo "This Task is already exit.";
            //Session::put('message_success','This Task is already exit.');
        }
        
       //return redirect('project-detail/'.$id);
    }
}
