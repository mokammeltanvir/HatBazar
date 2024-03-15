<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{route('admin.dashboard')}}">AdminDash</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown active">
          <a href="{{route('admin.dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Ecommerce</li>
        {{-- Manage website --}}
        <li
                class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i> <span>Manage Website</span></a>
                <ul class="dropdown-menu">
                    <li class="#"><a class="nav-link"
                            href="{{ route('admin.slider.index') }}">Slider</a></li>
                </ul>
            </li>

            <li
                class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list"></i>
                    <span>Manage Categories</span></a>
                <ul class="dropdown-menu">
                    <li class="#"><a class="nav-link"
                            href="{{ route('admin.category.index') }}">Category</a></li>
                    <li class="#"><a class="nav-link"
                            href="{{ route('admin.sub-category.index') }}">Sub Category</a></li>
                </ul>
            </li>



        <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Blank Page</span></a></li>

      </ul>

      </aside>
  </div>
