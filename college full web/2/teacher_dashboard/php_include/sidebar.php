  <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>
    
            <div class="dropdown sidebar-user m-1 rounded">
                <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center gap-2">
                        <img class="rounded header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                        <span class="text-start">
                            <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                            <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
                        </span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header">Welcome Anna!</h6>
                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                    <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                    <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                    <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                    <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                    <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                </div>
            </div>
            <div id="scrollbar">
                <div class="container-fluid">


                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="index.php" data-bs-toggle="" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboard</span>
                            </a>
						</li>
							
                         <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts"></span> <span  data-key="t-hot">Profile</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="edit_profile.php" target="_blank" class="nav-link" data-key="t-detached">Edit Profile</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="edit_password.php" target="_blank" class="nav-link" data-key="t-detached">Edit Password</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li> 						
						<!-- end Dashboard Menu -->
                       <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Upload</span> <span  data-key="t-hot">Kyc</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="update_aadhar.php" target="_blank" class="nav-link" data-key="t-horizontal">update aadhar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="update_pan.php" target="_blank" class="nav-link" data-key="t-detached">update pan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="update_bank_details.php" target="_blank" class="nav-link" data-key="t-two-column">update bank details</a>
                                    </li>
                                    
                                </ul>
                            </div>
							
                        </li> 
						<hr>
					 <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Upload</span> <span  data-key="t-hot">Notes</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                            <ul class="nav nav-sm flex-column">
											<li class="nav-item">
                                                    <a href="upload_pdf.php" class="nav-link" data-key="t-list">Upload Pdf</a>
                                                </li>
												
                                                <li class="nav-item">
                                                    <a href="view_pdf.php" class="nav-link" data-key="t-list">View Pdf</a>
                                                </li>
												
                                           </ul>
                                        </div>
                         </li>
										
									<li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Assignments</span> <span  data-key="t-hot"></span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="post_assignment.php" class="nav-link" data-key="t-list">Post Assignment</a>
                                                </li>
												 <li class="nav-item">
                                                    <a href="view_assignment.php" class="nav-link" data-key="t-list">View Assignment</a>
                                                </li>
                                           </ul>
                                        </div>
                                    </li>
									
									<li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Courses</span> <span  data-key="t-hot"></span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="view_course.php" class="nav-link" data-key="t-list">Courses Details
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                            </li>
									<li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Exams</span> <span  data-key="t-hot"></span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="exams_list.php" class="nav-link" data-key="t-list">Exams Schedule List
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
									<li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Marks Cards</span> <span  data-key="t-hot"></span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                            <ul class="nav nav-sm flex-column">
                                                 <li class="nav-item">
                                                    <a href="upload_markscard.php" class="nav-link" data-key="t-list">Upload Marks Card
                                                    </a>
                                                </li>
												 <li class="nav-item">
                                                    <a href="view_markscard.php" class="nav-link" data-key="t-list">View Marks Card
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
									<li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Chats</span> <span  data-key="t-hot"></span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="chat_with_admin.php" class="nav-link" data-key="t-list">Chat With Admin
                                                    </a>
                                                </li>
												<li class="nav-item">
                                                    <a href="chatting_history.php" class="nav-link" data-key="t-list">Chatting History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

						
						   <!-- end Dashboard Menu -->
                          <li class="nav-item">
                            <a class="nav-link menu-link" href="logout.php" data-bs-toggle="" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">logout</span>
                            </a>
                         
                        </li>
                        
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
       