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

        <li
                class="dropdown {{ setActive([
                    'admin.vendor-profile.*',
                    'admin.coupons.*',
                    'admin.shipping-rule.*',
                    'admin.payment-settings.*',
                ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Ecommerce</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.vendor-profile.*']) }}"><a class="nav-link"
                            href="{{ route('admin.vendor-profile.index') }}">Vendor Profile</a></li>

                </ul>
            </li>
        {{-- Manage website --}}
        <li
                class="dropdown {{ setActive([
                    'admin.slider.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i> <span>Manage Website</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.slider.*']) }}"><a class="nav-link"
                        href="{{ route('admin.slider.index') }}">Slider</a></li>
                </ul>
            </li>

            <li
                class="dropdown {{ setActive(['admin.category.*', 'admin.sub-category.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list"></i>
                    <span>Manage Categories</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.category.*']) }}"><a class="nav-link"
                            href="{{ route('admin.category.index') }}">Category</a></li>
                    <li class="{{ setActive(['admin.sub-category.*']) }}"><a class="nav-link"
                            href="{{ route('admin.sub-category.index') }}">Sub Category</a></li>
        </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-box"></i>
                    <span>Manage Products</span></a>
                <ul class="dropdown-menu">
                        <li class="{{ setActive(['admin.brand.*']) }}"><a class="nav-link"
                                href="{{ route('admin.brand.index') }}">Brands</a></li>
                                <li
                                class="{{ setActive([
                                    'admin.products.*',
                                    'admin.products-image-gallery.*',
                                    'admin.products-variant.*',
                                    'admin.products-variant-item.*',
                                    'admin.reviews.*',
                                ]) }}">
                                <a class="nav-link" href="{{ route('admin.products.index') }}">Products</a></li>
                            <li class="{{ setActive(['admin.seller-products.*']) }}"><a class="nav-link"
                                    href="{{ route('admin.seller-products.index') }}">Seller Products</a></li>
                            <li class="{{ setActive(['admin.seller-pending-products.*']) }}"><a class="nav-link"
                                    href="{{ route('admin.seller-pending-products.index') }}">Seller Pending Products</a></li>
                </ul>
            </li>




        <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Blank Page</span></a></li>

      </ul>

      </aside>
  </div>
