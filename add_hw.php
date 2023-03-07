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
     <!-- Mian content  -->
        <div class="main-content">
          <section class="section">
            <div class="section-body">
              <div class="row">
                
                <div class="col-12 col-md-10 col-lg-12">
                  <div class="text-right" style="padding-bottom: 20px;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Homework</button>
                  </div>
                 <div class="card">
                
      
                  <div class="card-header" style="text-align: center;">
                    <h4 style="text-align: center;">Homework</h4>
                  </div>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Id</th>
                        <th scope="col">Course Id</th>
                        <th scope="col">University Id</th>
                        <th scope="col">Homework Image</th>
                        <th scope="col">Homework Id</th>
                        <th scope="col">Homework Title</th>
                        <th scope="col">Homework Documents</th>
                        <th scope="col">Homework Description</th>
                        <th scope="col">Video Id</th>
                        <th scope="col">Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <!-- <th scope="row">1</th> -->
                        <td>4</td>
                        <td>11</td>
                        <td>22</td>
                        <td>Screenshot (1).png</td>
                        <td>2600</td>
                        <td>Homework-2</td>
                        <td>Hw2.pdf</td>
                        <td>(Spring_2021_ELEC201_24499_L02) Electric Circuits</td>
                        <td>2</td>
                        <td> <button type="button" class="btn btn-success"><i class="fa fa-edit"></i>
                        </button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>
                          </button></td>
                      </tr>
                      <tr>
                        <!-- <th scope="row">1</th> -->
                        <td>5</td>
                        <td>11</td>
                        <td>22</td>
                        <td>Screenshot (1).png</td>
                        <td>2601</td>
                        <td>Homework-3</td>
                        <td>Hw3.pdf</td>
                        <td>(Spring_2021_ELEC201_24499_L08) Electric Circuits</td>
                        <td>2</td>
                        <td> <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>
                          </button></td>
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
                        <h5 class="modal-title" id="formModal">Add Homework</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="card-body">
                          <div class="form-group">
                              <label>Id</label>
                              <input type="number" class="form-control" required="">
                            </div>
                          <div class="form-group">
                              <label>Course Id</label>
                              <input type="text" class="form-control">
                            </div>
                        <div class="form-group">
                          <label>University Id</label>
                          <input type="text" class="form-control" required="">
                        </div>
                        <div class="form-group">
                          <label>Homework Id</label>
                          <input type="text" class="form-control" required="">
                        </div>
                        <div class="form-group">
                          <label>Homework Title</label>
                          <input type="text" class="form-control" required="">
                        </div>
                        
                        <div class="form-group">
                          <label>Homework Description</label>
                          <input type="text" class="form-control" required="">
                        </div>
                        <div class="form-group">
                          <label>Upload Homework Image</label>
                          <input type="file" class="form-control" required="">
                        </div>
                        <div class="form-group">
                          <label>Upload Homework Documents</label>
                          <input type="file" class="form-control" required="">
                        </div>
                        <div class="form-group">
                          <label>Vedio Id</label>
                          <input type="text" class="form-control" required="">
                        </div>
                         
                        
                        <!-- 
                        <div class="form-group mb-0">
                          <label>Message</label>
                          <textarea class="form-control" required=""></textarea>
                        </div> -->
                    </div>
                      <div class="text-right">
                        <button class="btn btn-primary">Add</button>
                      </div>
                     
                    </div>
                  </div>
                </div>
      
                
              
                
              </div>
            </div>
          </section>
      
                  
             
         
        </div>
      </div>
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