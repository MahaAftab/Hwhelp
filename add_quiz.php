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
        <!-- `id` int(11) NOT NULL,
  `courseid` varchar(255) NOT NULL,
  `UniversityID` varchar(255) NOT NULL,
  `quizdimg` varchar(255) NOT NULL,
  `quizId` varchar(255) NOT NULL,
  `quizquestion` varchar(255) NOT NULL,
  `quiztittle` varchar(255) NOT NULL,
  `quizanswer` varchar(255) NOT NULL,
  `quiztranslation` varchar(255) NOT NULL,
  `quizdownload` varchar(255) NOT NULL -->


  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          
          <div class="col-12 col-md-10 col-lg-12">
            <div class="text-right" style="padding-bottom: 20px;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Quiz</button>
            </div>
           <div class="card">
          

            <div class="card-header" style="text-align: center;">
              <h4 style="text-align: center;">Quizzes</h4>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Course Id</th>
                  <th scope="col">Quiz Image</th>
                  <th scope="col">Quiz Id</th>
                  <th scope="col">Title</th>
                  <th scope="col">Question</th>
                  <th scope="col">Answer</th>
                  <th scope="col">Translation</th>
                  <th scope="col">Download</th>
                  <th scope="col">Edit</th>
                  
                  
                </tr>
              </thead>
              <tbody>
               
                <tr>
                  <td>22</td>
                  <td>43</td>
                  <td>quiz_img_2.png</td>
                  <td>234</td>
                  <td>Cyber Crime and Digital Evidence</td>
                  <td>What is forensics?</td>
                  <td>Forensics is the process of using scientific methods to collect and analyze data from devices so that they can reconstruct past events or identify illegal activity.</td>
                  <td>Translation</td>
                  <td><button type="button" class="btn btn-success"><i class="fa fa-download"></i></button></td>
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
                  <h5 class="modal-title" id="formModal">Add Quiz</h5>
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
                        <label>Upload Quiz Image</label>
                        <input type="file" class="form-control" required="" id="upload_quiz_img">
                      </div> 
                      <div class="form-group">
                        <label>Quiz Id</label>
                        <input type="file" class="form-control" required="" id="quiz_id">
                      </div> 
                      <div class="form-group">
                        <label>Quiz Question</label>
                        <input type="text" class="form-control" required="" id="quiz_ques">
                      </div>
                      <div class="form-group">
                        <label>Quiz Title</label>
                        <input type="text" class="form-control" required="" id="quiz_title">
                      </div>
                      <div class="form-group">
                        <label>Quiz Answer</label>
                        <input type="text" class="form-control" required="" id="quiz_ans">
                      </div>
                      <div class="form-group">
                        <label>Quiz Translation</label>
                        <input type="text" class="form-control" required="" id="quiz_trans">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary">Quiz Download</button>
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
                      <h5 class="modal-title" id="formModal">Edit Homework</h5>
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
                        <label>Upload Quiz Image</label>
                        <input type="file" class="form-control" required="" id="upload_quiz_img">
                      </div> 
                      <div class="form-group">
                        <label>Quiz Id</label>
                        <input type="file" class="form-control" required="" id="quiz_id">
                      </div> 
                      <div class="form-group">
                        <label>Quiz Question</label>
                        <input type="text" class="form-control" required="" id="quiz_ques">
                      </div>
                      <div class="form-group">
                        <label>Quiz Title</label>
                        <input type="text" class="form-control" required="" id="quiz_title">
                      </div>
                      <div class="form-group">
                        <label>Quiz Answer</label>
                        <input type="text" class="form-control" required="" id="quiz_ans">
                      </div>
                      <div class="form-group">
                        <label>Quiz Translation</label>
                        <input type="text" class="form-control" required="" id="quiz_trans">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary">Quiz Download</button>
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