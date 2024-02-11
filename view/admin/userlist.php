<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Material Pro Lite Template by WrapPixel</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/materialpro-lite/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/images/favicon.png"
    />
    <!-- chartist CSS -->
    <link
      href="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/plugins/chartist-js/dist/chartist.min.css"
      rel="stylesheet"
    />
    <link
      href="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/plugins/chartist-js/dist/chartist-init.css"
      rel="stylesheet"
    />
    <link
      href="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"
      rel="stylesheet"
    />
    <!--This page css - Morris CSS -->
    <link href="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/plugins/c3-master/c3.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/html/css/style.min.css" rel="stylesheet" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand ms-4" href="dashh">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/images/logo-light-icon.png"
                  alt="homepage"
                  class="dark-logo"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img
                  src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/images/logo-light-text.png"
                  alt="homepage"
                  class="dark-logo"
                />
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a
              class="
                nav-toggler
                waves-effect waves-light
                text-white
                d-block d-md-none
              "
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <ul class="navbar-nav d-lg-none d-md-block">
              <li class="nav-item">
                <a
                  class="
                    nav-toggler nav-link
                    waves-effect waves-light
                    text-white
                  "
                  href="javascript:void(0)"
                  ><i class="ti-menu ti-close"></i
                ></a>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto mt-md-0">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->

              <li class="nav-item search-box">
                <a class="nav-link text-muted" href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-3"></i
                ></a>
                <form class="app-search" style="display: none">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-close"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/images/users/1.jpg"
                    alt="user"
                    class="profile-pic me-2"
                  />Admin
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="dashh"
                  aria-expanded="false"
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="dashh"
                  aria-expanded="false"
                >
                  <span class="hide-menu">Profile</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="userlist"
                  aria-expanded="false"
                  ><span class="hide-menu">UserList</span></a
                >
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <div class="sidebar-footer">
          <div class="row">
            <div class="col-4 link-wrap">
              <!-- item-->
              <a
                href="#"
                class="link"
                data-toggle="tooltip"
                title=""
                data-original-title="Settings"
                ><i class="mdi mdi-settings"></i
              ></a>
            </div>
            <div class="col-4 link-wrap">
              <!-- item-->
              <a
                href="#"
                class="link"
                data-toggle="tooltip"
                title=""
                data-original-title="Email"
                ><i class="mdi mdi-gmail"></i
              ></a>
            </div>
            <div class="col-4 link-wrap">
              <!-- item-->
              <a
                href="#"
                class="link"
                data-toggle="tooltip"
                title=""
                data-original-title="Logout"
                ><i class="mdi mdi-power"></i
              ></a>
            </div>
          </div>
        </div>
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
              <h3 class="page-title mb-0 p-0">Dashboard</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <!-- userlist -->
            <div class="col-lg-8">
<div class="card">
                <div class="card-body">
                 <div class="table-responsive">
                    <table class="table user-table">
                      <thead>
                        <tr>
                          <th class="border-top-0">user_id</th>
                          <th class="border-top-0">Name</th>
                          <th class="border-top-0">Address</th>
                          <th class="border-top-0">Email</th>
                          <th class="border-top-0">Action</th>
                        </tr>
                      </thead>
                      <?php
        if($userdata)
        {
          foreach ($userdata as $key => $value) { ?>
                      <tbody>
                        <tr>
                          <td><?php echo $value->user_id ?></td>
                          <td><?php echo $value->name ?></td>
                          <td><?php echo $value->address ?></td>
                          <td><?php echo $value->email ?></td>
                          <form action="" method="post">
                            <td><button type="submit" name="del" value="<?php echo $value->user_id ?>">delete</button></td>
                          </form>
                          
                          <!-- <td> -->
                            <form action="updateuser" method="post">
                                <td><button type="submit" name="update" value="<?php echo $value->user_id ?>" class="btn btn-primary" >update</button></td>
                              <!-- <button type="button" name="update1" value="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> -->
                                <!-- Update1
                              </button> -->
                            </form>
                            <!-- </td> -->

                          <!-- <form action="" method="post">
                            <td><button type="submit" name="upd" value="">update</button></td>
                          </form> -->
                        </tr>
          <?php }}?>             
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- modal -->

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update page</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <!-- update form -->
                <main>  
    <div class="left-section">
      <p>Update</p>
    <div class="right-section">
      <div class="header">
      <div class="form-container">
      
        <form action="" method="post">
          <div class="form-group">
            <span>Name</span>
            <div class="input-box">
              <input type="text" name="name" value="<?php echo $value->name ?>" />
            </div>
          </div>
          <div class="form-group">
            <span>Email</span>
            <div class="input-box">
              <input type="email" name="email" placeholder="example@gmail.com" required/>
            </div>
          </div>
          <div class="form-group">
            <span>Password</span>
            <div class="input-box">
              <input type="password" name="password" placeholder="enter password here" />
            </div>
          </div>
          <div class="form-group">
            <span for="address">Address</span>
            <div class="input-box">
              <input type="text" name="address" placeholder="Enter your address" />
            </div>
          </div>
          <div class="form-group">
            <span></span>
            <!-- <div class="btn-box">
              <button type="reset" class="btn-reset">Reset</button>
              <button type="submit" class="btn-submit" name="submit">Submit</button>
            </div> -->
        </div>
        <!-- <p>already have an account</p><a href="login">login here</a> -->
      </form>
    </div></div>
    
  </main>
  
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
</div>   
</div>
</div>
</div>

          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3">
              <!-- Column -->

              <!-- Column -->

            </div>
            <div class="col-lg-8 col-xlg-9">

            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Table -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            Booksweb
                <a href="dashh">Booksweb </a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/html/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/html/js/sidebarmenu.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/plugins/d3/d3.min.js"></script>
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/html/js/pages/dashboards/dashboard1.js"></script>
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/html/js/custom.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

<!-- Mirrored from demos.wrappixel.com/free-admin-templates/bootstrap/materialpro-bootstrap-free/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Dec 2023 14:04:08 GMT -->
</html>
