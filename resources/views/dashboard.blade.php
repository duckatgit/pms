<x-app-layout title="Dashboard">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> 
        </h2>

        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        10
                    </p>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total Running Projects
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        6
                    </p>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Leaves Requests
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        3
                    </p>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Employee On Leave Today
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        5
                    </p>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total Client Calls
                    </p>
                </div>
            </div>
        </div>

        <div class="product-wrap index-activies">
            <div class="product-detail-wrap mb-30">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="product-detail-desc pd-20 card-box height-100-p">
                            <div class="card-header">
                                <h4 class="card-titl">Today</h4>
                            </div>
                            <div class="card-body recent-activ">
                                <div class="recent-comment">
                                    <a href="javascript:void(0)" class="dash-card text-dark">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon text-primary">
                                                <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <h6 class="mb-0">No Birthdays Today</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="javascript:void(0)" class="dash-card text-dark">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon text-warning">
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <h6 class="mb-0">Ralph Baker is off sick today</h6>
                                            </div>
                                            <div class="dash-card-avatars">
                                                <div class="e-avatar"><img class="img-fluid" src="img/photo4.jpg" alt=""></div>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="javascript:void(0)" class="dash-card text-dark">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon text-success">
                                                <i class="fa fa-child" aria-hidden="true"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <h6 class="mb-0">Ralph Baker is parenting leave today</h6>
                                            </div>
                                            <div class="dash-card-avatars">
                                                <div class="e-avatar"><img class="img-fluid" src="img/photo9.jpg" alt=""></div>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="javascript:void(0)" class="dash-card text-dark">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon text-danger">
                                                <i class="fa fa-suitcase"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <h6 class="mb-0">Danny ward is away today</h6>
                                            </div>
                                            <div class="dash-card-avatars">
                                                <div class="e-avatar"><img class="img-fluid" src="img/photo3.jpg" alt=""></div>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    <a href="javascript:void(0)" class="dash-card text-dark">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon text-pink">
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <h6 class="mb-0">You are working from home today</h6>
                                            </div>
                                            <div class="dash-card-avatars">
                                                <div class="e-avatar"><img class="img-fluid" src="img/photo7.jpg" alt=""></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="product-detail-desc pd-20 card-box height-100-p">

                            <div class="card-header">
                                <h4 class="card-titl">Running projects</h4>
                            </div>
                            <div class="card-body recent-activ">
                                <div class="recent-comment">
                                    
                                    <div class="dash-card-container">
                                        <div class="dash-card-icon text-primary">
                                            <div class="e-avatar"><img class="img-fluid" src="img/photo3.jpg" alt=""></div>
                                        </div>
                                        <div class="dash-card-content d-flex flex-column align-items-start justify-content-center">
                                            <h6 class="mb-0">Loai</h6>
                                            <p class="mb-0" style="font-size: 12px;">Lorem ipsum is a simply dummy context</p>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="dash-card-container">
                                        <div class="dash-card-icon text-primary">
                                            <div class="e-avatar"><img class="img-fluid" src="img/avatar3.jpg" alt=""></div>
                                        </div>
                                        <div class="dash-card-content d-flex flex-column align-items-start justify-content-center">
                                            <h6 class="mb-0">Verifd data Sheldon</h6>
                                            <p class="mb-0" style="font-size: 12px;">Lorem ipsum is a simply dummy context</p>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="dash-card-container">
                                        <div class="dash-card-icon text-primary">
                                            <div class="e-avatar"><img class="img-fluid" src="img/avatar4.jpg" alt=""></div>
                                        </div>
                                        <div class="dash-card-content d-flex flex-column align-items-start justify-content-center">
                                            <h6 class="mb-0">Bett99</h6>
                                            <p class="mb-0" style="font-size: 12px;">Lorem ipsum is a simply dummy context</p>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="dash-card-container">
                                        <div class="dash-card-icon text-primary">
                                            <div class="e-avatar"><img class="img-fluid" src="img/pexels-photo-1170412.jpeg" alt="" style="height: 100%;"></div>
                                        </div>
                                        <div class="dash-card-content d-flex flex-column align-items-start justify-content-center">
                                            <h6 class="mb-0">Cereusnights Alex</h6>
                                            <p class="mb-0" style="font-size: 12px;">Lorem ipsum is a simply dummy context</p>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="dash-card-container">
                                        <div class="dash-card-icon text-primary">
                                            <div class="e-avatar"><img class="img-fluid" src="img/photo7.jpg" alt=""></div>
                                        </div>
                                        <div class="dash-card-content d-flex flex-column align-items-start justify-content-center">
                                            <h6 class="mb-0">contractwho</h6>
                                            <p class="mb-0" style="font-size: 12px;">Lorem ipsum is a simply dummy context</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-wrap index-activies">
            <div class="product-detail-wrap mb-30">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 dash-statistics">
                        <div class="product-detail-desc card-box height-100-p">
                            
                            <div class="card-body">
                                <h5 class="card-title">Statistics</h5>
                                <div class="stats-list">
                                    <div class="stats-info">
                                        <p>Today Leave <strong>4 <small>/ 65</small></strong></p>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="stats-info">
                                        <p>Pending Invoice <strong>15 <small>/ 92</small></strong></p>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="stats-info">
                                        <p>Completed Projects <strong>85 <small>/ 112</small></strong></p>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="stats-info">
                                        <p>Open Tickets <strong>190 <small>/ 212</small></strong></p>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="stats-info">
                                        <p>Closed Tickets <strong>22 <small>/ 212</small></strong></p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 task-statistc">
                        <div class="product-detail-desc card-box height-100-p">
                            <div class="card-body">
                                <h4 class="card-title">Task Statistics</h4>
                                <div class="statistics">
                                    <div class="row">
                                        <div class="col-md-6 col-6 text-center">
                                            <div class="stats-box mb-4">
                                                <p>Total Tasks</p>
                                                <h3>385</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6 text-center">
                                            <div class="stats-box mb-4">
                                                <p>Overdue Tasks</p>
                                                <h3>19</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 22%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">22%</div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 24%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">24%</div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 26%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">21%</div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">10%</div>
                                </div>
                                <div>
                                    <p><i class="fa fa-dot-circle-o text-purple mr-2"></i>Completed Tasks <span class="float-right">166</span></p>
                                    <p><i class="fa fa-dot-circle-o text-warning mr-2"></i>Inprogress Tasks <span class="float-right">115</span></p>
                                    <p><i class="fa fa-dot-circle-o text-success mr-2"></i>On Hold Tasks <span class="float-right">31</span></p>
                                    <p><i class="fa fa-dot-circle-o text-danger mr-2"></i>Pending Tasks <span class="float-right">47</span></p>
                                    <p class="mb-0"><i class="fa fa-dot-circle-o text-info mr-2"></i>Review Tasks <span class="float-right">5</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 leaves-statistc">
                        <div class="product-detail-desc card-box height-100-p">
                            <div class="card-body">
                                <h4 class="card-title">Today Absent <span class="badge bg-inverse-danger ml-2">5</span></h4>
                                <div class="leave-info-box">
                                    <div class="media align-items-center">
                                        <a href="/user/profile" class="avatar"><img alt="" src="assets/img/user.jpg"></a>
                                        <div class="media-body">
                                            <div class="text-sm my-0">Martin Lewis</div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mt-3">
                                        <div class="col-6">
                                            <h6 class="mb-0">4 Sep 2019</h6>
                                            <span class="text-sm text-muted">Leave Date</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="badge bg-inverse-danger">Pending</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="leave-info-box">
                                    <div class="media align-items-center">
                                        <a href="/user/profile" class="avatar"><img alt="" src="assets/img/user.jpg"></a>
                                        <div class="media-body">
                                            <div class="text-sm my-0">Martin Lewis</div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mt-3">
                                        <div class="col-6">
                                            <h6 class="mb-0">4 Sep 2019</h6>
                                            <span class="text-sm text-muted">Leave Date</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="badge bg-inverse-success">Approved</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="load-more text-center">
                                    <a class="text-dark" href="javascript:void(0);">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
</x-app-layout>