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
        <div class="container-fluid mt-3 bg">
            <div class="card">
                <div class="card-body">
                    <h3 class="bg3">Edit Student Information</h3>
                    <hr>
                    <form class="bg1">
                        <div class="form-row">
                            <div class="col-md-3 pt-1">
                            <label for="Name">First Name</label>
                            <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 pt-1">
                            <label for="Name">Last Name</label>
                            <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 pt-1">
                            <label for="Name">Class</label>
                            <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 pt-1">
                            <label for="Name">Section</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-3 pt-3">
                            <label for="inputGander">Gander*</label>
                                <select id="inputGander" class="form-control">
                                <option selected><p class="gens">Male</p></option>
                                <option>Female</option>
                                </select>
                            </div>
                            <div class="col-md-3 pt-3">
                            <label for="Date">Date Of Birth</label>
                            <input type="Date" class="form-control">
                            </div>
                            <div class="col-md-3 pt-3">
                            <label for="id">Roll</label>
                            <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 pt-3">
                            <label for="subject">Addmission No</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>

                


                        <div class="form-row">
                            <div class="col-md-3 pt-3">
                            <label for="religion">Religion</label>
                            <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 pt-3">
                            <label for="Email">Email</label>
                            <input type="Email" class="form-control">
                            </div>
                            <div class="col-md-3 pt-4">
                            <h2 class="text1">Upload Student Photo(150px X 150px)</h2>
                            <input type="file" name="pic" accept="image/*">
                            </div>
                        </div>

                        <h3 class="bg3 mt-3">Parents Information</h3>
                        <div class="form-row">
                        <div class="col-md-3 pt-2">
                            <label for="Name">Father Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 pt-2">
                            <label for="Name">Mother Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 pt-2">
                            <label for="Name">Father Occupation</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 pt-2">
                            <label for="Name">Mother Occupation</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>

                        
                        <div class="form-row">
                        <div class="col-md-3 pt-2">
                            <label for="Name">Phone Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 pt-2">
                            <label for="Name">Nationality</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 pt-2">
                            <label for="Name">Present Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 pt-2">
                            <label for="Name">Permanent Address</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>

                        <div class="col-md-3 pt-4 bg5">
                        <h2 class="text1">Upload Parents Photo(150px X 150px)</h2>
                        <input type="file" name="pic" accept="image/*">
                        </div>
                        
                            
                        <div class="down">
                        <button type="submit" class="btn btn-warning btn-sm mt-3">Save</button>
                        <button type="reset" class="btn btn-dark btn-sm mt-3">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once('includes/footer.php') ?>