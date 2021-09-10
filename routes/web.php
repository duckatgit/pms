<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('hr-dashboard', 'hr-dashboard')->name('hr-dashboard');
    Route::view('all-project/{id?}', 'all-project')->name('all-project');
    Route::view('add-project', 'add-project')->name('add-project');
    Route::view('project-detail/{id?}/{billing_id?}', 'project-detail')->name('project-detail');
    Route::view('project-edit/{id?}', 'project-edit')->name('project-edit');
    Route::view('project-management', 'project-management')->name('project-management');
    Route::view('late-reporting', 'late-reporting')->name('late-reporting');
    Route::view('late-reporting-details', 'late-reporting-details')->name('late-reporting-details');
    Route::view('employee-feedbacks', 'employee-feedbacks')->name('employee-feedbacks');
    Route::view('employee-feedbacks2', 'employee-feedbacks2')->name('employee-feedbacks2');
    Route::view('today-attendence', 'today-attendence')->name('today-attendence');
    Route::view('leaves-requests', 'leaves-requests')->name('leaves-requests');
    Route::view('today-leaves', 'today-leaves')->name('today-leaves');
    Route::view('invoices', 'invoices')->name('invoices');
    Route::view('invoice-print', 'invoice-print')->name('invoice-print');
    Route::view('create-invoice', 'create-invoice')->name('create-invoice');
    Route::view('taskboard', 'taskboard')->name('taskboard');
    Route::view('payroll', 'payroll')->name('payroll');
    Route::view('employee-personal-profile-inner', 'employee-personal-profile-inner')->name('employee-personal-profile-inner');
    Route::view('assigned-task-details', 'assigned-task-details')->name('assigned-task-details');

});


Route::any('/add-project', 'ProjectController@createProjectForm');
Route::post('/add-project', 'ProjectController@ProjectForm');

Route::get('/project-detail/{id}', 'ProjectController@projectBillingForm');
Route::post('/project-detail/{id}', 'ProjectController@AddProjectBilling');

Route::get('/project-edit/{id}', 'ProjectController@editProjectForm');
Route::post('/project-edit/{id}', 'ProjectController@ProjectUpdateForm');

Route::get('ajax',function() {
   return view('/project-detail/{id}');
});
Route::post('/getbillingdata','AjaxBillingController@getProjectBilling');

Route::post('/assignedtask','AssignTaskController@assignTask');

