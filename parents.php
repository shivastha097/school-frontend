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
        <div class="card mt-3">
            <div class="container-fluid mt-4">
                    <div class="row">
                    
                    <div class="col-12 about">
                        <h1>Parents</h1>
                    </div>


                    <div class="col-md-12 mt-1 color">
                        <div class="row">
                        <div class="col-md-6 teacher">
                            <div class="row">
                            <div class="col-2"><h1>Show</h1></div>
                            <div class="col-10">
                                <select class="custom-select custom-select-sm">
                                <option selected>1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                                </select>
                            </div>
                            </div>
                        </div>
                            <div class="col-md-6 search-bar">
                            <div class="row">
                                <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="# Name" aria-label="Search" id="mysearch">    
                                </div>
                                <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="# Address" aria-label="Search" id="mysearch">    
                                </div>
                                <div class="col-sm-4">
                                <input class="btn btn-primary" type="submit" value="Search">
                                </div>
                            </div>
                            
                            </div>
                        </div>

                        </div>
                        <div class="col-md-12">
                        <div class="row">
                        <table class="table table-font">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th class="none">Gender</th>
                                    <th class="none">Occupation</th>
                                    <th>Address</th>
                                    <th class="none">Email</th>
                                    <th class="none">Phone</th>
                                    <th class="none">Student's Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Alex Wan</td>
                                    <td>
                                        <img src="img/avatar.png" height="50" width="50">
                                    </td>
                                    <td class="none">Male</td>
                                    <td class="none">Doctor</td>
                                    <td>Biratnagar-11</td>
                                    <td class="none">maheshmandal@gmail.com</td>
                                    <td class="none">9852201001</td>
                                    <td class="none">John Wan</td>
                                    <td>
                                        <span>
                                        <a href="parent_profile.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                        <a href="parent_edit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                        <a href="" data-toggle="modal" data-target="#deleteParent"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
       
<!-- Delete Model -->
            <div class="modal fade modal-danger" id="deleteParent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog model-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Delete Parent</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    
                <form action="" method="post">
                    <div class="modal-body">
                        <p class="text-center">
                            Are you sure you want to delete this?
                        </p>
                        <input type="hidden" name="parent_id" id="parent_id" value="">
                    </div>
                    
                        <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                        </div>
                </form>
                    
                </div>
                </div>
            </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once('includes/footer.php') ?>



