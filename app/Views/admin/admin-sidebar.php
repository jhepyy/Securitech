<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="admin_dashboards">
            <span class="align-middle">Securitech</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header" style="background-color: #FDD46F; font-size:small; font-weight: bold; color: #808836">
                HOME
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="admin_dashboards">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-header" style="background-color: #FDD46F; font-size:small; font-weight: bold; color: #808836">
                MANAGE
            </li>

            <li class="sidebar-item dropdown">
                <a class="sidebar-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">User</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="admin_Students">Student</a></li>
                    <li><a class="dropdown-item" href="admin_Instructor">Instructor</a></li>
                    <li><a class="dropdown-item" href="admin_Staff">Staff</a></li>
                </ul>
            </li>

            
            <li class="sidebar-item">
                <a class="sidebar-link" href="admin_AttendanceLogs">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Attendance Log</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="admin_Schedule">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Schedule</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="admin_GenerationReport">
                    <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Generation of Reports</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Access Log</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="admin_Equipment">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Equipment Inventory</span>
                </a>
            </li>
            <hr>
            <li class="sidebar-header" style=" font-weight: bold;">
                Time & Date
            </li>
        </ul>

        <div class="sidebar-cta">
            <div class="mt-auto p-3 text-center">
                <h4 id="time" style="color:#B73700 "></h4>
                <p id="date"></p>
            </div>
        </div>
    </div>
</nav>