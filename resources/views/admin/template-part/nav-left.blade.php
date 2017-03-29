<div id="left">
                <div class="media user-media bg-dark dker">
                    <div class="user-media-toggleHover">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-wrapper bg-dark">
                        <a class="user-link" href="">
                            <img class="media-object img-thumbnail user-img" alt="User Picture" src="admin/assets/img/user.gif">
                            <!-- <span class="label label-danger user-label">16</span> -->
                        </a>

                        <div class="media-body">
                            <h5 class="media-heading">{{ Auth::user()->name }}</h5>
                            <ul class="list-unstyled user-info">
                                <li><a href="#">Administrator</a></li>
                                <!-- <li>Last Access : <br>
                                    <small><i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #menu -->
                <ul id="menu" class="bg-blue dker">
                    <li class="nav-header">Menu</li>
                    <li class="nav-divider"></li>
                    <li class="">
                        <a href="dashboard.html">
                            <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-tasks"></i>
                            <span class="link-title">Components</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="collapse">
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>&nbsp; Bg Color </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>&nbsp; Bg Image </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>&nbsp; Buttons </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>&nbsp; Icon </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>&nbsp; Pricing Table </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>&nbsp; Progress </a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class="fa fa-cog"></i><span class="link-title">&nbsp;Settings</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <i class="fa fa-thermometer-empty"></i><span class="link-title">&nbsp;Temp</span>
                        </a>
                    </li>

                </ul>
                <!-- /#menu -->
            </div>