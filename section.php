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
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-6 about">
                                <h1>Section</h1>
                            </div>
                            <hr>

                            <div class="col-md-12 mt-1 color section">
                                <div class="row">
                                    <div class="col">
                                        <h1 style="float-right">Class</h1>
                                        <div class="section1">
                                        <select class="custom-select custom-select-sm">
                                            <option value="">Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        </div>
                                    </div>
                                    <span>
                                        <h1>Section</h1>
                                    </span>
                                    <div class="col-2">
                                        <input class="form-control fcontrol" type="text" placeholder="A">
                                    </div>
                                    <div class="col-4 search-bar">
                                        <div class="row">
                                            <div class="col Add-section">
                                            <button type="button" class="btn btn-success">+ Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>


                                
                                <div class="col-md-12 backcolor">
                                <div class="row">
                                <table class="table table-font">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Class</th>
                                            <th>Section</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>1</td>
                                        <td>One</td>
                                        <td>A</td>
                                        <td>
                                            <span>
                                            <a href="" data-toggle="modal" data-target="#editSection"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </span>
                                            <span>
                                            <a href="" data-toggle="modal" data-target="#deleteClass"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </span>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>1</td>
                                        <td>One</td>
                                        <td>A</td>
                                        <td>
                                            <span>
                                            <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </span>
                                            <span>
                                            <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </span>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>1</td>
                                        <td>One</td>
                                        <td>A</td>
                                        <td>
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
                </div>
            </div>
        </div>
            <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- Edit Model -->
<div class="modal fade modal-primary" id="editSection" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Edit Section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">class</label>
                        <select name="class" id="" class="form-control">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Section</label>
                        <input type="text" class="form-control" value="A">
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
<div class="modal fade modal-danger" id="deleteClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Delete Section</h5>
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