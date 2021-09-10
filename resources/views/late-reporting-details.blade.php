<x-app-layout title="Late Reporting Detail">
 <div class="main-container">
  <div class="pd-ltr-20 xs-pd-20-10">
   <div class="min-height-200px">
    <div class="edit-single-project">
     <h4 class=" text-blue h4">
      John Doe
    </h4>
    <a href="{{route('late-reporting')}}"><button class="btn-primary form-control">Back</button></a>
  </div>
  <div class="container px-0">
    <div class="single-employee-data">
      <div class="employee-single-top">
       <button class="Add-single-empfeedback btn" data-toggle="modal" data-target="#feedback-add" >Add Late Report</button>
       <div class="modal fade customscroll" id="feedback-add" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLongTitle">Add Late Report</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-0">
         <div class="modal-add-feedback">
          <div class="form-group">
           <label>Date</label>
           <input class="form-control date-picker" placeholder="Select Date" type="text">
         </div>
         <div class="form-group">
           <label>Reporting Time</label>
           <input class="form-control time-picker-default" placeholder="time" type="text">
         </div>
         <div class="form-group">
           <label class="col-form-label">Mention Reason</label>
           <textarea class="form-control" type="text" placeholder="Loream ipsum"></textarea>
         </div>
       </div>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-primary">Add</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<div class="row">
 <div class="col-md-2 text-center">
  <img src="img/photo3.jpg" alt="">
</div>
<div class="col-md-10 vertically-center">
  <h1>John Doe</h1>
  <h2>Angular Developer</h2>
  <a href="">abcdefgh@skype.com</a>
</div>
</div>
</div>
<div class="row">
  <div class="All-projects-bg">
   <table class="data-table table hover multiple-select-row nowrap">
    <thead>
     <tr>
      <th>Date</th>
      <th>Time</th>
      <th>Reason</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td class="table-plus">12-07-2021</td>
     <td>10:30 am</td>
     <td>In traffic</td>
   </tr>
   <tr>
     <td class="table-plus">12-07-2021</td>
     <td>10:30 am</td>
     <td>In traffic</td>
   </tr>
   <tr>
     <td class="table-plus">12-07-2021</td>
     <td>10:30 am</td>
     <td>In traffic</td>
   </tr>
   <tr>
     <td class="table-plus">12-07-2021</td>
     <td>10:30 am</td>
     <td>In traffic</td>
   </tr>
 </tbody>
</table>
</div>
</div>
</div>
</div>
<div class="footer-wrap pd-20 mb-20 card-box">
 Duck Tale IT Services
</div>
</div>
</div>
</div>
</x-app-layout>