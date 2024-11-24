<div id="sidebar-menu">

    <div class="logo-box">
        <a class='logo logo-light' href='index.html'>
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="24">
            </span>
        </a>
        <a class='logo logo-dark' href='index.html'>
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="24">
            </span>
        </a>
    </div>

    <ul id="side-menu">


        <li>
            <a href="/" >
                <i data-feather="home"></i>
                <span> Dashboard </span>
            </a>

        </li>


        <li>
            <a href="#sidebarIcons" data-bs-toggle="collapse">
                <i data-feather="home"></i>
                <span> Group Management </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarIcons">
                <ul class="nav-second-level">
                    <li>
                        <a class='tp-link' href='{{ route('add.group') }}'>Add Goup</a>
                    </li>
                    <li>
                        <a class='tp-link' href='{{ route('my.groups') }}'>My Groups</a>
                    </li>

                    <li>
                        <a class='tp-link' href='{{ route('all.groups') }}'>All Groups</a>
                    </li>
                </ul>
            </div>
        </li>


        <li>
            <a href="#sidebarAuth" data-bs-toggle="collapse">
                <i data-feather="users"></i>
                <span> Loans Management </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarAuth">
                <ul class="nav-second-level">

                    <li>
                        <a class='tp-link' href='{{ route('my.loans') }}'>View Loan History</a>
                    </li>

                </ul>
            </div>
        </li>

        <li>
            <a href="#sidebarError" data-bs-toggle="collapse">
                <i data-feather="alert-octagon"></i>
                <span> Savings Management</span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarError">
                <ul class="nav-second-level">
                    <li>
                        <a class='tp-link' href='#' onclick="event.preventDefault();">Profit Management</a>
                    </li>
                    <li>
                        <a class='tp-link' href='{{ route('my.savings') }}'>View My Saving History</a>
                    </li>

                </ul>
            </div>
        </li>


        <li>
            <a href="{{ route('my.profile') }}" >
                <i data-feather="file-text"></i>
                <span> User Management </span>
            </a>

        </li>





    </ul>

</div>
