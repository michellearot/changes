<?php

	echo '
	<aside class="left-side sidebar-offcanvas" style="background-color: #c35451;">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar" >

                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
            
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    ';
                    if($_SESSION['role'] == "Administrator"){
                        echo '
                    <ul class="sidebar-menu">
                            <li>
                                <a href="../dashboard/dashboard.php">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="../officials/officials.php">
                                    <i class="fa fa-user"></i> <span>Barangay Officials</span>
                                </a>
                            </li>
                            <li>
                                <a href="../staff/staff.php">
                                    <i class="fa fa-user"></i> <span>Staff</span>
                                </a>
                            </li>
                            <li>
                                <a href="../zone/zone.php">
                                    <i class="fa fa-user"></i> <span>Permit Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="../resident/resident.php">
                                    <i class="fa fa-users"></i> <span>Resident</span>
                                </a>
                            </li>
                            <li>
                                <a href="../file/file.php">
                                    <i class="fa fa-file"></i> <span>Files</span>
                                </a>
                            </li>
                            <li>
                                <a href="../permit/permit.php">
                                    <i class="fa fa-file"></i> <span>Cedula</span>
                                </a>
                            </li>
                            <li>
                                <a href="../blotter/blotter.php">
                                    <i class="fa fa-users"></i> <span>Blotter</span>
                                </a>
                            </li>
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-file"></i> <span>Clearance</span>
                                </a>
                            </li>
                            <li>
                                <a href="../activity/activity.php">
                                    <i class="fa fa-calendar"></i> <span>Events</span>
                                </a>
                            </li>
                            <li>
                                <a href="../services/services.php">
                                    <i class="fa fa-calendar"></i> <span>Items and Services</span>
                                </a>
                            </li>
                            <li>
                                <a href="../report/report.php">
                                    <i class="fa fa-file"></i> <span>Report</span>
                                </a>
                            </li>
                            <li>
                                <a href="../logs/logs.php">
                                    <i class="fa fa-history"></i> <span>Logs</span>
                                </a>
                            </li>                            
                            
                    </ul>';
                    }
                    elseif($_SESSION['role'] == "Zone Leader"){
                        echo '
                        <ul class="sidebar-menu">
                            <li>
                                <a href="../permit/permit.php">
                                    <i class="fa fa-file"></i> <span>Cedula</span>
                                </a>
                            </li>
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-file"></i> <span>Clearance</span>
                                </a>
                            </li>
                        </ul>';
                    }
                    elseif(isset($_SESSION['staff'])){
                        echo '
                        <ul class="sidebar-menu">
                            <li>
                                <a href="../officials/officials.php">
                                    <i class="fa fa-user"></i> <span>Barangay Officials</span>
                                </a>
                            </li>   
                            <li>
                                <a href="../resident/resident.php">
                                    <i class="fa fa-users"></i> <span>Resident</span>
                                </a>
                            </li>
                            <li>
                                <a href="../permit/permit.php">
                                    <i class="fa fa-file"></i> <span>Cedula</span>
                                </a>
                            </li>
                            <li>
                                <a href="../blotter/blotter.php">
                                    <i class="fa fa-users"></i> <span>Blotter</span>
                                </a>
                            </li>
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-file"></i> <span>Clearance</span>
                                </a>
                            </li>
                            <li>
                                <a href="../activity/activity.php">
                                    <i class="fa fa-calendar"></i> <span>Events</span>
                                </a>
                            </li>
                            <li>
                                <a href="../services/services.php">
                                    <i class="fa fa-calendar"></i> <span>Items and Services</span>
                                </a>
                            </li>
                        </ul>';
                    }
                    else{
                        echo '
                        <ul class="sidebar-menu">
                            <li>
                                <a href="../permit/permit.php">
                                    <i class="fa fa-file"></i> <span>Cedula</span>
                                </a>
                            </li>
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-file"></i> <span>Clearance</span>
                                </a>
                            </li>
                        </ul>';
                    }
                echo '
                </section>
                <!-- /.sidebar -->
            </aside>
	';
?>