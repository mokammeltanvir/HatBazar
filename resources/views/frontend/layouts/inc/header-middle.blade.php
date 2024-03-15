<div class="header-middle header-middle-ptb-1 d-none d-lg-block">
    <div class="container">
        <div class="header-wrap">
            <div class="logo logo-width-1">
                <a href='index.html'><img src="{{asset('assets/frontend')}}/imgs/theme/logo.svg" alt="logo" /></a>
            </div>
            <div class="header-right">
                <div class="search-style-2">
                    <form action="#">
                        <select class="select-active">
                            <option>All Categories</option>
                            <option>Milks and Dairies</option>
                            <option>Wines & Alcohol</option>
                            <option>Clothing & Beauty</option>
                            <option>Pet Foods & Toy</option>
                            <option>Fast food</option>
                            <option>Baking material</option>
                            <option>Vegetables</option>
                            <option>Fresh Seafood</option>
                            <option>Noodles & Rice</option>
                            <option>Ice cream</option>
                        </select>
                        <input type="text" placeholder="Search for items..." />
                    </form>
                </div>
                <div class="header-action-right">
                    <div class="header-action-2">
                        <div class="search-location">
                            <form action="#">
                                <select class="select-active">
                                    <option>Your Location</option>
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>Arizona</option>
                                    <option>Delaware</option>
                                    <option>Florida</option>
                                    <option>Georgia</option>
                                    <option>Hawaii</option>
                                    <option>Indiana</option>
                                    <option>Maryland</option>
                                    <option>Nevada</option>
                                    <option>New Jersey</option>
                                    <option>New Mexico</option>
                                    <option>New York</option>
                                </select>
                            </form>
                        </div>
                        <div class="header-action-icon-2">
                            <a href='#'>
                                <img class="svgInject" alt="Nest" src="{{asset('assets/frontend')}}/imgs/theme/icons/icon-compare.svg" />
                                <span class="pro-count blue">3</span>
                            </a>
                            <a href='#'><span class="lable ml-0">Compare</span></a>
                        </div>
                        <div class="header-action-icon-2">
                            <a href='#'>
                                <img class="svgInject" alt="Nest" src="{{asset('assets/frontend')}}/imgs/theme/icons/icon-heart.svg" />
                                <span class="pro-count blue">6</span>
                            </a>
                            <a href='#'><span class="lable">Wishlist</span></a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class='mini-cart-icon' href='#'>
                                <img alt="Nest" src="{{asset('assets/frontend')}}/imgs/theme/icons/icon-cart.svg" />
                                <span class="pro-count blue">2</span>
                            </a>
                            <a href='#'><span class="lable">Cart</span></a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href='#'><img alt="Nest" src="{{asset('assets/frontend')}}/imgs/shop/thumbnail-3.jpg" /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href='#'>Daisy Casual Bag</a></h4>
                                            <h4><span>1 × </span>$800.00</h4>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href='#'><img alt="Nest" src="{{asset('assets/frontend')}}/imgs/shop/thumbnail-2.jpg" /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href='#'>Corduroy Shirts</a></h4>
                                            <h4><span>1 × </span>$3200.00</h4>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$4000.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a class='outline' href='#'>View cart</a>
                                        <a href='#'>Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-action-icon-2">
                            <a href='{{route('user.dashboard')}}'>
                                <img class="svgInject" alt="Nest" src="{{asset('assets/frontend')}}/imgs/theme/icons/icon-user.svg" />
                            </a>
                            <a href='{{route('user.dashboard')}}'><span class="lable ml-0"> Account</span></a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                <ul>
                                    @if (Auth::check())

                                    <li>
                                        <a href='{{route('user.dashboard')}}'><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        <a href="{{route('logout')}}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();"><i class="fi fi-rs-sign-out mr-10"></i> Sign out</a>

                                </form>
                                    </li>
                                    @else

                                    <li>
                                        <a href='{{route('login')}}'><i class="fi fi-rs-user mr-10"></i>Sign in</a>
                                    </li>
                                    <li>
                                        <a href='{{route('register')}}'><i class="fi fi-rs-settings-sliders mr-10"></i>Sign up</a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
