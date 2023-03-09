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
      <!-- MAIN CONTENT -->


  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          
          <div class="col-12 col-md-10 col-lg-12">
            <div class="text-right" style="padding-bottom: 20px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Courses</button>
            </div>
           <div class="card">
          

            <div class="card-header" style="text-align: center;">
              <h4 style="text-align: center;">Courses</h4>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Id</th>
                  <th scope="col">Course Id</th>
                  <th scope="col">University Id</th>
                  <th scope="col">Course Name</th>
                  <th scope="col">University Name</th>
                  <th scope="col">Homework Id</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>k89o1fwMFz</td>
                  <td>23</td>
                  <td>22</td>
                  <td>UFCFP4-30-1 - Computer Crime and Digital Evidence</td>
                  <td>Qatar University</td>
                  <td>01</td>
                  <td> <button type="button" class="btn btn-success" data-toggle="modal"   data-target="#editmodal"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></button></td>
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
                  <h5 class="modal-title" id="formModal">Add Courses</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="card-body">
                    <div class="form-group">
                        <label>Id</label>
                        <input type="number" class="form-control" id="id">
                      </div>
                    <div class="form-group">
                        <label>Course Id</label>
                        <input type="text" class="form-control" id="course_id">
                      </div>
                  <div class="form-group">
                    <label>University Id</label>
                    <input type="text" class="form-control" required="" id="uni_id">
                  </div> 
                   <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" class="form-control" required="" id="course_name">
                  </div>
                  <div class="form-group">
                    <label>University Name</label>
                    <input type="text" class="form-control" required="" id="uni_name">
                  </div>
                  <div class="form-group">
                    <label>Homework Id</label>
                    <input type="text" class="form-control" required="" id="hw_id">
                  </div>

                </div>
                <div class="text-right">
                  <button class="btn btn-primary">Add</button>
                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- Modal - EDIT COURSE-->

          <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="formModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="formModal">Edit Past Papers</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form >
                    <div class="form-group">
                        <label>Id</label>
                        <input type="number" class="form-control" id="updated_id">
                      </div>
                    <div class="form-group">
                        <label>Course Id</label>
                        <input type="text" class="form-control" id="course_id">
                      </div>
                  <div class="form-group">
                    <label>University Id</label>
                    <input type="text" class="form-control" required="" id="uni_id">
                  </div> 
                   <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" class="form-control" required="" id="course_name">
                  </div>
                  <div class="form-group">
                    <label>University Name</label>
                    <input type="text" class="form-control" required="" id="uni_name">
                  </div>
                  <div class="form-group">
                    <label>Homework Id</label>
                    <input type="text" class="form-control" required="" id="hw_id">
                  </div>
             
                    </div>
                   
                <button type="submit" class="btn btn-primary m-t-15 waves-effect" value="Submit" id="editbtn" name="editbtn" >Update</button>
              </div>

                  </form>
                    </div>
                  </div>
                </div>
              </div>

            <!-- DELETE MODAL  -->
            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>

                          <form>

                              <div class="modal-body">

                                  <input type="hidden" name="delete_id" id="delete_id">

                                  <h4> Do you want to Delete this Data?</h4>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                                  <button type="submit" name="deletedata" id ="deletedata" class="btn btn-primary"> Yes </button>
                              </div>
                          </form>

                      </div>
                  </div>
              </div>
        
          
      </div>
    </section>

            
       
   
  </div>
  <footer class="main-footer">
    <div class="footer-left">
      <a href="http://Hwhelp.me">HwHelp</a></a>
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



<script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

            });
        });
    </script>
 <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>
</html>