<x-app-layout title="Employee feedbacks">
   <div class="main-container">
   <div class="pd-ltr-20 xs-pd-20-10">
     <div class="min-height-200px">
       <div class="container px-0">
        <div class="data-combined">
         <h4 class="mb-30 text-blue h4">John Doe Feedback</h4>
         <div class="right-side-content">
          <div class="form-group">
           <label>Select Month</label>
           <input class="form-control month-picker" placeholder="Select Month" type="text">
         </div>
       </div>

     </div>


     <div class="single-employee-data employee-feedback">
      <div class="tab">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true">Week 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Week 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-blue" data-toggle="tab" href="#contact" role="tab" aria-selected="false">Week 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-blue" data-toggle="tab" href="#week" role="tab" aria-selected="false">Week 4</a>
          </li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane fade show active" id="home" role="tabpanel">
           <div class="pd-20">
             <div class="edit-feedback">
               <i class="icon-copy fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#task-add" ></i>
               <i class="icon-copy fa fa-plus" aria-hidden="true"  data-toggle="modal" data-target="#add-performance"></i>
             </div>
             <div class="left-side-view">
               <div class="feedback-div">
                <p class="">Performance</p>
                <ul>
                  <li>1</li>
                  <li>2</li>
                  <li>3</li>
                  <li>4</li>
                  <li>5</li>
                  <li>6</li>
                  <li>7</li>
                  <li>8</li>
                  <li>9</li>
                  <li class="active">10</li>
                </ul>
              </div>
              <div class="feedback-div">
               <p class="">Behaviour</p>
               <ul>
                 <li>1</li>
                 <li>2</li>
                 <li>3</li>
                 <li>4</li>
                 <li>5</li>
                 <li>6</li>
                 <li class="active">7</li>
                 <li>8</li>
                 <li>9</li>
                 <li>10</li>
               </ul>
               <p class="">Write Behavior</p>
               <p class="write-behave-content">Loream ipsum is a dummy context ipsum is a dummy context ipsum is a dummy context ipsum is a dummy context ipsum is a dummy context ipsum is a dummy context ipsum is a dummy context ipsum is a dummy context</p>
             </div>
             <div class="feedback-div">
              <p class="">Attendence</p>
              <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li class="active">5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
              </ul>
            </div>
          </div>

          <div class="right-side-view">
           <h1>5.0</h1>
           <h6>Overall Rating</h6>
         </div>
       </div>
     </div>
     <div class="tab-pane fade" id="profile" role="tabpanel">
       <div class="pd-20">
         <div class="edit-feedback">
           <i class="icon-copy fa fa-plus" aria-hidden="true" data-toggle="modal" data-target="#add-performance"></i>
         </div>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       </div>
     </div>
     <div class="tab-pane fade" id="contact" role="tabpanel">
       <div class="pd-20">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       </div>
     </div>
   </div>
 </div>
</div>
<div class="right-side-yearly">
<!--  <div class="faq-wrap employee-feedback-right-section">
    <div id="accordion">
       <div class="card">
          <div class="card-header">
             <button class="btn btn-block collapsed active" data-toggle="collapse" data-target="#faq2" aria-expanded="false">
                  2021
             </button>
        </div>
        <div id="faq2" class="collapse" data-parent="#accordion" style="">
             <div class="card-body" style="font-size: 13px;">
                <ul>
                   <li><button class="btn yearly-feedback">January</button></li>
                   <li><button class="btn yearly-feedback">February</button></li>
                   <li><button class="btn yearly-feedback">March</button></li>
                   <li><button class="btn yearly-feedback">April</button></li>
                   <li><button class="btn yearly-feedback">May</button></li>
                   <li><button class="btn yearly-feedback">June</button></li>
                   <li><button class="btn yearly-feedback">July</button></li>
                   <li><button class="btn yearly-feedback active">August</button></li>
                   <li><button class="btn yearly-feedback">September</button></li>
                   <li><button class="btn yearly-feedback">October</button></li>
                   <li><button class="btn yearly-feedback">November</button></li>
                   <li><button class="btn yearly-feedback">December</button></li>
              </ul>
         </div>
    </div>
</div>
</div>
<div id="accordion">
  <div class="card">
     <div class="card-header">
        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="false">
             2022
        </button>
   </div>
   <div id="faq3" class="collapse" data-parent="#accordion" style="">
        <div class="card-body" style="font-size: 13px;">
        </div>
   </div>
</div>
</div>
</div> -->

</div>
</div>
</div>
<div class="footer-wrap pd-20 mb-20 card-box footer-feedback">
 Duck Tale IT Services
</div>
</div>

</div>
<!----------------add----------------------------->
<div class="modal fade customscroll" id="add-performance" tabindex="-1" role="dialog">
 <div class="modal-dialog modal-dialog-centered edit-feedback-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLongTitle">Add Feedback</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
     <div class="task-list-form">
       <div class="feedback-div">
         <p class="">Performance</p>
         <ul>
           <li>1</li>
           <li>2</li>
           <li>3</li>
           <li>4</li>
           <li>5</li>
           <li>6</li>
           <li>7</li>
           <li>8</li>
           <li>9</li>
           <li class="active">10</li>
         </ul>
       </div>
       <div class="feedback-div">
        <p class="">Behaviour</p>
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li class="active">10</li>
        </ul>
        <p class="">Write Behavior</p>
        <textarea class="form-control"></textarea>
      </div>
      <div class="feedback-div">
       <p class="">Attendence</p>
       <ul>
         <li>1</li>
         <li>2</li>
         <li>3</li>
         <li>4</li>
         <li>5</li>
         <li>6</li>
         <li>7</li>
         <li>8</li>
         <li>9</li>
         <li class="active">10</li>
       </ul>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-primary">Save</button>
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>
   </div>
 </div>
</div>
</div>
</div>
<!----------------edit----------------------------->
<div class="modal fade customscroll" id="task-add" tabindex="-1" role="dialog">
 <div class="modal-dialog modal-dialog-centered edit-feedback-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLongTitle">Edit Feedback</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
     <div class="task-list-form">
       <div class="feedback-div">
         <p class="">Performance</p>
         <ul>
           <li>1</li>
           <li>2</li>
           <li>3</li>
           <li>4</li>
           <li>5</li>
           <li>6</li>
           <li>7</li>
           <li>8</li>
           <li>9</li>
           <li class="active">10</li>
         </ul>
       </div>
       <div class="feedback-div">
        <p class="">Behaviour</p>
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li class="active">10</li>
        </ul>
        <p class="">Write Behavior</p>
        <textarea class="form-control"></textarea>
      </div>
      <div class="feedback-div">
       <p class="">Attendence</p>
       <ul>
         <li>1</li>
         <li>2</li>
         <li>3</li>
         <li>4</li>
         <li>5</li>
         <li>6</li>
         <li>7</li>
         <li>8</li>
         <li>9</li>
         <li class="active">10</li>
       </ul>
     </div>
   </div>
 </div>
 <div class="modal-footer">
  <button type="button" class="btn btn-primary">Save</button>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</x-app-layout>