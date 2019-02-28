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
                        <h1>Add New Subject</h1>
                        <hr>
                        <!-- form -->
                        <form class="fontko">
                            <div class="form-group">
                                <label for="">Subject Code</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Name">Subject Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputGander">Subject Type</label>
                                <select id="inputGander" class="form-control">
                                    <option selected><p class="gens">Select..</p></option>
                                    <option>Mathematics</option>
                                    <option>Theory</option>
                                    <option>Language</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Name">Select Class</label>
                                <select id="inputGander" class="form-control">
                                    <option selected><p class="gens">Select..</p></option>
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                    <option>Four</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>


            </div>
            <div class="col-lg-8 col-sm-12 add-exam ">
                <div class="card">
                    <div class="card-body">
                        <h1>All Subjects</h1>
                        <!-- header part -->
                        <div class="col-md-12 mt-3 color1 teacher">
                            <div class="row">
                                <div class="col-6 search-bar">
                                    <div class="row">
                                        <div class="col-sm-4">
                                        <input class="form-control" type="text" placeholder="# Subject code..." aria-label="Search" id="mysearch">    
                                        </div>
                                        <div class="col-sm-4">
                                        <input class="form-control" type="text" placeholder="# Subject Name..." aria-label="Search" id="mysearch">    
                                        </div>
                                        <div class="col-sm-4">
                                        <input class="btn btn-primary" type="submit" value="Search">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <!-- Table -->
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Subject Code</th>
                                        <th class="none">Subject Name</th>
                                        <th>Subject Type</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="none">1</th>
                                        <td>201</td>
                                        <td>English</td>
                                        <td class="none">Language</td>
                                        <td class="none">5</td>
                                        <td>
                                            <span>
                                            <a href="" data-toggle="modal" data-target=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </span>
                                            <span>
                                            <a href="" data-toggle="modal" data-target="#editSubject"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </span>
                                            <span>
                                            <a href="" data-toggle="modal" data-target="#deleteSubject"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="none">2</th>
                                        <td>202</td>
                                        <td>Science</td>
                                        <td class="none">Theory</td>
                                        <td class="none">8</td>
                                        <td>
                                            <span>
                                            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </span>
                                            <span>
                                            <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </span>
                                            <span>
                                            <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="none">3</th>
                                        <td>504</td>
                                        <td>Maths</td>
                                        <td class="none">Theory</td>
                                        <td class="none">8</td>
                                        <td>
                                            <span>
                                            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </span>
                                            <span>
                                            <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </span>
                                            <span>
                                            <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
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
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- Edit Model -->
<div class="modal fade modal-primary" id="editSubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Edit Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Subject Code</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Subject Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Subject Type</label>
                        <select name="section" id="" class="form-control">
                            <option value="">Theory</option>
                            <option value="">Language</option>
                            <option value="">Maths</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Class</label>
                        <select name="" id="" class="form-control">
                            <option value="">One</option>
                            <option value="">Two</option>
                            <option value="">Three</option>
                        </select>
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
<div class="modal fade modal-danger" id="deleteSubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Delete Subject</h5>
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