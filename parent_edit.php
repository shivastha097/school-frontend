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
        <div class="container-fluid mb-4 bg-light">
            <div class="card mt-3">
                <div class="card-body">
                        <h2 class="bg2">Edit Parent Information</h2>
                        <hr>
                        <form class="bg1" method="post" action="" enctype="multipart/form-data">
                            
                            <div class="form-row">       
                                <div class="col-md-9">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 pt-4">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" class="form-control" name='phone'>
                                </div>
                                <div class="col-md-6 pt-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 pt-4">
                                        <label for="teacherType">Occupation</label>
                                        <input type="text" class="form-control" value="Doctor">
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <label for="joinedDate">Student Name</label>
                                        <input type="text" class="form-control" name="" value="Alex Wan">
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <label for="salary">Annual Average Salary</label>
                                        <input type="number" class="form-control" name="salary">
                                    </div>
                                </div>

                            <div class="form-row">
                                <div class="col-md-3 pt-4">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <div class="col-md-3 pt-4">
                                    <label for="inputGander">Gender</label>
                                    <select id="inputGander" class="form-control" name="gender">
                                        <option class="gens" value="male" selected>Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                <div class="col-md-3 pt-4">
                                    <label for="religion">Religion</label>
                                    <select name="religion_id" id="religion" class="form-control">
                                            <option value="hindu">Hindu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="upload pt-4">
                                <label for="">Upload Photo</label>
                                <input type="file" accept="image/*" name="photo">
                            </div>

                            <div class="down">
                                <button type="submit" class="btn btn-warning btn-sm mt-3">Save</button>
                                <button type="reset" class="btn btn-dark btn-sm mt-3">Reset</button>
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