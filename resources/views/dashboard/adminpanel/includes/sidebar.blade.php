<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
        {{-- <img src="{{ asset('public/adminpanel/images/cms.png') }}"
            alt="CMS Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        @php
            $appSettings = App\Models\WebSetting::first();
            // dd($appSettings->name);
        @endphp
        <img src="@if ($appSettings) {{ asset('public/siteLogo' . $appSettings->logo) }} @endif"
            alt="CMS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            @if ($appSettings)
                {{ $appSettings->site_title }}
            @endif
            {{-- Dashboard --}}
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img alt="Change Profile" title="Change Profile" {{-- src="{{ asset('storage/app/public/user_profile_photos/' . Auth::user()->profile_photo) }}" --}}
                    src="@if ($appSettings) {{ asset('public/siteLogo' . $appSettings->logo) }} @endif" class="img-circle elevation-2"
                    alt="User Image">
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
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.create') }}" class="nav-link">
                        <i class="nav-icon">EQ</i>
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Equifax
                        </p>
                    </a>
                </li>
                {{-- Listings --}}
                <li class="nav-header">Listings</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ship"></i>
                        <p>
                            Users Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.allUsers') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Users </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.role') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Roles </p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Settings --}}
                <li class="nav-header">Settings</li>
                <li
                    @if (Route::is('edit.web-setting') || Route::is('edit.app-setting')) class="nav-item menu-is-opening menu-open" @else class="nav-item" @endif>
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/web-setting/edit/1') }}"
                                @if (Route::is('edit.web-setting')) class="nav-link active " @else class="nav-link" @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Web Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/app-setting/edit/1') }}"
                                @if (Route::is('edit.app-setting')) class="nav-link active " @else class="nav-link" @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>App Settings</p>
                            </a>
                        </li>
                    </ul>
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
