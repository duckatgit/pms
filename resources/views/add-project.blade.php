<x-app-layout title="Add New Project">
<div class="main-container">
 <div class="pd-ltr-20 xs-pd-20-10">
  <div class="min-height-200px Add-project-page-padding">
   <!-- Default Basic Forms Start -->
   <div class="pd-20 card-box mb-30 ">
    <div class="clearfix">
     <div class="pull-left">
       <h4 class="text-blue h4">Add New Project</h4>
     </div>
    </div>

    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info alert-danger') }}">{{ Session::get('message') }} {{Session::forget('message')}}</p>
    @endif

    @if(Session::has('message_success'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message_success') }} {{Session::forget('message_success')}}</p>
    @endif

    <form action="{{ route('add-project') }}" method="post" enctype="multipart/form-data">
     @csrf
     <div class="form-group row Add-new-project-field">
      <label class="col-form-label">Project Logo</label>
      <div class="">
       <input type="file" name="project_logo" class="form-control {{ $errors->has('project_logo') ? 'error' : '' }}" placeholder="">
       @if ($errors->has('project_logo'))
        <div class="error">
            {{ $errors->first('project_logo') }}
        </div>
       @endif
     </div>
     </div>
     <div class="form-group row Add-new-project-field">
       <label class="col-form-label">Project Name</label>
       <div class="">
        <input type="text" name="project_name" class="form-control {{ $errors->has('project_name') ? 'error' : '' }}" placeholder="">
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
            <option value="Angular">Angular</option>
            <option value="Node">Node</option>
            <option value="React">React</option>
            <option value="Full Stack">Full Stack</option>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
            <option value="Ruby">Ruby</option>
            <option value="IOS">IOS</option>
            <option value="PHP">PHP</option>
            <option value="Wordpress">Wordpress</option>
            <option value="Shopify">Shopify</option>
            <option value="Laravel">Laravel</option>
            <option value="CodeIgniter">CodeIgniter</option>
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
        <input type="text" name="about_project" class="form-control {{ $errors->has('about_project') ? 'error' : '' }}" placeholder="">
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
        <input type="text" name="assigned_to" class="form-control {{ $errors->has('assigned_to') ? 'error' : '' }}">
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
        <input type="text" name="assigned_by" class="form-control {{ $errors->has('assigned_by') ? 'error' : '' }}">
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
        <input type="date" name="date" class="form-control {{ $errors->has('date') ? 'error' : '' }}" placeholder="Select Date">
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
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
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
         <input type="url" name="project_url" class="form-control {{ $errors->has('project_url') ? 'error' : '' }}" placeholder="">
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
         <input type="text" name="project_username" class="form-control {{ $errors->has('project_username') ? 'error' : '' }}" placeholder="">
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
         <input type="text" name="project_password" class="form-control {{ $errors->has('project_password') ? 'error' : '' }}" placeholder="">
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
         <textarea type="text" name="all_credentials" class="form-control" placeholder=""></textarea>
       </div>
      </div>
      </div>
      <div class="credentialsfor-newp">
       <h6>Billing Hours</h6>
       <div class="form-group row Add-new-project-field">
        <label class="col-form-label">Total Hours</label>
        <div class="">
         <input type="text" name="total_hours" class="form-control {{ $errors->has('total_hours') ? 'error' : '' }}" placeholder="">
         @if ($errors->has('total_hours'))
          <div class="error">
              {{ $errors->first('total_hours') }}
          </div>
         @endif
       </div>
      </div>
      </div>

      <div class="cta add-project-submit" style="text-align: center">
       <!--<a href="#" class="btn btn-primary btn-rounded btn-lg">Submit</a>-->
       <input type="submit" value="Submit" class="btn btn-primary btn-rounded btn-lg"/>
      </div>
    </form>
   </div>
  </div>
 </div>
</div>
</x-app-layout>
