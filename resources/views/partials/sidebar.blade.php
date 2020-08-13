@auth


<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" style="height: 2000px;">
    <div class="sidebar-sticky mt-3">
        <ul class="nav flex-column">
            <li class="nav-item border p-4 mb-4">
                <h4 class="text-danger">{{ auth()->user()->name }}</h4>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">

                    <i class="fas fa-tachometer-alt mr-3"></i>


                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('categories.index') }}">
                    <i class="fas fa-list mr-3"></i>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">
                    <i class="fas fa-portrait mr-3"></i>
                    Posts
                </a>
            </li>
            @if(auth()->user()->isAdmin())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="fas fa-users mr-3"></i>
                    Users
                </a>
            </li>
            @endauth
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="far fa-flag mr-3"></i>
                    Reports
                </a>
            </li>

        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>
@endauth