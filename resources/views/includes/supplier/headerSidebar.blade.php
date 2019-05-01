========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="" alt="" title="" class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">{{Session::get('supplierId')}}</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>My Profile</span>
                                </a>
    
                                
    
    
                                <!-- item-->
                                <a href="{{route('supplierLogout')}}" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </div>
                        <p class="text-muted">
                            
                            
                        </p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title"></li>

                            <li>
                                <a href="">
                                    <i class="fe-airplay"></i>
                                    
                                    <span> Dashboards </span>
                                </a>
                                
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-shopping-cart"></i>
                                    <span> Product </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                   
                                    <li>
                                        <a href="{{route('addProduct')}}">Add Product</a>
                                    </li>
                                    <li>
                                        <a href="{{route('showProduct')}}">Show Product</a>
                                    </li>
                                   
                                  
                                </ul>
                            </li>

                             

                            
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End