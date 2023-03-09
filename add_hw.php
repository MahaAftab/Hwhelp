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
  <div>
  <div class="loader"></div>
  <?php include 'header.php';?>
</div>
    
                <!-- add Modal -->
                        <!-- homework -->
      
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
                      <form action="">
                        <div class="card-body">
                            <input type="hidden" class="form-control" id="id">
                        <div class="form-group">
                            <label>Course Id</label>
                            <input type="text" class="form-control" id="course_id" name="course_id">
                        </div>
                        <div class="form-group">
                          <label>University Id</label>
                          <input type="text" class="form-control" required="" id="uni_id" name="uni_id">
                        </div>
                        <div class="form-group">
                          <label>Upload Homework Image</label>
                          <input type="file" class="form-control" required="" id="hw_img" name="hw_img">
                        </div>
                        <div class="form-group">
                          <label>Homework Id</label>
                          <input type="text" class="form-control" required="" id="hw_id" name="hw_id">
                        </div>
                        <div class="form-group">
                          <label>Upload Homework Documents</label>
                          <input type="file" class="form-control" required="" id="hw_doc" name="hw_doc">
                        </div>
                        <div class="form-group">
                          <label>Homework Title</label>
                          <input type="text" class="form-control" required="" id="hw_title" name="hw_title">
                        </div>
        
                        <div class="form-group">
                          <label>Homework Description</label>
                          <input type="text" class="form-control" required="" id="hw_desc" name="hw_desc">
                        </div>
                        <div class="form-group">
                          <label>Vedio Id</label>
                          <input type="text" class="form-control" required="" id="video_id" name="video_id">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="addButton" name="addButton">Submit</button>
                    </form>
                     
                    </div>
                  </div>
                </div>
              </div>

    <!-- Modal - EDIT Homework-->

              <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="formModal">Edit Homework</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form action="update_hw.php" method="POST" autocomplete="off">
                   
                        <div class="card-body">
                            <input type="hidden" class="form-control" id="updated_id" name="updated_id">
                        <div class="form-group">
                            <label>Course Id</label>
                            <input type="text" class="form-control" id="course_id" name="course_id">
                        </div>
                        <div class="form-group">
                          <label>University Id</label>
                          <input type="text" class="form-control" required="" id="uni_id" name="uni_id">
                        </div>
                        <div class="form-group">
                          <label>Upload Homework Image</label>
                          <input type="file" class="form-control" required="" id="hw_img" name="hw_img">
                        </div>
                        <div class="form-group">
                          <label>Homework Id</label>
                          <input type="text" class="form-control" required="" id="hw_id" name="hw_id">
                        </div>
                        <div class="form-group">
                          <label>Upload Homework Documents</label>
                          <input type="file" class="form-control" required="" id="hw_doc" name="hw_doc">
                        </div>
                        <div class="form-group">
                          <label>Homework Title</label>
                          <input type="text" class="form-control" required="" id="hw_title" name="hw_title">
                        </div>
                        
                        <div class="form-group">
                          <label>Homework Description</label>
                          <input type="text" class="form-control" required="" id="hw_desc" name="hw_desc">
                        </div>
                        <div class="form-group">
                          <label>Vedio Id</label>
                          <input type="text" class="form-control" required="" id="video_id" name="video_id">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" value="Submit" id="editbtn" name="editbtn">Update</button>
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

                          <form action="del_hw.php" method="POST">

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
            </div>
        </div>
        <div class="loader"></div>
  <?php include 'header.php';?>
</div>
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
                  <h4 style="text-align: center;">Homework List</h4>
                </div>

                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'hwhelp');

                $query = "SELECT * FROM homework";
                $query_run = mysqli_query($connection, $query);
            ?>

                <table class="table table-striped" id="course_tbl">
                  <thead>
                    <tr>
                      
                        <th scope="col">Id</th>
                        <th scope="col">Course Id</th>
                        <th scope="col">University Id</th>
                        <th scope="col">Homework Image</th>
                        <th scope="col">Homework Id</th>
                        <th scope="col">Homework Documents</th>
                        <th scope="col">Homework Title</th>
                        <th scope="col">Homework Description</th>
                        <th scope="col">Video Id</th>
                        <th scope="col">Edit/Delete</th>
                       
                    </tr>
                  </thead>

                  <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
                      ?>
                    <tbody>
                            <tr>
                                
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['courseid']; ?> </td>
                                <td> <?php echo $row['UniversityID']; ?> </td>
                                <td> <?php echo $row['Homeworkdimg']; ?> </td>
                                <td> <?php echo $row['HomeworkId']; ?> </td>
                                <td> <?php echo $row['Homeworkdocuments']; ?> </td>
                                <td> <?php echo $row['hwtittle']; ?> </td>
                                <td> <?php echo $row['homeworkdescription']; ?> </td>
                                <td> <?php echo $row['vedioid']; ?> </td>
                                l
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> <i class="fa fa-edit"></i> </button>
                                    <button type="button" class="btn btn-danger deletebtn"> <i class="fa fa-trash"></i> </button>
                                </td>
                                
                            </tr>
                        </tbody>

            <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                  
                </table>
              </div>
            </div>
                </div>
              </section>
              </div>

      <footer class="main-footer">
        <div class="footer-left" style="footer: margin-top: auto;">
          <a href="http://Hwhelp.me">HWHELP</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
    </div>

<!-- General JS Scripts -->
<script src="assets/js/app.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>
<script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#updated_id').val(data[0]);
                $('#course_id').val(data[1]);
                $('#uni_id').val(data[2]);
                $('#hw_img').val(data[3]);
                $('#hw_id').val(data[4]);
                $('#hw_doc').val(data[5]);
                $('#hw_title').val(data[6]);
                $('#hw_desc').val(data[7]);
                $('#video_id').val(data[8]);
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
</body>
</html>