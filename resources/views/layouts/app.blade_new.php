<!doctype html>
<html lang="en" class="semi-dark">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/backend/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" >
    <link href="{{ asset('assets/backend/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/backend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- <link href="{{ asset('assets/backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" /> -->
    <link href="{{ asset('assets/backend/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/backend/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/plugins/jquery-toast/css/jquery.toast.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/backend/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/backend/plugins/summernote/summernote-bs5.min.css') }}" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="{{ asset('assets/backend/plugins/color-picker/css/choose-color.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- loader-->
    <link href="{{ asset('assets/backend/css/pace.min.css') }}" rel="stylesheet" />
    
    <!--Theme Styles-->
    <link href="{{ asset('assets/backend/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/light-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/header-colors.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/common.css') }}" rel="stylesheet" />
    <title>{{ config('app.name') }}</title>
  </head>

  <body>
    <!--start wrapper-->
    <div class="wrapper">
      <!--start top header-->
      <header class="top-header">        
        <nav class="navbar navbar-expand gap-3">
          <div class="mobile-toggle-icon fs-3 d-flex d-lg-none">
            <i class="bi bi-list"></i>
          </div>
          <!-- <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
            <input class="form-control" type="text" placeholder="Type here to search">
            <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
          </form> -->
          <div class="top-navbar-right ms-auto">
            <!-- <ul class="navbar-nav align-items-center gap-1">
              <li class="nav-item search-toggle-icon d-flex d-lg-none">
                <a class="nav-link" href="javascript:;">
                  <div class="">
                    <i class="bi bi-search"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item dark-mode d-none d-sm-flex">
                <a class="nav-link dark-mode-icon" href="javascript:;">
                  <div class="">
                    <i class="bi bi-moon-fill"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="notifications">
                    <span class="notify-badge">8</span>
                    <i class="bi bi-bell-fill"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-0">
                  <div class="p-2 border-bottom m-2">
                    <h5 class="h5 mb-0">Notifications</h5>
                  </div>
                  <div class="header-notifications-list p-2">
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-purple text-purple"><i class="bi bi-people-fill"></i></div>
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">New Customers <span class="msg-time float-end text-secondary">7 m</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5 new user registered</small>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                      <div class="notification-box bg-light-success text-success"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">24 PDF File <span class="msg-time float-end text-secondary">2 h</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The pdf files generated</small>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-orange text-orange"><i class="bi bi-collection-play-fill"></i></div>
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">Time Response  <span class="msg-time float-end text-secondary">3 h</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5.1 min avarage time response</small>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-info text-info"><i class="bi bi-cursor-fill"></i></div>
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">New Product Approved  <span class="msg-time float-end text-secondary">1 d</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Your new product has approved</small>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-pink text-pink"><i class="bi bi-gift-fill"></i></div>
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">New Comments <span class="msg-time float-end text-secondary">2 w</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New customer comments recived</small>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-warning text-warning"><i class="bi bi-droplet-fill"></i></div>
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">New 24 authors<span class="msg-time float-end text-secondary">1 m</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">24 new authors joined last week</small>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-primary text-primary"><i class="bi bi-mic-fill"></i></div>
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">Your item is shipped <span class="msg-time float-end text-secondary">7 m</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Successfully shipped your item</small>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-success text-success"><i class="bi bi-lightbulb-fill"></i></div>
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">Defense Alerts <span class="msg-time float-end text-secondary">2 h</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">45% less alerts last 4 weeks</small>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-info text-info"><i class="bi bi-bookmark-heart-fill"></i></div>
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">4 New Sign Up <span class="msg-time float-end text-secondary">2 w</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New 4 user registartions</small>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="notification-box bg-light-bronze text-bronze"><i class="bi bi-briefcase-fill"></i></div>
                        <div class="ms-3 flex-grow-1">
                          <h6 class="mb-0 dropdown-msg-user">All Documents Uploaded <span class="msg-time float-end text-secondary">1 mo</span></h6>
                          <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sussessfully uploaded all files</small>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="p-2">
                    <div><hr class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <div class="text-center">View All Notifications</div>
                    </a>
                  </div>
                </div>
              </li>
            </ul> -->
          </div>
          <div class="dropdown dropdown-user-setting">
            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
              <div class="user-setting d-flex align-items-center gap-3">
                <img src="{{ asset('assets/backend/images/avatars/avatar-1.png') }}" class="user-img" alt="">
                <div class="d-none d-sm-block">
                  <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                  <small class="mb-0 dropdown-user-designation">{{ Auth::user()->roles->first()->name }}</small>
                </div>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
			  <li>
                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                  <div class="d-flex align-items-center">
                    <div class=""><i class="bi-key-fill"></i></div>
                    <div class="ms-3"><span>Change password</span></div>
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex align-items-center">
                    <div class=""><i class="bi bi-lock-fill"></i></div>
                    <div class="ms-3" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>Logout</span></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--end top header-->
      <!--start sidebar -->
      <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div>
            <img src="{{ asset('assets/backend/images/boc-logo-final-2.svg') }}" class="logo-icon" alt="logo icon">
          </div>
          <div>
            
          </div>
          <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
          </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
          <li>
            <a href="{{ route('dashboard') }}">
              <div class="parent-icon"><i class="bi bi-house-fill"></i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>
          <li>
            <a href="{{ route('employees.index') }}">
              <div class="parent-icon"><i class="bi bi-people-fill"></i>
              </div>
              <div class="menu-title">Employees</div>
            </a>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-book-fill"></i></div>
              <div class="menu-title">Courses</div>
            </a>
            <ul>
              <li> 
                <a href="{{ route('courses.categories.index') }}"><i class="bi bi-circle"></i>Categories</a>
              </li>
              <li> 
                <a href="{{ route('courses.affiliations.index') }}"><i class="bi bi-circle"></i>Affiliations</a>
              </li>
              <li> 
                <a href="{{ route('courses.index') }}"><i class="bi bi-circle"></i>Courses</a>
              </li>
              <li> 
                <a href="{{ route('courses.seminars.index') }}"><i class="bi bi-circle"></i>Seminars</a>
              </li>
			  <li> 
                <a href="{{ route('courses.trainers.index') }}"><i class="bi bi-circle"></i>Trainers</a>
              </li>
              <li> 
                <a href="{{ route('courses.testimonials.index') }}"><i class="bi bi-circle"></i>Testimonials</a>
              </li>
            </ul>
          </li>
		      <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-journal-richtext"></i></div>
              <div class="menu-title">Consulting</div>
            </a>
            <ul>
              <li> 
                <a href="{{ route('consulting.companies.index') }}"><i class="bi bi-circle"></i>Companies</a>
              </li>
              <li> 
                <a href="{{ route('consulting.index') }}"><i class="bi bi-circle"></i>Case studies</a>
              </li>
              <li> 
                <a href="{{ route('consulting.testimonials.index') }}"><i class="bi bi-circle"></i>Testimonials</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{ route('conferences.index') }}">
              <div class="parent-icon"><i class="bi bi-calendar-event-fill"></i>
              </div>
              <div class="menu-title">Conferences</div>
            </a>
          </li>
          <li>
            <a href="{{ route('news.index') }}">
              <div class="parent-icon"><i class="bi bi-newspaper"></i>
              </div>
              <div class="menu-title">News & Insights</div>
            </a>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-pencil-square"></i>
              </div>
              <div class="menu-title">Blogs</div>
            </a>
            <ul>
              <li> <a href="{{ route('blog.events.index') }}"><i class="bi bi-circle"></i>Blogs</a>
              </li>
              <li> <a href="{{ route('blog.events.newsletter.subscriptions.index') }}"><i class="bi bi-circle"></i>Newsletter subscriptions</a>
              </li>
            </ul>
          </li>
		  <li>
            <a href="{{ route('advisories.index') }}">
              <div class="parent-icon"><i class="bi bi-briefcase-fill"></i>
              </div>
              <div class="menu-title">Advisories</div>
            </a>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-award-fill"></i>
              </div>
              <div class="menu-title">Awards</div>
            </a>
            <ul>
              <li> <a href="{{ route('awards.categories.index') }}"><i class="bi bi-circle"></i>Award categories</a>
              </li>
              <li> <a href="{{ route('awards.index') }}"><i class="bi bi-circle"></i>Awards</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-card-image"></i>
              </div>
              <div class="menu-title">Gallery</div>
            </a>
            <ul>
              <li> <a href="{{ route('galleries.index', ['photos', 'boc-life']) }}"><i class="bi bi-circle"></i>BOC life photos</a>
              </li>
              <li> <a href="{{ route('galleries.index', ['videos', 'boc-life']) }}"><i class="bi bi-circle"></i>BOC life videos</a>
              </li>
              <li> <a href="{{ route('galleries.index', ['photos', 'training']) }}"><i class="bi bi-circle"></i>Training photos</a>
              </li>
              <li> <a href="{{ route('galleries.index', ['videos', 'training']) }}"><i class="bi bi-circle"></i>Training videos</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{ route('leads.index') }}">
              <div class="parent-icon"><i class="bi bi-card-checklist"></i>
              </div>
              <div class="menu-title">Leads</div>
            </a>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-pencil-fill"></i>
              </div>
              <div class="menu-title">Website Content</div>
            </a>
            <ul>
			  <li> <a href="{{ route('website.content.page.settings.index') }}"><i class="bi bi-circle"></i>Page settings</a>
              </li>
			  <li> <a href="{{ route('website.content.marquees.index') }}"><i class="bi bi-circle"></i>Marquees</a>
              </li>
              <li> <a href="{{ route('website.content.locations.index') }}"><i class="bi bi-circle"></i>Locations</a>
              </li>
              <!-- <li> <a href="app-chat-box.html"><i class="bi bi-circle"></i>Consulting Services Page</a>
              </li>
              <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>Training Services Page</a>
              </li>
              <li> <a href="app-emailbox.html"><i class="bi bi-circle"></i>Conferences Page</a>
              </li>
              <li> <a href="app-chat-box.html"><i class="bi bi-circle"></i>What We Offer Page</a>
              </li>
              <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>About Us Page</a>
              </li>
              <li> <a href="app-emailbox.html"><i class="bi bi-circle"></i>Awards & Recognition Page</a>
              </li>
              <li> <a href="app-chat-box.html"><i class="bi bi-circle"></i>Advisory Board Page</a>
              </li>
              <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>News Page</a>
              </li>
              <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>Life @ BO Page</a>
              </li>
              <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>Contact Page</a>
              </li>
              <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>Insights Page</a>
              </li>
              <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>Past Events Page</a>
              </li>
              <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>Upcoming Events Page</a> -->
              </li>
            </ul>
          </li>
          <!-- <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-gear-fill"></i>
              </div>
              <div class="menu-title">Site Settings</div>
            </a>
            <ul>
              <li> <a href="app-chat-box.html"><i class="bi bi-circle"></i>General Settings</a>
              </li>
              <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>SEO Settings</a>
              </li>
              <li> <a href="app-emailbox.html"><i class="bi bi-circle"></i>Analytics Integration</a>
              </li>
              <li> <a href="app-emailbox.html"><i class="bi bi-circle"></i>Multilingual Settings</a>
              </li>
            </ul>
          </li> -->
        </ul>
        <!--end navigation-->
      </aside>
      <!--end sidebar -->

      <!--start content-->
      <main class="page-content">
        @yield('content')
      </main>
      <!--end page main-->

      <!--start overlay-->
      <div class="overlay nav-toggle-icon"></div>
      <!--end overlay-->

      <!--start footer-->
      <footer class="footer">
        <div class="footer-text">
          Copyright © {{ \Carbon\Carbon::now()->year }}. All right reserved.
        </div>
      </footer>
      <!--end footer-->

      <!--Start Back To Top Button-->
      <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
      <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->
    <!--plugins-->
    <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap bundle JS -->
    <script src="{{ asset('assets/backend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/select2/js/select2.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/backend/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/backend/js/pace.min.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/backend/plugins/chartjs/js/Chart.min.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/backend/plugins/chartjs/js/Chart.extension.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/backend/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script> -->
    <script src="{{ asset('assets/backend/plugins/jquery-toast/js/jquery.toast.js') }}"></script> 
    <script src="{{ asset('assets/backend/plugins/sweetalert/js/sweetalert.min.js') }}"></script> 
    <script src="{{ asset('assets/backend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/bootstrap-material-datetimepicker/js/moment.min.js') }}"></script>
	  <script src="{{ asset('assets/backend/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/backend/plugins/summernote/summernote-bs5.min.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    
	  <script src="{{ asset('assets/backend/plugins/color-picker/js/choose-color.js') }}"></script>
    <!--app-->
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>
    <!-- <script src="{{ asset('assets/backend/js/index2.js') }}"></script> -->
    <script src="{{ asset('assets/backend/js/common.js') }}"></script>
  </body>
</html>