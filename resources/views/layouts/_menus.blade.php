<div class="py-4 text-gray-500 dark:text-gray-400">

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="">
                <!--<img src="img/deskapp-logo-light.png" alt="" class="dark-logo">-->
                <img src="http://127.0.0.1:8000/img/deskapp-logo-light.png" alt="" class="light-logo">
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">

                <ul id="accordion-menu">
                    <li class="{!! request()->routeIs('dashboard') ? 'active' : '' !!}">
                        <a href="{{route('dashboard')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="{!! request()->routeIs('hr-dashboard') ? 'active' : '' !!}">
                        <a href="{{route('hr-dashboard')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">HR Dashboard</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-library"></span><span class="mtext">Project Management</span>
                        </a>
                        <ul class="submenu">
                            <li class="{!! request()->routeIs('all-project') ? 'active' : '' !!}"><a href="{{route('all-project')}}">All Project</a></li>
                            <li class="{!! request()->routeIs('add-project') ? 'active' : '' !!}"><a href="{{route('add-project')}}">Add Project</a></li>
                        </ul>
                    </li>
                    <li class="{!! request()->routeIs('late-reporting') ? 'active' : '' !!}">
                        <a href="{{route('late-reporting')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-library"></span><span class="mtext">Late Reporting</span>
                        </a>
                        
                    </li>
                    <li class="{!! request()->routeIs('employee-feedbacks') ? 'active' : '' !!}">
                        <a href="{{route('employee-feedbacks')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-calendar1"></span><span class="mtext">Employee feedbacks</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-apartment"></span><span class="mtext">Leaves management</span>
                        </a>
                        <ul class="submenu">
                            <li class="{!! request()->routeIs('today-attendence') ? 'active' : '' !!}"><a href="{{route('today-attendence')}}">Today's Attendence</a></li>
                            <li class="{!! request()->routeIs('leaves-requests') ? 'active' : '' !!}"><a href="{{route('leaves-requests')}}">Leaves Requests</a></li>
                            <li class="{!! request()->routeIs('today-leaves') ? 'active' : '' !!}"><a href="{{route('today-leaves')}}">Today Leaves</a></li>
                        </ul>
                    </li>
                    <li class="{!! request()->routeIs('invoices') ? 'active' : '' !!}">
                        <a href="{{route('invoices')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-calendar1"></span><span class="mtext">Invoices</span>
                        </a>
                    </li>
                    <li class="{!! request()->routeIs('taskboard') ? 'active' : '' !!}">
                        <a href="{{route('taskboard')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-calendar1"></span><span class="mtext">Taskboard</span>
                        </a>
                    </li>
                    <li class="{!! request()->routeIs('payroll') ? 'active' : '' !!}">
                        <a href="{{route('payroll')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-calendar1"></span><span class="mtext">Payroll</span>
                        </a>
                    </li>   
                    <li class="{!! request()->routeIs('assigned-task-details') ? 'active' : '' !!}">
                        <a href="{{route('assigned-task-details')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-calendar1"></span><span class="mtext">Assigned Task Details</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
</div>
