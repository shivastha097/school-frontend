<?php include_once('includes/header.php') ?>

<!-- Navbar -->
<?php include_once('includes/navbar.php') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include_once('includes/sidebar.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid pt-3">
            <div class="row">
                <div class="col-lg-4 col-sm-12 add-exam">
                <div class="card">
                    <div class="card-body">
                    <h1>Add New Exam</h1>
                    <hr>
                    <!-- form -->
                    <form class="fontko">
                        <div class="form-group">
                        <label for="Name">Exam Name</label>
                        <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="inputGander">Subject</label>
                        <select id="inputGander" class="form-control">
                            <option selected>
                            <p class="gens">Select..</p>
                            </option>
                            <option>Science</option>
                            <option>Math</option>
                            <option>Nepali</option>
                            <option>English</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="Name">Select Class</label>
                        <select id="inputGander" class="form-control">
                            <option selected>
                            <p class="gens">Select..</p>
                            </option>
                            <option>One</option>
                            <option>Two</option>
                            <option>Three</option>
                            <option>Four</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="Name">Select Section</label>
                        <select id="inputGander" class="form-control">
                            <option selected>
                            <p class="gens">Select..</p>
                            </option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col">
                            <label for="Name">Select Time</label>
                            <input type="time" class="form-control">
                            </div>
                            <div class="col">
                            <label for="Name">Select Date</label>
                            <input type="Date" class="form-control">
                            </div>
                        </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                    </div>
                </div>
                </div>
                <div class="col-lg-8 col-sm-12 add-exam">
                <div class="card">
                    <div class="card-body">
                    <h1>All Exam Schedule</h1>
                    <!-- header part -->
                    <div class="col-md-12 mt-3 color1 teacher">
                        <div class="row">
                            <div class="col-10 search-bar">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" placeholder="# Roll Type Here..." aria-label="Search" id="mysearch">
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" placeholder="Type Section..." aria-label="Search" id="mysearch">
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="btn btn-primary" type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table -->
                    <table class="table table-sm" ">
                        <thead>
                        <tr>
                            <th class="none ">Exam Name</th>
                            <th>Subject</th>
                            <th>Class</th>
                            <th class="none ">Section</th>
                            <th class="none ">Time</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="none ">Class Test</th>
                            <td>Math</td>
                            <td>3</td>
                            <td class="none ">A</td>
                            <td class="none ">10:00-11:00</td>
                            <td>20/02/2019</td>
                            <td>
                            <span>
                                <a href=" ">
                                <i class="fa fa-eye " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-pencil-square-o " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-trash " aria-hidden="true "></i>
                                </a>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="none ">Class Test</th>
                            <td>Math</td>
                            <td>3</td>
                            <td class="none ">A</td>
                            <td class="none ">10:00-11:00</td>
                            <td>20/02/2019</td>
                            <td>
                            <span>
                                <a href=" ">
                                <i class="fa fa-eye " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-pencil-square-o " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-trash " aria-hidden="true "></i>
                                </a>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="none ">Class Test</th>
                            <td>Math</td>
                            <td>3</td>
                            <td class="none ">A</td>
                            <td class="none ">10:00-11:00</td>
                            <td>20/02/2019</td>
                            <td>
                            <span>
                                <a href=" ">
                                <i class="fa fa-eye " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-pencil-square-o " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-trash " aria-hidden="true "></i>
                                </a>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="none ">Class Test</th>
                            <td>Math</td>
                            <td>3</td>
                            <td class="none ">A</td>
                            <td class="none ">10:00-11:00</td>
                            <td>20/02/2019</td>
                            <td>
                            <span>
                                <a href=" ">
                                <i class="fa fa-eye " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-pencil-square-o " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-trash " aria-hidden="true "></i>
                                </a>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="none ">Class Test</th>
                            <td>Math</td>
                            <td>3</td>
                            <td class="none ">A</td>
                            <td class="none ">10:00-11:00</td>
                            <td>20/02/2019</td>
                            <td>
                            <span>
                                <a href=" ">
                                <i class="fa fa-eye " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-pencil-square-o " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-trash " aria-hidden="true "></i>
                                </a>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="none ">Class Test</th>
                            <td>Math</td>
                            <td>3</td>
                            <td class="none ">A</td>
                            <td class="none ">10:00-11:00</td>
                            <td>20/02/2019</td>
                            <td>
                            <span>
                                <a href=" ">
                                <i class="fa fa-eye " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-pencil-square-o " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-trash " aria-hidden="true "></i>
                                </a>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="none ">Class Test</th>
                            <td>Math</td>
                            <td>3</td>
                            <td class="none ">A</td>
                            <td class="none ">10:00-11:00</td>
                            <td>20/02/2019</td>
                            <td>
                            <span>
                                <a href=" ">
                                <i class="fa fa-eye " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-pencil-square-o " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-trash " aria-hidden="true "></i>
                                </a>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="none ">Class Test</th>
                            <td>Math</td>
                            <td>3</td>
                            <td class="none ">A</td>
                            <td class="none ">10:00-11:00</td>
                            <td>20/02/2019</td>
                            <td>
                            <span>
                                <a href=" ">
                                <i class="fa fa-eye " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-pencil-square-o " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-trash " aria-hidden="true "></i>
                                </a>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="none ">Class Test</th>
                            <td>Math</td>
                            <td>3</td>
                            <td class="none ">A</td>
                            <td class="none ">10:00-11:00</td>
                            <td>20/02/2019</td>
                            <td>
                            <span>
                                <a href=" ">
                                <i class="fa fa-eye " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-pencil-square-o " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-trash " aria-hidden="true "></i>
                                </a>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="none ">Class Test</th>
                            <td>Math</td>
                            <td>3</td>
                            <td class="none ">A</td>
                            <td class="none ">10:00-11:00</td>
                            <td>20/02/2019</td>
                            <td>
                            <span>
                                <a href=" ">
                                <i class="fa fa-eye " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-pencil-square-o " aria-hidden="true "></i>
                                </a>
                            </span>
                            <span>
                                <a href=" ">
                                <i class="fa fa-trash " aria-hidden="true "></i>
                                </a>
                            </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- Edit Model -->
<div class="modal fade modal-primary" id="editExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Edit Exam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Exam Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Class</label>
                        <select name="class" id="" class="form-control">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Section</label>
                        <select name="section" id="" class="form-control">
                            <option value="">A</option>
                            <option value="">B</option>
                            <option value="">C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Time</label>
                        <input type="time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                    <button type="submit" class="btn btn-danger">Save Changes</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

<!-- Delete Model -->
<div class="modal fade modal-danger" id="deleteExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Delete Exam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="" method="post">
                <div class="modal-body">
                    <p class="text-center">
                        Are you sure you want to delete this?
                    </p>
                    <input type="hidden" name="teacher_id" id="teacher_id" value="">
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                </div>
            </form>
            
        </div>
    </div>
</div>






<?php include_once('includes/footer.php') ?>