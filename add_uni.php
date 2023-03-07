<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <?php include 'header.php';?>
      </div>
       <!-- Main Content -->
       <!-- CREATE TABLE `university` (
  `UniversityID` int(11) NOT NULL,
  `Universityname` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL -->
       <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              
              <div class="col-12 col-md-10 col-lg-12">
                <div class="text-right" style="padding-bottom: 20px;">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add University</button>
                </div>
               <div class="card">
              

                <div class="card-header" style="text-align: center;">
                  <h4 style="text-align: center;">University</h4>
                </div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Id</th>
                      <th scope="col">University Id</th>
                      <th scope="col">University Name</th>
                      <th scope="col">Edit</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>pP9o1fwMFz</td>
                      <td>22</td>
                      <td>Qatar University</td>
                      <td> <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>MatYlPHC77</td>
                      <td>33</td>
                      <td>Harvard University</td>
                      <td> <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Nud0XGnTIW</td>
                      <td>44</td>
                      <td>Stanford University</td>
                      <td> <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
                </div>
              </section>

              <!-- Modal with form -->

              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="formModal">Add University</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form class="">
                        <div class="form-group">
                          <label>Id</label>
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter the Id" name="email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Univeristy Id</label>
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter University Id" name="email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Name</label>
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Univerity Name" name="name">
                          </div>
                        </div>
                      
                        <button type="button" class="btn btn-primary m-t-15 waves-effect">Add</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Vertically Center -->
             
              <!-- Large modal -->
         
              <!-- Small Modal -->
              
              <div class="settingSidebar">
                <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                </a>
                <div class="settingSidebar-body ps-container ps-theme-default">
                  <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                      <h6 class="font-medium m-b-10">Select Layout</h6>
                      <div class="selectgroup layout-color w-50">
                        <label class="selectgroup-item">
                          <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                          <span class="selectgroup-button">Light</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                          <span class="selectgroup-button">Dark</span>
                        </label>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <h6 class="font-medium m-b-10">Sidebar Color</h6>
                      <div class="selectgroup selectgroup-pills sidebar-color">
                        <label class="selectgroup-item">
                          <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                          <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                          <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                        </label>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <h6 class="font-medium m-b-10">Color Theme</h6>
                      <div class="theme-setting-options">
                        <ul class="choose-theme list-unstyled mb-0">
                          <li title="white" class="active">
                            <div class="white"></div>
                          </li>
                          <li title="cyan">
                            <div class="cyan"></div>
                          </li>
                          <li title="black">
                            <div class="black"></div>
                          </li>
                          <li title="purple">
                            <div class="purple"></div>
                          </li>
                          <li title="orange">
                            <div class="orange"></div>
                          </li>
                          <li title="green">
                            <div class="green"></div>
                          </li>
                          <li title="red">
                            <div class="red"></div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <div class="theme-setting-options">
                        <label class="m-b-0">
                          <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                            id="mini_sidebar_setting">
                          <span class="custom-switch-indicator"></span>
                          <span class="control-label p-l-10">Mini Sidebar</span>
                        </label>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <div class="theme-setting-options">
                        <label class="m-b-0">
                          <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                            id="sticky_header_setting">
                          <span class="custom-switch-indicator"></span>
                          <span class="control-label p-l-10">Sticky Header</span>
                        </label>
                      </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                      <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                        <i class="fas fa-undo"></i> Restore Default
                      </a>
                    </div>
                  </div>
            







            <!-- <div class="row">
              <div class="col-12 col-md-10 col-lg-12">
                <div class="card">
                  <form>
                    <div class="card-header">
                      <h4>Add University</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Id</label>
                            <input type="number" class="form-control">
                          </div>
                        <div class="form-group">
                            <label>University Id</label>
                            <input type="text" class="form-control" required="">
                          </div>
                      <div class="form-group">
                        <label>University Name</label>
                        <input type="text" class="form-control" required="">
                      </div> -->
                      
                      
                      <!-- 
                      <div class="form-group mb-0">
                        <label>Message</label>
                        <textarea class="form-control" required=""></textarea>
                      </div> -->
                    <!-- </div> -->
                    <!-- <div class="card-footer text-right">
                      <button class="btn btn-primary">Add</button>
                    </div>
                  </form> -->
                </div>
               
              </div>
              
            </div>
          </div>
        </section>
       
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="http://Hwhelp.me">HWHELP
          </a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->
</html>