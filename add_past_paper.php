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
        <!--   `id` int(255) NOT NULL,
  `courseid` int(11) NOT NULL,
  `UniversityID` int(11) NOT NULL,
  `examdimg` varchar(255) NOT NULL,
  `examquestext` varchar(255) NOT NULL,
  `examanswer` varchar(255) NOT NULL,
  `examquesimg` varchar(255) NOT NULL,
  `examdownload` varchar(255) NOT NULL -->
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          
          <div class="col-12 col-md-10 col-lg-12">
            <div class="text-right" style="padding-bottom: 20px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Past Exam Paper</button>
            </div>
           <div class="card">
          

            <div class="card-header" style="text-align: center;">
              <h4 style="text-align: center;">Past Exam Papers</h4>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Course Id</th>
                  <th scope="col">University Id</th>
                  <th scope="col">Exam Image</th>
                  <th scope="col">Question Text</th>
                  <th scope="col">Exam Answer</th>
                  <th scope="col">Questions Image</th>
                  <th scope="col">Exam Download</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>11</td>
                  <td>23</td>
                  <td>22</td>
                  <td>exam_1.png</td>
                  <td>exam answer</td>
                  <td>What is Evidence</td>
                  <td>ques_img_1.pdf</td>
                  <td> <button type="button" class="btn btn-success"><i class="fa fa-download"></i></button></td>
                  <td> <button type="button" class="btn btn-success" data-toggle="modal"   data-target="#editmodal"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></button></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
            </div>
          </section>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">Add Past Papers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card-body">
                  <div class="form-group">
                      <label>Id</label>
                      <input type="number" class="form-control" required="" id="id">
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
                  <label>Upload Exam Image</label>
                  <input type="file" class="form-control" required="" id="exam_img">
                </div>
                <div class="form-group">
                  <label>Exam Question</label>
                  <input type="text" class="form-control" required="" id="exam_ques">
                </div>
                <div class="form-group">
                  <label>Exam Question Image</label>
                  <input type="file" class="form-control" required="" id="exam_ques_img">
                </div>
                <div class="form-group">
                 <button class="btn btn-primary">Download Exam</button>
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
                      <input type="number" class="form-control" required="" id="updated_id">
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
                  <label>Upload Exam Image</label>
                  <input type="file" class="form-control" required="" id="exam_img">
                </div>
                <div class="form-group">
                  <label>Exam Question</label>
                  <input type="text" class="form-control" required="" id="exam_ques">
                </div>
                <div class="form-group">
                  <label>Exam Question Image</label>
                  <input type="file" class="form-control" required="" id="exam_ques_img">
                </div>
                <div class="form-group">
                 <button class="btn btn-primary">Download Exam</button>
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
        

        <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                // $tr = $(this).closest('tr');

                // var data = $tr.children("td").map(function () {
                //     return $(this).text();
                // }).get();

                // console.log(data);
                // $('#updated_id').val(data[0]);
                // $('#course_id').val(data[1]);
                // $('#uni_id').val(data[2]);
                // $('#upload_lec_img').val(data[3]);
                // $('#lec_id').val(data[4]);
                // $('#upload_doc').val(data[5]);
                // $('#lec_title').val(data[6]);
                // $('#lec_desc').val(data[7]);
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