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
                    <li class="nav-small-cap">PERSONAL</li>
                    <li>
                        <a href="starter-kit.html" aria-expanded="false"><i class="fa fa-circle"></i><span
                                class="hide-menu">Starter Kit</span></a>
                    </li>
                    <li>
                        <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span
                                class="hide-menu">With Dropdown</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="map-google.html">Google Maps</a></li>
                            <li><a href="map-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="#" aria-expanded="false"><i
                                class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level
                                dd</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="javascript:void(0)">item 1.1</a></li>
                            <li><a href="javascript:void(0)">item 1.2</a></li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="javascript:void(0)">item 1.3.1</a></li>
                                    <li><a href="javascript:void(0)">item 1.3.2</a></li>
                                    <li><a href="javascript:void(0)">item 1.3.3</a></li>
                                    <li><a href="javascript:void(0)">item 1.3.4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">item 1.4</a></li>
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
            <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
        </div>
        <!-- End Bottom points-->
    </aside>
