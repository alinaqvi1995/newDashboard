<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="{{ url('/admin') }}" class="brand-link">
        <img src="@if ($appSettings) {{ asset('public/website') . '/settings/' . $appSettings->logo }} @endif"
            alt="CMS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            @if ($appSettings)
                {{ $appSettings->name }}
            @endif
        </span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img alt="Change Profile" title="Change Profile"
                    src="{{ asset('storage/app/public/user_profile_photos/' . Auth::user()->profile_photo) }}"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        {{-- @if (auth()->user()->checkRole('admin')) --}}
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
                    <li class="nav-header">Main</li>
                    <li class="nav-item">
                        <a href="" {{-- @if (Route::is('admin')) class="nav-link active " @else class="nav-link" @endif --}}>
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" {{-- @if (Route::is('admin')) class="nav-link active " @else class="nav-link" @endif --}}>
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Create
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        {{-- @else
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                </ul>
            </nav>
        @endif --}}
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
