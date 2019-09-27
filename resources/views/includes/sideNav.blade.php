<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile"
            style="background: url({{asset('theme/images/background/user-info.jpg')}}) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{asset('theme/images/users/1.jpg')}}" alt="user" /> </div>
            <!-- User profile text-->
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">Admin Panel</li>
                <li>
                    <a href="{{route('blogs.index')}}" aria-expanded="false">
                        <i class="mdi mdi-book-multiple"></i>
                        <span class="hide-menu">Blog</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('blogs.index')}}" aria-expanded="false">
                        <i class="far fa-newspaper"></i>
                        <span class="hide-menu">posts</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('blogs.index')}}" aria-expanded="false">
                        <i class="mdi mdi-file"></i>
                        <span class="hide-menu">Pages</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('blogs.index')}}" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        <span class="hide-menu">Users</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('blogs.index')}}" aria-expanded="false">
                        <i class="fas fa-comments"></i>
                        <span class="hide-menu">Comments</span>
                    </a>
                </li>

                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span
                            class="hide-menu">With Dropdown</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="map-google.html">Google Maps</a></li>
                        <li><a href="map-vector.html">Vector Maps</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="/settings" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="/mail" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="{{route('logout')}}" class="link" data-toggle="tooltip" title="Logout"><i
                class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
