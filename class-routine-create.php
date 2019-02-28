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
                    <h3 class="bg3">Student Information</h3>
                    <hr>
                    <form class="bg1">
                        <div class="form-row">
                            <div class="col-md-3 pt-1">
                                <label for="Name">Teacher Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 pt-1">
                                <label for="Name">ID</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 pt-1">
                                <label for="Name">Gender</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-3 pt-3">
                                <label for="inputGander">Class</label>
                                <select id="inputGander" class="form-control">
                                    <option selected><p class="gens">Male</p></option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="col-md-3 pt-3">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 pt-3">
                                <label for="id">Section</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-md-3 pt-3">
                            <label for="religion">Time</label>
                            <input type="time" class="form-control">
                            </div>
                            <div class="col-md-3 pt-3">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control">
                            </div>
                            <div class="col-md-3 pt-3">
                            <h2 class="text1">Phone</h2>
                            <input type="text" name="phone" class="form-control">
                            </div>
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