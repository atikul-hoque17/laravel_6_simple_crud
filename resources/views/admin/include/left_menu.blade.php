  <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       


                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/category/save') }}">Category Entry</a>
                                </li>
                                <li>
                                    <a href="{{ url('/category/manage') }}">Category Manage</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>



                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/product/save') }}">Product Entry</a>
                                </li>
                                <li>
                                    <a href="{{ url('/product/manage') }}">Product Manage</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>



                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>