<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ url('/admin') }}" class="brand-link">
    <img src="@if($appSettings){{ asset('/public/website').'/settings/'.$appSettings->logo }}@endif" alt="CMS Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">@if($appSettings){{ $appSettings->name }}@endif</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('storage/app/public/user_profile_photos/'.Auth::user()->profile_photo) }}" class="img-circle elevation-2"
          alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
        <li class="nav-header">Main</li>
        <li class="nav-item">
          <a href="{{ url('/admin') }}" @if(Route::is('admin')) class="nav-link active " @else class="nav-link"  @endif>
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li @if(Route::is('view.users') || Route::is('view.roles-permissions') ) class="nav-item menu-is-opening menu-open" @else class="nav-item"  @endif >
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Users Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/admin/users') }}" @if(Route::is('view.users')) class="nav-link active " @else class="nav-link"  @endif >
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/admin/roles-permissions') }}" @if(Route::is('view.roles-permissions')) class="nav-link active " @else class="nav-link" @endif>
                <i class="far fa-circle nav-icon"></i>
                <p>Roles & Permissions</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Services management in sidebar -->
        <li @if(Route::is('view.categories') || Route::is('view.subcategories') ) class="nav-item menu-is-opening menu-open" @else class="nav-item"  @endif >
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-wrench"></i>
            <p>
              Services Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <!--     Category Management  -->
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/admin/categories') }}" @if(Route::is('view.categories')) class="nav-link active " @else class="nav-link" @endif>
                <i class="far fa-circle nav-icon"></i>
                <p>Category</p>
              </a>
            </li>
            <!--  SubCategory Management  -->
            <li class="nav-item">
              <a href="{{ url('/admin/subcategories') }}" @if(Route::is('view.subcategories')) class="nav-link active " @else class="nav-link" @endif>
                <i class="far fa-circle nav-icon"></i>
                <p>Sub Category</p>
              </a>
            </li>
            <!--  Partner Management -->
            {{--<li class="nav-item">
              <a href="{{ url('/admin/partners') }}" @if(Route::is('view.subcategories')) class="nav-link active " @else class="nav-link" @endif">
                <i class="far fa-circle nav-icon"></i>
                <p> Partner </p>
              </a>
            </li>--}}  
          </ul>
        </li>
        <!--   Partner Management   -->
        {{--<li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-wrench"></i>
            <p>
              Partner Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/partners') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Partner </p>
                </a>
              </li>
          </ul>
        </li>--}}
        <li @if(Route::is('view.villa') || Route::is('view.feature') || Route::is('add.aboutus') || Route::is('add.contactus')  ) class="nav-item menu-is-opening menu-open" @else class="nav-item"  @endif>
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-wrench"></i>
            <p>
              Villa Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/villas') }}" @if(Route::is('view.villa')) class="nav-link active " @else class="nav-link" @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Villa </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/featuresandamenities') }}" @if(Route::is('view.feature')) class="nav-link active " @else class="nav-link" @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Villa Features and Amenities </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/addaboutus') }}" " @if(Route::is('add.aboutus')) class="nav-link active " @else class="nav-link" @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Real estate About Us </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/addcontactus') }}" " @if(Route::is('add.contactus')) class="nav-link active " @else class="nav-link" @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Real estate Contact Us </p>
                </a>
              </li>
          </ul>
        </li>


        <!-- site management -->
        <li class="nav-header">Site Data</li>
          <li class="nav-item">
          <a href="{{ url('/admin/pages') }}" @if(Route::is('view.pages')) class="nav-link active " @else class="nav-link" @endif">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>
              Site Pages
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/subcategorypages') }}" @if(Route::is('view.subcategorypages')) class="nav-link active " @else class="nav-link" @endif">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>
              Sub Categories Pages
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ url('/admin/news') }}" @if(Route::is('view.news')) class="nav-link active " @else class="nav-link" @endif">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
              News
            </p>
          </a>
        </li>

        {{--<li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
              Blogs
            </p>
          </a>
        </li>--}}
        <li class="nav-item">
          <a href="{{ url('/admin/aboutuscontent') }}"  @if(Route::is('view.mainaboutus')) class="nav-link active " @else class="nav-link" @endif">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
              Aboutus Content
            </p>
          </a>
        </li>
        <!--<li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
              Contactus Content
            </p>
          </a>
        </li>-->

        <li class="nav-header">Settings</li>
        <li @if(Route::is('edit.web-setting') || Route::is('edit.app-setting') ) class="nav-item menu-is-opening menu-open" @else class="nav-item"  @endif>
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Settings
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/admin/web-setting/edit/1') }}" @if(Route::is('edit.web-setting')) class="nav-link active " @else class="nav-link" @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Web Settings</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/admin/app-setting/edit/1') }}" @if(Route::is('edit.app-setting')) class="nav-link active " @else class="nav-link" @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>App Settings</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>