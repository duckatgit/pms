<x-app-layout title="My Profile">
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
	  <div class="min-height-200px">
	   <div class="data-combined">

	    <div class="right-side-content">
	     <div class="edit-single-project">
	      <a href="{{route('add-project')}}"><button class="btn-primary form-control" data-toggle="modal" data-target="#task-add" style="width: 115px;">Add Project</button></a>
	      <a href="{{route('my-profile')}}"><button class="btn-primary form-control back">Back</button></a>
	    </div>
	  </div>
	</div>
	<div class="row employee-personal-profile-inner-row">
	  <div class="col-xl-8 col-lg-12 col-md-12">
	    <div class="card teacher-card  mb-3">
	      <div class="card-body  d-flex teacher-fulldeatil">
	        <div class="profile-teacher col-md-3">
	          <a href="{{route('my-profile')}}">
	            <img src="img/avatar3.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm" style="width: 120px;min-width: 120px;height: 120px;">
	          </a>
	          <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
	            <h6 class="mb-0 fw-bold d-block fs-6" style="font-size: 12px;">Web Developer</h6>
	            <span class="text-muted small" style="font-size: 12px;">Employee Id : 00001</span>
	          </div>
	        </div>
	        <div class="teacher-info border-start col-md-9">
	          <h6 class="mb-0 mt-2  fw-bold d-block fs-6">Luke Short</h6>
	          <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted"  style="font-size: 12px;">Web Designer</span>
	          <p class="mt-2 small" style="font-size: 12px;">The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy</p>
	          <div class="row g-2 pt-2">
	            <div class="col-xl-5">
	              <div class="d-flex align-items-center">
	               <i class="icon-copy fa fa-mobile" style="font-size: 18px;margin-right: 9px;"></i>
	               <span class="ms-2 small" style="font-size: 11px;">202-555-0174 </span>
	             </div>
	           </div>
	           <div class="col-xl-5">
	            <div class="d-flex align-items-center">
	              <i class="icon-copy fa fa-envelope" style="font-size: 12px;margin-right: 9px;"></i>
	              <span class="ms-2 small" style="font-size: 11px;">LukeShortn@gmail.com</span>
	            </div>
	          </div>
	          <div class="col-xl-5">
	            <div class="d-flex align-items-center">
	              <i class="icon-copy fa fa-birthday-cake" style="font-size: 11px;margin-right: 6px;"></i>
	              <span class="ms-2 small" style="font-size: 11px;">19/03/1980</span>
	            </div>
	          </div>
	          <div class="col-xl-7">
	            <div class="d-flex align-items-center">
	              <i class="icon-copy fa fa-address-book" style="font-size: 12px;margin-right: 9px;"></i>
	              <span class="ms-2 small" style="font-size: 11px;">2734  West Fork Street,EASTON 02334.</span>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="col-xl-4 col-lg-12 col-md-12">

	  <div class="card teacher-card  mb-3">
	    <div class="card-body teacher-fulldeatil">
	      <h6 class="mb-0 fw-bold " style="float: left;width:100%;">My Today Tasks</h6>
	      <ol class="dd-list"  style="float: left;width:100%;">
	        <li class="dd-item" data-id="1">
	          <div class="dd-handle" style="padding: 10px;">
	            <h6 style="font-size: 12px;">Dashbaord</h6>
	            <p style="font-size: 10px;margin-bottom: 0;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

	          </div>
	        </li>

	      </ol>
	    </div>
	  </div>
	</div>
	</div>

	<div class="custom-class-tabs" style="float: left;width: 100%;margin: 20px 0 20px;">
	  <h4 class="mb-30 text-blue h4">My projects</h4>

	  <ul class="nav nav-tabs tab-body-header rounded ms-3 prtab-set w-sm-100" role="tablist" style="float: right;border: 1px solid #d0d0d0;">
	    <li class="nav-item" style="border-right: 1px solid #d0d0d0;">
	      <a class="nav-link active" data-bs-toggle="tab" href="#All-list" role="tab" style="padding: 6px 11px;font-size: 10px;">All</a>
	    </li>
	    <li class="nav-item" style="border-right: 1px solid #d0d0d0;">
	      <a class="nav-link" data-bs-toggle="tab" href="#Started-list" role="tab" style="padding: 6px 11px;font-size: 10px;">Started</a>
	    </li>
	    <li class="nav-item" style="border-right: 1px solid #d0d0d0;">
	      <a class="nav-link" data-bs-toggle="tab" href="#Approval-list" role="tab" style="padding: 6px 11px;font-size: 10px;">Approval</a>
	    </li>
	    <li class="nav-item" style="border-right: 1px solid #d0d0d0;">
	      <a class="nav-link" data-bs-toggle="tab" href="#Completed-list" role="tab" style="padding: 6px 11px;font-size: 10px;">Completed</a>
	    </li>
	  </ul>
	</div>
	<div class="product-wrap">
	  <div class="product-detail-wrap mb-30">
	   <div class="row employee-personal-profile-inner-row">
	    <!----col-md-4----->
	    <div class="col-md-4 ">
	     <div class="card-box pricing-card mb-30 employee-card">
	      <div class="side-toggle" style="position: absolute;right: 20px;top: 7px;">
	       <div class="dropdown">
	        <a class="btn" href="#" role="button" data-toggle="dropdown">
	          <i class="icon-copy fa fa-ellipsis-v" aria-hidden="true"></i>
	        </a>
	        <div class="dropdown-menu dropdown-menu-right">
	          <a class="dropdown-item" href="{{route('taskboard')}}" style="font-size: 12px;font-weight: 400;padding: 7px 19px 8px;"><i class="icon-copy fa fa-eye" aria-hidden="true" style="margin-right: 10px;"></i>View</a>
	          <a class="dropdown-item" href="#" style="font-size: 12px;font-weight: 400;padding: 7px 19px 8px;"><i class="icon-copy fa fa-trash" aria-hidden="true" style="margin-right: 10px;"></i>Delete</a>
	        </div>
	      </div>
	    </div>
	    <div class="project-block light-info-bg" style="width: 60px;height: 60px;background: #484c7f;border-radius: 5px;margin: -50px auto 0;display: flex;align-items: center; justify-content: center;">
	     <img src="img/betexch.in.png" style="max-width: 80%;">
	   </div>
	   <h1>Bett99</h1>
	   <h5>Angular</h5>
	   <div class="row">
	     <div class="col-6 pr-0">
	      <div class="d-flex align-items-center">
	       <i class="icon-copy fa fa-users" style="font-size: 12px !important;margin-right: 5px;"></i>
	       <span class="ms-2" style="font-size: 12px;">5 Members</span>
	     </div>
	   </div>
	   <div class="col-6 pr-0">
	    <div class="d-flex align-items-center">
	     <i class="icon-copy fa fa-hourglass-2" style="font-size: 12px !important;margin-right: 5px;"></i>
	     <span class="ms-2" style="font-size: 12px;">4 Month</span>
	   </div>
	 </div>
	</div>
	<div class="project-progress-div" style="border-top: 1px solid #e0e0e0;margin: 20px 0 0px 0;padding: 18px 0 10px 0;text-align: left !important;">
	  <h1 style="align-items: center;justify-content: space-between !important;margin: 0 0 10px 0;">Progress:<span class="pending-work">Pending</span></h1>
	  <div class="progress progress-xs" style="width: 100%;height: 8px;">
	    <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;background-color: #f3ad06">
	    </div>
	  </div>
	</div>
	</div>
	</div>
	<!----col-md-4----->
	<div class="col-md-4 ">
	 <div class="card-box pricing-card mb-30 employee-card">
	  <div class="side-toggle" style="position: absolute;right: 20px;top: 7px;">
	   <div class="dropdown">
	    <a class="btn" href="#" role="button" data-toggle="dropdown">
	      <i class="icon-copy fa fa-ellipsis-v" aria-hidden="true"></i>
	    </a>
	    <div class="dropdown-menu dropdown-menu-right">
	     <a class="dropdown-item" href="{{route('taskboard')}}" style="font-size: 12px;font-weight: 400;padding: 7px 19px 8px;"><i class="icon-copy fa fa-eye" aria-hidden="true" style="margin-right: 10px;"></i>View</a>
	     <a class="dropdown-item" href="#" style="font-size: 12px;font-weight: 400;padding: 7px 19px 8px;"><i class="icon-copy fa fa-trash" aria-hidden="true" style="margin-right: 10px;"></i>Delete</a>
	   </div>
	 </div>
	</div>
	<div class="project-block light-info-bg" style="width: 60px;height: 60px;background: #F1C8DB;border-radius: 5px;margin: -50px auto 0;display: flex;align-items: center; justify-content: center;">
	 <img src="img/contractwho-logo 2.png" style="max-width: 80%;">
	</div>
	<h1>contractwho</h1>
	<h5>PHP</h5>
	<div class="row">
	 <div class="col-6 pr-0">
	  <div class="d-flex align-items-center">
	   <i class="icon-copy fa fa-users" style="font-size: 12px !important;margin-right: 5px;"></i>
	   <span class="ms-2" style="font-size: 12px;">5 Members</span>
	 </div>
	</div>
	<div class="col-6 pr-0">
	  <div class="d-flex align-items-center">
	   <i class="icon-copy fa fa-hourglass-2" style="font-size: 12px !important;margin-right: 5px;"></i>
	   <span class="ms-2" style="font-size: 12px;">4 Month</span>
	 </div>
	</div>
	</div>
	<div class="project-progress-div" style="border-top: 1px solid #e0e0e0;margin: 20px 0 0px 0;padding: 18px 0 10px 0;text-align: left !important;">
	  <h1 style="align-items: center;justify-content: space-between !important;margin: 0 0 10px 0;">Progress:<span class="complete-work">Complete</span></h1>
	  <div class="progress progress-xs" style="width: 100%;height: 8px;">
	    <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;background-color: #f3ad06">
	    </div>
	  </div>
	</div>
	</div>
	</div>
	<!----col-md-4----->
	<div class="col-md-4 ">
	 <div class="card-box pricing-card mb-30 employee-card">
	  <div class="side-toggle" style="position: absolute;right: 20px;top: 7px;">
	   <div class="dropdown">
	    <a class="btn" href="#" role="button" data-toggle="dropdown">
	      <i class="icon-copy fa fa-ellipsis-v" aria-hidden="true"></i>
	    </a>
	    <div class="dropdown-menu dropdown-menu-right">
	     <a class="dropdown-item" href="{{route('taskboard')}}" style="font-size: 12px;font-weight: 400;padding: 7px 19px 8px;"><i class="icon-copy fa fa-eye" aria-hidden="true" style="margin-right: 10px;"></i>View</a>
	     <a class="dropdown-item" href="#" style="font-size: 12px;font-weight: 400;padding: 7px 19px 8px;"><i class="icon-copy fa fa-trash" aria-hidden="true" style="margin-right: 10px;"></i>Delete</a>
	   </div>
	 </div>
	</div>
	<div class="project-block light-info-bg" style="width: 60px;height: 60px;background: #FFAA8A ;border-radius: 5px;margin: -50px auto 0;display: flex;align-items: center; justify-content: center;">
	  <img src="img/rpglogo.svg" style="max-width: 80%;">
	</div>
	<h1>RPGSmith</h1>
	<h5>PHP</h5>
	<div class="row">
	 <div class="col-6 pr-0">
	  <div class="d-flex align-items-center">
	   <i class="icon-copy fa fa-users" style="font-size: 12px !important;margin-right: 5px;"></i>
	   <span class="ms-2" style="font-size: 12px;">5 Members</span>
	 </div>
	</div>
	<div class="col-6 pr-0">
	  <div class="d-flex align-items-center">
	   <i class="icon-copy fa fa-hourglass-2" style="font-size: 12px !important;margin-right: 5px;"></i>
	   <span class="ms-2" style="font-size: 12px;">4 Month</span>
	 </div>
	</div>
	</div>
	<div class="project-progress-div" style="border-top: 1px solid #e0e0e0;margin: 20px 0 0px 0;padding: 18px 0 10px 0;text-align: left !important;">
	  <h1 style="align-items: center;justify-content: space-between !important;margin: 0 0 10px 0;">Progress:<span class="progress-work">Progress</span></h1>
	  <div class="progress progress-xs" style="width: 100%;height: 8px;">
	    <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;background-color: #f3ad06">
	    </div>
	  </div>
	</div>
	</div>
	</div>
	<!----col-md-4----->
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