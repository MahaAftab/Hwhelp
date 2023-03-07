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
        <!--   `id` varchar(255) NOT NULL,
  `courseid` varchar(255) NOT NULL,
  `UniversityId` varchar(255) NOT NULL,
  `vedioid` varchar(255) NOT NULL,
  `vediotittle` varchar(255) NOT NULL,
  `vediodescription` varchar(255) NOT NULL,
  `vedio` varchar(255) NOT NULL -->
        <div class="main-content">
            <section class="section">
              <div class="section-body">
                <div class="row">
                  <div class="col-12 col-md-10 col-lg-12">
                    <div class="card">
                      <form>
                        <div class="card-header">
                          <h4>Add Video</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Id</label>
                                <input type="number" class="form-control" required="">
                              </div>
                            <!-- -->
                          <div class="form-group">
                            <label>University Id</label>
                            <input type="text" class="form-control" required="">
                          </div>
                          <div class="form-group">
                            <label>Video Id</label>
                            <input type="text" class="form-control">
                          </div> 
                          <div class="form-group">
                            <label>Video Title</label>
                            <input type="text" class="form-control">
                          </div> <div class="form-group">
                            <label>Video Description</label>
                            <input type="text" class="form-control">
                          </div> 
                          <div class="form-group">
                            <label>Upload Video</label>
                            <input type="file" class="form-control" required="">
                          </div>
                       
                          
                          
                          <!-- 
                          <div class="form-group mb-0">
                            <label>Message</label>
                            <textarea class="form-control" required=""></textarea>
                          </div> -->
                        </div>
                        <div class="card-footer text-right">
                          <button class="btn btn-primary">Add</button>
                        </div>
                      </form>
                    </div>
                   
                  </div>
                  
                </div>
              </div>
            </section>
          
          <footer class="main-footer">
            <div class="footer-left">
              <a href="http://Hwhelp.me">HWHELP</a></a>
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