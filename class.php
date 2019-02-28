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
                                <h1>Class</h1>
                            </div>


                            <div class="col-md-12 mt-1 color teacher">
                                <div class="row">
                                    <div class="col">
                                        <h1>Class</h1>
                                    </div>
                                    <div class="col">
                                        <input class="form-control fcontrol" type="text" placeholder="Search...">
                                    </div>
                                    <div class="col-6 search-bar">
                                    <div class="row">
                                        <div class="col Add-class">
                                        <button type="button" class="btn btn-success">+ Add Class</button>
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
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>1</td>
                                                <td>One</td>
                                                <td>
                                                    <span>
                                                    <a href="" data-toggle="modal" data-target="#editClass"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </span>
                                                    <span>
                                                    <a href="" data-toggle="modal" data-target="#deleteClass"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </span>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>1</td>
                                                <td>One</td>
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
<div class="modal fade modal-primary" id="editClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Edit Class</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">class</label>
                        <input type="text" class="form-control" value="1">
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
                <h5 class="modal-title text-center" id="exampleModalLabel">Delete Class</h5>
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